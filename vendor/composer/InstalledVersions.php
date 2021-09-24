<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;








class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.3.0-alpha',
    'version' => '1.3.0.0-alpha',
    'aliases' => 
    array (
    ),
    'reference' => NULL,
    'name' => 'automattic/jetpack-boost',
  ),
  'versions' => 
  array (
    'automattic/jetpack-a8c-mc-stats' => 
    array (
      'pretty_version' => '1.4.x-dev',
      'version' => '1.4.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '02e787d88503104b0397dbb9a132790f456dd96a',
    ),
    'automattic/jetpack-assets' => 
    array (
      'pretty_version' => '1.11.x-dev',
      'version' => '1.11.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '010bf48969b3d954e8bc5d7d92f9ae3b5da85ee9',
    ),
    'automattic/jetpack-autoloader' => 
    array (
      'pretty_version' => '2.10.x-dev',
      'version' => '2.10.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'fc13463a639a628dea5d3b4caae7f51bb56d2483',
    ),
    'automattic/jetpack-boost' => 
    array (
      'pretty_version' => '1.3.0-alpha',
      'version' => '1.3.0.0-alpha',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'automattic/jetpack-config' => 
    array (
      'pretty_version' => '1.5.x-dev',
      'version' => '1.5.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '92bd30c392993c1a9a59b1e5208e65420ae17e2d',
    ),
    'automattic/jetpack-connection' => 
    array (
      'pretty_version' => '1.30.x-dev',
      'version' => '1.30.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'ca092a9a248d5a7a6c28049779bcaf7fc8e1002a',
    ),
    'automattic/jetpack-constants' => 
    array (
      'pretty_version' => '1.6.x-dev',
      'version' => '1.6.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'aeb4b45f38654e3754dab93f51a1fec2743bfd7f',
    ),
    'automattic/jetpack-device-detection' => 
    array (
      'pretty_version' => '1.4.x-dev',
      'version' => '1.4.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'ca8d9d43d25ca26e359006df83b28642f28a65ca',
    ),
    'automattic/jetpack-heartbeat' => 
    array (
      'pretty_version' => '1.3.x-dev',
      'version' => '1.3.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '5837d5e092bd3a78a54a82ac9a5dc28e6d0aa5a4',
    ),
    'automattic/jetpack-lazy-images' => 
    array (
      'pretty_version' => '2.0.x-dev',
      'version' => '2.0.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'c66d2491b7ce231602f9ad0e3cc67be55916903b',
    ),
    'automattic/jetpack-options' => 
    array (
      'pretty_version' => '1.13.x-dev',
      'version' => '1.13.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '56d266de75553fd1e20d7ee05d16fbf1f0b8461c',
    ),
    'automattic/jetpack-redirect' => 
    array (
      'pretty_version' => '1.7.x-dev',
      'version' => '1.7.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '4c20ce2ae110b689537f47c15ada64e8d81a954c',
    ),
    'automattic/jetpack-roles' => 
    array (
      'pretty_version' => '1.4.x-dev',
      'version' => '1.4.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '6051424596f96fcdb05e3e8427572703cebb7beb',
    ),
    'automattic/jetpack-status' => 
    array (
      'pretty_version' => '1.8.x-dev',
      'version' => '1.8.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '7a536b35652ebe7b1a118351eca21a437dd0eb3d',
    ),
    'automattic/jetpack-terms-of-service' => 
    array (
      'pretty_version' => '1.9.x-dev',
      'version' => '1.9.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'e3b4285fe114b8743fcff4d7f9b6a129c6491df5',
    ),
    'automattic/jetpack-tracking' => 
    array (
      'pretty_version' => '1.13.x-dev',
      'version' => '1.13.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '1132957cb427b21720e10bf0aa55ffbae671c99d',
    ),
    'tedivm/jshrink' => 
    array (
      'pretty_version' => 'v1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0513ba1407b1f235518a939455855e6952a48bbc',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}

if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}








public static function getRawData()
{
@trigger_error('getRawData only returns the first dataset loaded, which may not be what you expect. Use getAllRawData() instead which returns all datasets for all autoloaders present in the process.', E_USER_DEPRECATED);

return self::$installed;
}







public static function getAllRawData()
{
return self::getInstalled();
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}





private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
