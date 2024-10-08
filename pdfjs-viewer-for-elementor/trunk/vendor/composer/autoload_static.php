<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2bd5501fba9067a3c6a1d2350ff5eafd
{
    public static $files = array (
        'f6b87e4acab98b2fead22b4d637bae15' => __DIR__ . '/..' . '/wpify/custom-fields/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wpify\\CustomFields\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wpify\\CustomFields\\' => 
        array (
            0 => __DIR__ . '/..' . '/wpify/custom-fields/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2bd5501fba9067a3c6a1d2350ff5eafd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2bd5501fba9067a3c6a1d2350ff5eafd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2bd5501fba9067a3c6a1d2350ff5eafd::$classMap;

        }, null, ClassLoader::class);
    }
}
