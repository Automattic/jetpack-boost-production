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
      'reference' => '02072d53b005ad27cd5d88a1fe02520ea88ba6cd',
    ),
    'automattic/jetpack-assets' => 
    array (
      'pretty_version' => '1.11.x-dev',
      'version' => '1.11.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '69da9ef8b15d1177686af05a3ffbcb35bfec90b2',
    ),
    'automattic/jetpack-autoloader' => 
    array (
      'pretty_version' => '2.10.x-dev',
      'version' => '2.10.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '02516a500e930ccc49c277a193e931ed7891facf',
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
      'pretty_version' => '1.4.x-dev',
      'version' => '1.4.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '24ba6e139fac5e74ea5a5b015d87e5985623bc49',
    ),
    'automattic/jetpack-connection' => 
    array (
      'pretty_version' => '1.30.x-dev',
      'version' => '1.30.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '63befa7e7fbc625c92ab8db418833934b54b8ea8',
    ),
    'automattic/jetpack-constants' => 
    array (
      'pretty_version' => '1.6.x-dev',
      'version' => '1.6.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '88c260198565409039d2cebeadb44afd1d2328ab',
    ),
    'automattic/jetpack-device-detection' => 
    array (
      'pretty_version' => '1.4.x-dev',
      'version' => '1.4.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '609a835cc69404f85c79d060468cedaad9f6ded2',
    ),
    'automattic/jetpack-heartbeat' => 
    array (
      'pretty_version' => '1.3.x-dev',
      'version' => '1.3.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '9f7fef1525be0e920b201c30085a0517bc8c03bc',
    ),
    'automattic/jetpack-lazy-images' => 
    array (
      'pretty_version' => '1.5.x-dev',
      'version' => '1.5.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'b80d5e5de94b98315303bb3bfb8918470060fd41',
    ),
    'automattic/jetpack-options' => 
    array (
      'pretty_version' => '1.13.x-dev',
      'version' => '1.13.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'e3e3c90423933ea5402ddcddf6d558f2a0c29ff2',
    ),
    'automattic/jetpack-redirect' => 
    array (
      'pretty_version' => '1.7.x-dev',
      'version' => '1.7.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'b5ee07ebf8e8357d069e95fd8216e4cdfb8b876e',
    ),
    'automattic/jetpack-roles' => 
    array (
      'pretty_version' => '1.4.x-dev',
      'version' => '1.4.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '4c7970eb7926780be10aa35620cccace009a2522',
    ),
    'automattic/jetpack-status' => 
    array (
      'pretty_version' => '1.8.x-dev',
      'version' => '1.8.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '3beb1383cfe7fa0832a2daf9f9439a9739a80b5a',
    ),
    'automattic/jetpack-terms-of-service' => 
    array (
      'pretty_version' => '1.9.x-dev',
      'version' => '1.9.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '26f1011ab656f78f816a0af64859f90535083579',
    ),
    'automattic/jetpack-tracking' => 
    array (
      'pretty_version' => '1.13.x-dev',
      'version' => '1.13.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '9165b6d5d60d8c5937b55396e54f2ec78d3c6fe5',
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
