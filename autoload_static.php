<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcef92585e55db05cca0da3bdd2d1d7ff
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcef92585e55db05cca0da3bdd2d1d7ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcef92585e55db05cca0da3bdd2d1d7ff::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
