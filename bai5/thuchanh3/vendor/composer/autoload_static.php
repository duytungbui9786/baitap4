<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita9da14a48e9f9b0366b534e00411ce21
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tungdb\\Bai5\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tungdb\\Bai5\\' => 
        array (
            0 => __DIR__ . '/..' . '/thuchanh/bai5/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita9da14a48e9f9b0366b534e00411ce21::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita9da14a48e9f9b0366b534e00411ce21::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}