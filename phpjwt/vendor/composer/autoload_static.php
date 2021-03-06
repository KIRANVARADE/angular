<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a57f941b321ffbb3935d7ed1bf2b4b4
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4a57f941b321ffbb3935d7ed1bf2b4b4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4a57f941b321ffbb3935d7ed1bf2b4b4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
