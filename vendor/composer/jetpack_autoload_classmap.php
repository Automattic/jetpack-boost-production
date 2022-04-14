<?php

// This file `jetpack_autoload_classmap.php` was auto generated by automattic/jetpack-autoloader.

$vendorDir = dirname(__DIR__);
$baseDir   = dirname($vendorDir);

return array(
	'Automattic\\Jetpack_Boost\\Tests\\Lib\\WP_Test_Minify' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/tests/php/lib/test-class-minify.php'
	),
	'Automattic\\Jetpack_Boost\\Tests\\Lib\\WP_Test_Url' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/tests/php/lib/test-class-url.php'
	),
	'Automattic\\Jetpack_Boost\\Tests\\Lib\\WP_Test_Viewport' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/tests/php/lib/test-class-viewport.php'
	),
	'Automattic\\Jetpack_Boost\\Tests\\Lib\\WP_Test_Speed_Score_History' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/tests/php/lib/test-class-speed-score-history.php'
	),
	'Automattic\\Jetpack_Boost\\Tests\\Lib\\WP_Test_Analytics' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/tests/php/lib/test-class-analytics.php'
	),
	'Automattic\\Jetpack_Boost\\Tests\\Base_Test_Case' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/tests/php/class-base-test-case.php'
	),
	'Automattic\\Jetpack\\Autoloader\\AutoloadFileWriter' => array(
		'version' => '2.11.9999999.9999999-dev',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/AutoloadFileWriter.php'
	),
	'Automattic\\Jetpack\\Autoloader\\CustomAutoloaderPlugin' => array(
		'version' => '2.11.9999999.9999999-dev',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/CustomAutoloaderPlugin.php'
	),
	'Automattic\\Jetpack\\Autoloader\\AutoloadProcessor' => array(
		'version' => '2.11.9999999.9999999-dev',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/AutoloadProcessor.php'
	),
	'Automattic\\Jetpack\\Autoloader\\ManifestGenerator' => array(
		'version' => '2.11.9999999.9999999-dev',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/ManifestGenerator.php'
	),
	'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => array(
		'version' => '2.11.9999999.9999999-dev',
		'path'    => $vendorDir . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php'
	),
	'JShrink\\Minifier' => array(
		'version' => '1.4.0.0',
		'path'    => $vendorDir . '/tedivm/jshrink/src/JShrink/Minifier.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\Contracts\\Has_Endpoints' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/contracts/Has_Endpoints.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\Contracts\\Endpoint' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/contracts/Endpoint.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\Contracts\\Permission' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/contracts/Permission.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\Permissions\\Current_User_Admin' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/permissions/Current_User_Admin.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\Permissions\\Signed_With_Blog_Token' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/permissions/Signed_With_Blog_Token.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\Permissions\\Nonce' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/permissions/Nonce.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\Route' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/Route.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\REST_API' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/REST_API.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\Endpoints\\Recommendations_Reset' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/endpoints/Recommendations_Reset.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\Endpoints\\Cloud_CSS_Status' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/endpoints/Cloud_CSS_Status.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\Endpoints\\Optimization_Status' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/endpoints/Optimization_Status.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\Endpoints\\Update_Cloud_CSS' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/endpoints/Update_Cloud_CSS.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\Endpoints\\Generator_Request' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/endpoints/Generator_Request.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\Endpoints\\Generator_Success' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/endpoints/Generator_Success.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\Endpoints\\Recommendations_Dismiss' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/endpoints/Recommendations_Dismiss.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\Endpoints\\Generator_Status' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/endpoints/Generator_Status.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\Endpoints\\Request_Cloud_CSS' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/endpoints/Request_Cloud_CSS.php'
	),
	'Automattic\\Jetpack_Boost\\REST_API\\Endpoints\\Generator_Error' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/rest-api/endpoints/Generator_Error.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Output_Filter' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/class-output-filter.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Viewport' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/class-viewport.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Premium_Features' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/Premium_Features.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Nonce' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/class-nonce.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Status' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/Status.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Boost_API' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/Boost_API.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Cacheable' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/class-cacheable.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Assets' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/class-assets.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Url' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/class-url.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\WPCOM_Boost_API_Client' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/WPCOM_Boost_API_Client.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Setup' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/Setup.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Analytics' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/class-analytics.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Storage_Post_Type' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/class-storage-post-type.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Collection' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/class-collection.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Environment_Change_Detector' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/class-environment-change-detector.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\CLI' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/class-cli.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Debug' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/class-debug.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Critical_CSS\\Display_Critical_CSS' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/critical-css/Display_Critical_CSS.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Critical_CSS\\Recommendations' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/critical-css/Recommendations.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Critical_CSS\\Critical_CSS_Storage' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/critical-css/Critical_CSS_Storage.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Critical_CSS\\Critical_CSS_State' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/critical-css/Critical_CSS_State.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Critical_CSS\\Admin_Bar_Compatibility' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/critical-css/Admin_Bar_Compatibilty.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Critical_CSS\\Source_Providers\\Providers\\Provider' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/critical-css/source-providers/providers/Provider.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Critical_CSS\\Source_Providers\\Providers\\WP_Core_Provider' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/critical-css/source-providers/providers/WP_Core_Provider.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Critical_CSS\\Source_Providers\\Providers\\Post_ID_Provider' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/critical-css/source-providers/providers/Post_ID_Provider.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Critical_CSS\\Source_Providers\\Providers\\Taxonomy_Provider' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/critical-css/source-providers/providers/Taxonomy_Provider.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Critical_CSS\\Source_Providers\\Providers\\Singular_Post_Provider' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/critical-css/source-providers/providers/Singular_Post_Provider.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Critical_CSS\\Source_Providers\\Providers\\Archive_Provider' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/critical-css/source-providers/providers/Archive_Provider.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Critical_CSS\\Source_Providers\\Source_Providers' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/critical-css/source-providers/Source_Providers.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Critical_CSS\\Critical_CSS_Invalidator' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/critical-css/Critical_CSS_Invalidator.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Utils' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/class-utils.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Minify' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/class-minify.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Connection' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/class-connection.php'
	),
	'Automattic\\Jetpack_Boost\\Lib\\Transient' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/lib/class-transient.php'
	),
	'Automattic\\Jetpack_Boost\\Jetpack_Boost' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/class-jetpack-boost.php'
	),
	'Automattic\\Jetpack_Boost\\Contracts\\Has_Slug' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/contracts/Has_Slug.php'
	),
	'Automattic\\Jetpack_Boost\\Contracts\\Boost_API_Client' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/contracts/Boost_API_Client.php'
	),
	'Automattic\\Jetpack_Boost\\Contracts\\Has_Setup' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/contracts/Has_Setup.php'
	),
	'Automattic\\Jetpack_Boost\\Contracts\\Feature' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/contracts/Feature.php'
	),
	'Automattic\\Jetpack_Boost\\Features\\Speed_Score\\Speed_Score' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/features/speed-score/Speed_Score.php'
	),
	'Automattic\\Jetpack_Boost\\Features\\Speed_Score\\Speed_Score_Request' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/features/speed-score/Speed_Score_Request.php'
	),
	'Automattic\\Jetpack_Boost\\Features\\Speed_Score\\Speed_Score_History' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/features/speed-score/Speed_Score_History.php'
	),
	'Automattic\\Jetpack_Boost\\Features\\Optimizations\\Render_Blocking_JS\\Render_Blocking_JS' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/features/optimizations/render-blocking-js/class-render-blocking-js.php'
	),
	'Automattic\\Jetpack_Boost\\Features\\Optimizations\\Optimizations' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/features/optimizations/Optimizations.php'
	),
	'Automattic\\Jetpack_Boost\\Features\\Optimizations\\Optimization' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/features/optimizations/Optimization.php'
	),
	'Automattic\\Jetpack_Boost\\Features\\Optimizations\\Cloud_CSS\\Cloud_CSS' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/features/optimizations/cloud-css/Cloud_CSS.php'
	),
	'Automattic\\Jetpack_Boost\\Features\\Optimizations\\Cloud_CSS\\Cloud_CSS_Request' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/features/optimizations/cloud-css/Cloud_CSS_Request.php'
	),
	'Automattic\\Jetpack_Boost\\Features\\Optimizations\\Critical_CSS\\CSS_Proxy' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/features/optimizations/critical-css/CSS_Proxy.php'
	),
	'Automattic\\Jetpack_Boost\\Features\\Optimizations\\Critical_CSS\\Critical_CSS' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/features/optimizations/critical-css/Critical_CSS.php'
	),
	'Automattic\\Jetpack_Boost\\Features\\Optimizations\\Critical_CSS\\Generator' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/features/optimizations/critical-css/Generator.php'
	),
	'Automattic\\Jetpack_Boost\\Features\\Optimizations\\Critical_CSS\\Regenerate_Admin_Notice' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/features/optimizations/critical-css/Regenerate_Admin_Notice.php'
	),
	'Automattic\\Jetpack_Boost\\Features\\Optimizations\\Lazy_Images\\Lazy_Images' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/features/optimizations/lazy-images/class-lazy-images.php'
	),
	'Automattic\\Jetpack_Boost\\Admin\\Admin' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/admin/class-admin.php'
	),
	'Automattic\\Jetpack_Boost\\Admin\\Admin_Notice' => array(
		'version' => '1.4.3.0-alpha',
		'path'    => $baseDir . '/app/admin/class-admin-notice.php'
	),
	'Automattic\\Jetpack\\My_Jetpack\\Module_Product' => array(
		'version' => '1.0.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-my-jetpack/src/products/class-module-product.php'
	),
	'Automattic\\Jetpack\\My_Jetpack\\Products\\Videopress' => array(
		'version' => '1.0.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-my-jetpack/src/products/class-videopress.php'
	),
	'Automattic\\Jetpack\\My_Jetpack\\Products\\Boost' => array(
		'version' => '1.0.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-my-jetpack/src/products/class-boost.php'
	),
	'Automattic\\Jetpack\\My_Jetpack\\Products\\Backup' => array(
		'version' => '1.0.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-my-jetpack/src/products/class-backup.php'
	),
	'Automattic\\Jetpack\\My_Jetpack\\Products\\Search' => array(
		'version' => '1.0.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-my-jetpack/src/products/class-search.php'
	),
	'Automattic\\Jetpack\\My_Jetpack\\Products\\Anti_Spam' => array(
		'version' => '1.0.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-my-jetpack/src/products/class-anti-spam.php'
	),
	'Automattic\\Jetpack\\My_Jetpack\\Products\\Scan' => array(
		'version' => '1.0.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-my-jetpack/src/products/class-scan.php'
	),
	'Automattic\\Jetpack\\My_Jetpack\\Product' => array(
		'version' => '1.0.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-my-jetpack/src/products/class-product.php'
	),
	'Automattic\\Jetpack\\My_Jetpack\\Products\\Crm' => array(
		'version' => '1.0.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-my-jetpack/src/products/class-crm.php'
	),
	'Automattic\\Jetpack\\My_Jetpack\\Products\\Security' => array(
		'version' => '1.0.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-my-jetpack/src/products/class-security.php'
	),
	'Automattic\\Jetpack\\My_Jetpack\\Products\\Extras' => array(
		'version' => '1.0.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-my-jetpack/src/products/class-extras.php'
	),
	'Automattic\\Jetpack\\My_Jetpack\\Hybrid_Product' => array(
		'version' => '1.0.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-my-jetpack/src/products/class-hybrid-product.php'
	),
	'Automattic\\Jetpack\\My_Jetpack\\Products' => array(
		'version' => '1.0.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-my-jetpack/src/class-products.php'
	),
	'Automattic\\Jetpack\\My_Jetpack\\REST_Products' => array(
		'version' => '1.0.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-my-jetpack/src/class-rest-products.php'
	),
	'Automattic\\Jetpack\\My_Jetpack\\Initializer' => array(
		'version' => '1.0.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-my-jetpack/src/class-initializer.php'
	),
	'Automattic\\Jetpack\\My_Jetpack\\Wpcom_Products' => array(
		'version' => '1.0.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-my-jetpack/src/class-wpcom-products.php'
	),
	'Automattic\\Jetpack\\My_Jetpack\\REST_Purchases' => array(
		'version' => '1.0.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-my-jetpack/src/class-rest-purchases.php'
	),
	'Automattic\\Jetpack\\Jetpack_Lazy_Images' => array(
		'version' => '2.1.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-lazy-images/src/lazy-images.php'
	),
	'Automattic\\Jetpack\\Device_Detection\\User_Agent_Info' => array(
		'version' => '1.4.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-device-detection/src/class-user-agent-info.php'
	),
	'Automattic\\Jetpack\\Device_Detection' => array(
		'version' => '1.4.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-device-detection/src/class-device-detection.php'
	),
	'Automattic\\Jetpack\\Config' => array(
		'version' => '1.7.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-config/src/class-config.php'
	),
	'Automattic\\Jetpack\\Composer\\Manager' => array(
		'version' => '1.1.9999999.9999999-dev',
		'path'    => $vendorDir . '/automattic/jetpack-composer-plugin/src/class-manager.php'
	),
	'Automattic\\Jetpack\\Composer\\Plugin' => array(
		'version' => '1.1.9999999.9999999-dev',
		'path'    => $vendorDir . '/automattic/jetpack-composer-plugin/src/class-plugin.php'
	),
	'Jetpack_Tracks_Client' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/legacy/class-jetpack-tracks-client.php'
	),
	'Jetpack_IXR_ClientMulticall' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/legacy/class-jetpack-ixr-clientmulticall.php'
	),
	'Jetpack_Tracks_Event' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/legacy/class-jetpack-tracks-event.php'
	),
	'Jetpack_Signature' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/legacy/class-jetpack-signature.php'
	),
	'Jetpack_XMLRPC_Server' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/legacy/class-jetpack-xmlrpc-server.php'
	),
	'Jetpack_IXR_Client' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/legacy/class-jetpack-ixr-client.php'
	),
	'Automattic\\Jetpack\\Connection\\REST_Connector' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-rest-connector.php'
	),
	'Automattic\\Jetpack\\Connection\\Client' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-client.php'
	),
	'Automattic\\Jetpack\\Connection\\Package_Version_Tracker' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-package-version-tracker.php'
	),
	'Automattic\\Jetpack\\Connection\\XMLRPC_Connector' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-xmlrpc-connector.php'
	),
	'Automattic\\Jetpack\\Connection\\Tokens' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-tokens.php'
	),
	'Automattic\\Jetpack\\Connection\\Package_Version' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-package-version.php'
	),
	'Automattic\\Jetpack\\Connection\\Manager' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-manager.php'
	),
	'Automattic\\Jetpack\\Connection\\Server_Sandbox' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-server-sandbox.php'
	),
	'Automattic\\Jetpack\\Connection\\Plugin_Storage' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-plugin-storage.php'
	),
	'Automattic\\Jetpack\\Connection\\Rest_Authentication' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-rest-authentication.php'
	),
	'Automattic\\Jetpack\\Connection\\Secrets' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-secrets.php'
	),
	'Automattic\\Jetpack\\Tracking' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-tracking.php'
	),
	'Automattic\\Jetpack\\Connection\\Webhooks' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-webhooks.php'
	),
	'Automattic\\Jetpack\\Connection\\Manager_Interface' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/interface-manager.php'
	),
	'Automattic\\Jetpack\\Connection\\Nonce_Handler' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-nonce-handler.php'
	),
	'Automattic\\Jetpack\\Terms_Of_Service' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-terms-of-service.php'
	),
	'Automattic\\Jetpack\\Connection\\XMLRPC_Async_Call' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-xmlrpc-async-call.php'
	),
	'Automattic\\Jetpack\\Connection\\Plugin' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-plugin.php'
	),
	'Automattic\\Jetpack\\Connection\\Webhooks\\Authorize_Redirect' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/webhooks/class-authorize-redirect.php'
	),
	'Automattic\\Jetpack\\Connection\\Utils' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-utils.php'
	),
	'Automattic\\Jetpack\\Connection\\Initial_State' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-initial-state.php'
	),
	'Automattic\\Jetpack\\Connection\\Error_Handler' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-error-handler.php'
	),
	'Automattic\\Jetpack\\Connection\\Urls' => array(
		'version' => '1.37.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-connection/src/class-urls.php'
	),
	'Automattic\\Jetpack\\Plugins_Installer' => array(
		'version' => '0.1.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-plugins-installer/src/class-plugins-installer.php'
	),
	'Automattic\\Jetpack\\Automatic_Install_Skin' => array(
		'version' => '0.1.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-plugins-installer/src/class-automatic-install-skin.php'
	),
	'Automattic\\Jetpack\\Roles' => array(
		'version' => '1.4.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-roles/src/class-roles.php'
	),
	'Automattic\\Jetpack\\Assets\\Semver' => array(
		'version' => '1.17.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-assets/src/class-semver.php'
	),
	'Automattic\\Jetpack\\Assets' => array(
		'version' => '1.17.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-assets/src/class-assets.php'
	),
	'Automattic\\Jetpack\\Heartbeat' => array(
		'version' => '1.4.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-heartbeat/src/class-heartbeat.php'
	),
	'Automattic\\Jetpack\\Admin_UI\\Admin_Menu' => array(
		'version' => '0.2.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-admin-ui/src/class-admin-menu.php'
	),
	'Automattic\\Jetpack\\Redirect' => array(
		'version' => '1.7.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-redirect/src/class-redirect.php'
	),
	'Automattic\\Jetpack\\Status' => array(
		'version' => '1.13.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-status/src/class-status.php'
	),
	'Automattic\\Jetpack\\Status\\Cache' => array(
		'version' => '1.13.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-status/src/class-cache.php'
	),
	'Automattic\\Jetpack\\CookieState' => array(
		'version' => '1.13.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-status/src/class-cookiestate.php'
	),
	'Automattic\\Jetpack\\Modules' => array(
		'version' => '1.13.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-status/src/class-modules.php'
	),
	'Automattic\\Jetpack\\Status\\Host' => array(
		'version' => '1.13.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-status/src/class-host.php'
	),
	'Automattic\\Jetpack\\Paths' => array(
		'version' => '1.13.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-status/src/class-paths.php'
	),
	'Automattic\\Jetpack\\Files' => array(
		'version' => '1.13.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-status/src/class-files.php'
	),
	'Automattic\\Jetpack\\Errors' => array(
		'version' => '1.13.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-status/src/class-errors.php'
	),
	'Automattic\\Jetpack\\Status\\Visitor' => array(
		'version' => '1.13.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-status/src/class-visitor.php'
	),
	'Jetpack_Options' => array(
		'version' => '1.15.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-options/legacy/class-jetpack-options.php'
	),
	'Automattic\\Jetpack\\A8c_Mc_Stats' => array(
		'version' => '1.4.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-a8c-mc-stats/src/class-a8c-mc-stats.php'
	),
	'Automattic\\Jetpack\\Constants' => array(
		'version' => '1.6.9999999.9999999-dev',
		'path'    => $baseDir . '/jetpack_vendor/automattic/jetpack-constants/src/class-constants.php'
	),
);
