<?php

use Automattic\Jetpack\WP_JS_Data_Sync\Schema\Schema;
use Automattic\Jetpack_Boost\Modules\Image_Size_Analysis\Data_Sync\Image_Size_Analysis_Entry;
use Automattic\Jetpack_Boost\Modules\Image_Size_Analysis\Data_Sync\Image_Size_Analysis_Summary;
use Automattic\Jetpack_Boost\REST_API\Endpoints\Image_Analysis_Action_Fix;
use Automattic\Jetpack_Boost\REST_API\Endpoints\Image_Size_Analysis_Summary_Action_Paginate;
use Automattic\Jetpack_Boost\REST_API\Endpoints\Image_Size_Analysis_Summary_Action_Start;

$image_data = Schema::as_assoc_array(
	array(
		'id'           => Schema::as_string(),
		'thumbnail'    => Schema::as_string(),
		'device_type'  => Schema::enum( array( 'phone', 'desktop' ) ),
		'status'       => Schema::enum( array( 'active', 'ignored' ) )->fallback( 'active' ),
		'instructions' => Schema::as_string(),
		'type'         => Schema::enum( array( 'image_size', 'bad_entry', 'image_missing' ) )->fallback( 'bad_entry' ),
		'page'         => Schema::as_assoc_array(
			array(
				'id'       => Schema::as_number(),
				'url'      => Schema::as_string(),
				'edit_url' => Schema::as_string()->nullable(),
				'title'    => Schema::as_string(),
			)
		),
		'image'        => Schema::as_assoc_array(
			array(
				'url'        => Schema::as_string(),
				'fixed'      => Schema::as_boolean()->fallback( false ),
				'dimensions' => Schema::as_assoc_array(
					array(
						'file'           => Schema::as_assoc_array(
							array(
								'width'  => Schema::as_number(),
								'height' => Schema::as_number(),
							)
						),
						'expected'       => Schema::as_assoc_array(
							array(
								'width'  => Schema::as_number(),
								'height' => Schema::as_number(),
							)
						),
						'size_on_screen' => Schema::as_assoc_array(
							array(
								'width'  => Schema::as_number(),
								'height' => Schema::as_number(),
							)
						),
					)
				),
				'weight'     => Schema::as_assoc_array(
					array(
						'current'   => Schema::as_number(),
						'potential' => Schema::as_number(),
					)
				),
			)
		),

	)
)->fallback(
	array(
		'id'     => '',
		'type'   => 'bad_entry',
		'status' => 'active',
	)
);

$image_size_analysis = Schema::as_assoc_array(
	array(
		'last_updated' => Schema::as_number(),
		'total_pages'  => Schema::as_number(),
		'images'       => Schema::as_array( $image_data ),
	)
);

$entry = new Image_Size_Analysis_Entry();
jetpack_boost_register_option( 'image_size_analysis', $image_size_analysis, $entry );
jetpack_boost_register_action( 'image_size_analysis', 'paginate', new Image_Size_Analysis_Summary_Action_Paginate() );
jetpack_boost_register_action( 'image_size_analysis', 'fix', new Image_Analysis_Action_Fix() );

$group_schema = Schema::as_assoc_array(
	array(
		'issue_count'   => Schema::as_number(),
		'scanned_pages' => Schema::as_number(),
		'total_pages'   => Schema::as_number(),
	)
)->nullable();

$summary_schema = Schema::as_assoc_array(
	array(
		'status'    => Schema::enum(
			array(
				'not-found',
				'new',
				'queued',
				'completed',
				'error',
				'error_stuck',
			)
		),
		'report_id' => Schema::as_number()->nullable(),
		'groups'    => Schema::as_assoc_array(
			array(
				'core_front_page' => $group_schema,
				'singular_page'   => $group_schema,
				'singular_post'   => $group_schema,
				'other'           => $group_schema,
				'fixed'           => $group_schema,
			)
		)->nullable(),
	)
)->fallback(
	array(
		'status' => 'not-found',
		'groups' => null,
	)
);

jetpack_boost_register_option(
	'image_size_analysis_summary',
	$summary_schema,
	new Image_Size_Analysis_Summary()
);
jetpack_boost_register_action( 'image_size_analysis_summary', 'start', new Image_Size_Analysis_Summary_Action_Start() );
