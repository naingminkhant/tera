<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit78cd1935ac10f394071e11dde1a491c8
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Naingminkhant\\Calculator\\' => 25,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Naingminkhant\\Calculator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit78cd1935ac10f394071e11dde1a491c8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit78cd1935ac10f394071e11dde1a491c8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
