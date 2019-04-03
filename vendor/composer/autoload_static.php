<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit61fbfaffee0b4191266c46435a75923a
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit61fbfaffee0b4191266c46435a75923a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit61fbfaffee0b4191266c46435a75923a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}