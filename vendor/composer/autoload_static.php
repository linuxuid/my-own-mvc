<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit160d0c686ea5c5638682ae9fa47bc993
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Models\\' => 11,
            'App\\Controllers\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Models',
        ),
        'App\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Controllers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit160d0c686ea5c5638682ae9fa47bc993::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit160d0c686ea5c5638682ae9fa47bc993::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit160d0c686ea5c5638682ae9fa47bc993::$classMap;

        }, null, ClassLoader::class);
    }
}
