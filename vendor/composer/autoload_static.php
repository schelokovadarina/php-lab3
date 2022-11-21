<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit85f42691c8ff5e1562f6ab23d4d71398
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit85f42691c8ff5e1562f6ab23d4d71398::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit85f42691c8ff5e1562f6ab23d4d71398::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit85f42691c8ff5e1562f6ab23d4d71398::$classMap;

        }, null, ClassLoader::class);
    }
}