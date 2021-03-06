<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita673ce67cfad20f32803a9f116e5fa2e
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'development\\' => 12,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'development\\' => 
        array (
            0 => __DIR__ . '/..' . '/development',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita673ce67cfad20f32803a9f116e5fa2e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita673ce67cfad20f32803a9f116e5fa2e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita673ce67cfad20f32803a9f116e5fa2e::$classMap;

        }, null, ClassLoader::class);
    }
}
