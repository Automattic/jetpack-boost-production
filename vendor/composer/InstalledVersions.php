<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;








class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '1.2.0',
    'version' => '1.2.0.0',
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
      'pretty_version' => 'v1.4.4',
      'version' => '1.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '59df714196e8ac4fd69a4ddedcb9dbeb12e7ecb5',
    ),
    'automattic/jetpack-assets' => 
    array (
      'pretty_version' => 'v1.11.5',
      'version' => '1.11.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '88f04c6eb63ee4ce801735c03f7db5cae05e79bc',
    ),
    'automattic/jetpack-autoloader' => 
    array (
      'pretty_version' => 'v2.10.4',
      'version' => '2.10.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '70cb300a7a215ae87c671f600f77093518f87bac',
    ),
    'automattic/jetpack-boost' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => NULL,
    ),
    'automattic/jetpack-config' => 
    array (
      'pretty_version' => 'v1.4.6',
      'version' => '1.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '98f8080550901a8a29daf466ee75a4906c5f1ef0',
    ),
    'automattic/jetpack-connection' => 
    array (
      'pretty_version' => 'v1.30.1',
      'version' => '1.30.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c73a279ff07bdd343c8129ca40f56a6eb2b9273c',
    ),
    'automattic/jetpack-constants' => 
    array (
      'pretty_version' => 'v1.6.5',
      'version' => '1.6.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '1e02eebb828c6701f3bf97fa8404e9fc85d3fb63',
    ),
    'automattic/jetpack-device-detection' => 
    array (
      'pretty_version' => 'v1.4.2',
      'version' => '1.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '6f7c0560cac114a99066a703cf66813e325e8630',
    ),
    'automattic/jetpack-heartbeat' => 
    array (
      'pretty_version' => 'v1.3.8',
      'version' => '1.3.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ed630c4a9271d5ce2bba15eec4ff32c448330b67',
    ),
    'automattic/jetpack-lazy-images' => 
    array (
      'pretty_version' => 'v1.5.1',
      'version' => '1.5.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '83cfa36b35fa598a8702407a434dd30d3627ef77',
    ),
    'automattic/jetpack-options' => 
    array (
      'pretty_version' => 'v1.13.0',
      'version' => '1.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '2606ae27f9b4336ca1b34ee9ecd99ac658ef30fc',
    ),
    'automattic/jetpack-redirect' => 
    array (
      'pretty_version' => 'v1.7.0',
      'version' => '1.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8320a82f8daee5127a2c3e19cb4e2566ba4c94bb',
    ),
    'automattic/jetpack-roles' => 
    array (
      'pretty_version' => 'v1.4.5',
      'version' => '1.4.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd04bbd4e012516d280a610e3961edef5cf241722',
    ),
    'automattic/jetpack-status' => 
    array (
      'pretty_version' => 'v1.8.0',
      'version' => '1.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '9da88ee253d69e4948c76e4080435aca23c65dbb',
    ),
    'automattic/jetpack-terms-of-service' => 
    array (
      'pretty_version' => 'v1.9.8',
      'version' => '1.9.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '9ebb094dc1243b36c449ecb37a858511c9b41759',
    ),
    'automattic/jetpack-tracking' => 
    array (
      'pretty_version' => 'v1.13.8',
      'version' => '1.13.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '0940924c3d64389fd7dda3b4bd28486fd6619b65',
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
