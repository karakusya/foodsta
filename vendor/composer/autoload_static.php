<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9561e1658e8320a32b0b1c9879942fdd
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9561e1658e8320a32b0b1c9879942fdd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9561e1658e8320a32b0b1c9879942fdd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9561e1658e8320a32b0b1c9879942fdd::$classMap;

        }, null, ClassLoader::class);
    }
}