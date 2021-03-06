<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit82e5882cafacb2ca46ef802e1a8fad52
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
        'G' => 
        array (
            'Gamegos\\JWT\\' => 12,
            'Gamegos\\JWS\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
        'Gamegos\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/gamegos/jwt/src',
            1 => __DIR__ . '/..' . '/gamegos/jwt/tests',
        ),
        'Gamegos\\JWS\\' => 
        array (
            0 => __DIR__ . '/..' . '/gamegos/jws/src',
            1 => __DIR__ . '/..' . '/gamegos/jws/tests',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit82e5882cafacb2ca46ef802e1a8fad52::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit82e5882cafacb2ca46ef802e1a8fad52::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
