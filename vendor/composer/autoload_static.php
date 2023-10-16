<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit570df3c0c85200c41d8c5f22455e8c34
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit570df3c0c85200c41d8c5f22455e8c34::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit570df3c0c85200c41d8c5f22455e8c34::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit570df3c0c85200c41d8c5f22455e8c34::$classMap;

        }, null, ClassLoader::class);
    }
}
