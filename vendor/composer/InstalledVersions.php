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
      'reference' => 'c176afb2088f66514409b23aa2e1f6cf302c2128',
    ),
    'automattic/jetpack-assets' => 
    array (
      'pretty_version' => '1.11.x-dev',
      'version' => '1.11.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '39fb6a7ad62c914142ee63ee3f80e037299e7cb5',
    ),
    'automattic/jetpack-autoloader' => 
    array (
      'pretty_version' => '2.10.x-dev',
      'version' => '2.10.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '8400447253a72c770171ee7c6e0a437942b0460c',
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
      'reference' => 'd00cfdc0aed40035894dcb0c1471f8ad86a91904',
    ),
    'automattic/jetpack-connection' => 
    array (
      'pretty_version' => '1.30.x-dev',
      'version' => '1.30.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '06ffdb5d2f363cdfec35e3418ecbec2bb96723ae',
    ),
    'automattic/jetpack-constants' => 
    array (
      'pretty_version' => '1.6.x-dev',
      'version' => '1.6.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '3690b683abccb3bef723bd64f265fb5a697194f9',
    ),
    'automattic/jetpack-device-detection' => 
    array (
      'pretty_version' => '1.4.x-dev',
      'version' => '1.4.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'b952017d587284ea56bb6e3ef6a6b25af24e21e1',
    ),
    'automattic/jetpack-heartbeat' => 
    array (
      'pretty_version' => '1.3.x-dev',
      'version' => '1.3.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'cfb19995dd26859e733d666f4cb6320399859cb3',
    ),
    'automattic/jetpack-lazy-images' => 
    array (
      'pretty_version' => '1.5.x-dev',
      'version' => '1.5.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'b88a3c8eddabae878dc5c832482650ee8f28d198',
    ),
    'automattic/jetpack-options' => 
    array (
      'pretty_version' => '1.13.x-dev',
      'version' => '1.13.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '447452b843a66f672f081d924488e586ed40a3a9',
    ),
    'automattic/jetpack-redirect' => 
    array (
      'pretty_version' => '1.7.x-dev',
      'version' => '1.7.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'fa66bb08e664fc0b2ff3cff80b5cff0b6d5ce076',
    ),
    'automattic/jetpack-roles' => 
    array (
      'pretty_version' => '1.4.x-dev',
      'version' => '1.4.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'f568f11a3a7370f5edf174d1378a0102b7b57b11',
    ),
    'automattic/jetpack-status' => 
    array (
      'pretty_version' => '1.8.x-dev',
      'version' => '1.8.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'f11a906102452f90e10670c7078202af3d4f36ba',
    ),
    'automattic/jetpack-terms-of-service' => 
    array (
      'pretty_version' => '1.9.x-dev',
      'version' => '1.9.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '92c366d9b875923f9a95f5a9d21174f32ff813f9',
    ),
    'automattic/jetpack-tracking' => 
    array (
      'pretty_version' => '1.13.x-dev',
      'version' => '1.13.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '195389f68a927ba6c11e19bbf08cec6ada75fcbd',
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
