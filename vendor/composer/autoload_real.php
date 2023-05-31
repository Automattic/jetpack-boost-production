<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ1_9_0
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ1_9_0', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ1_9_0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ1_9_0::getInitializer($loader));

        $loader->setClassMapAuthoritative(true);
        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ1_9_0::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequireb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ1_9_0($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequireb1e77e6231d50e7663f84529b6a3dfda_jetpack_boostⓥ1_9_0($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
