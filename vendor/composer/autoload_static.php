<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit807137a2e94a767a11cb3d86d0b39d22
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit807137a2e94a767a11cb3d86d0b39d22::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit807137a2e94a767a11cb3d86d0b39d22::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit807137a2e94a767a11cb3d86d0b39d22::$classMap;

        }, null, ClassLoader::class);
    }
}
