<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63771c49a1ef188efce821c3667ca558
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Leafo\\ScssPhp\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Leafo\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/leafo/scssphp/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit63771c49a1ef188efce821c3667ca558::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63771c49a1ef188efce821c3667ca558::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
