<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2e57bf2f2ad3284d6386ce63caf15fb2
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2e57bf2f2ad3284d6386ce63caf15fb2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2e57bf2f2ad3284d6386ce63caf15fb2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
