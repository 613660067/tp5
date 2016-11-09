<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29492aa7820dbb8d0296394c1841731c
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\composer\\' => 15,
            'think\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'think\\' => 
        array (
            0 => __DIR__ . '/../..' . '/thinkphp/library/think',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit29492aa7820dbb8d0296394c1841731c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit29492aa7820dbb8d0296394c1841731c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
