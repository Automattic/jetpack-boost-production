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
      'reference' => '0618eb1df032372de2a292f4ef64efa24aaf16c2',
    ),
    'automattic/jetpack-assets' => 
    array (
      'pretty_version' => '1.11.x-dev',
      'version' => '1.11.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '37b404ddd85eeff08358fe20cd3daccdfb0f6acf',
    ),
    'automattic/jetpack-autoloader' => 
    array (
      'pretty_version' => '2.10.x-dev',
      'version' => '2.10.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '4b14166b5412c0765897a376596a912c36e7407b',
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
      'reference' => '14bfb1801a4a9311a280d6bb072bc990728a4611',
    ),
    'automattic/jetpack-constants' => 
    array (
      'pretty_version' => '1.6.x-dev',
      'version' => '1.6.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '56f1203a5e6a5ce0aae7292bd887fe726e8fa2f2',
    ),
    'automattic/jetpack-device-detection' => 
    array (
      'pretty_version' => '1.4.x-dev',
      'version' => '1.4.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'cd202288f7912cbd9526b6f61790a3f8bf06b647',
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
      'reference' => 'ab49e62359f6c9d25c358e45b79a50147d4be210',
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
      'reference' => '89d2bcf3924ac36856bd59511cdea1593bcdd720',
    ),
    'automattic/jetpack-roles' => 
    array (
      'pretty_version' => '1.4.x-dev',
      'version' => '1.4.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '12f29713e4b8c838a8c5a65d62c926a9f61159f0',
    ),
    'automattic/jetpack-status' => 
    array (
      'pretty_version' => '1.8.x-dev',
      'version' => '1.8.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '087afb1022f2aaf46e6ce69d16ab6e26e0b74c50',
    ),
    'automattic/jetpack-terms-of-service' => 
    array (
      'pretty_version' => '1.9.x-dev',
      'version' => '1.9.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '96c49cf3688054380ef8b82a2615e8071a07345f',
    ),
    'automattic/jetpack-tracking' => 
    array (
      'pretty_version' => '1.13.x-dev',
      'version' => '1.13.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => 'e682d06b8176579de7ef576c20b1029470b603f4',
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
