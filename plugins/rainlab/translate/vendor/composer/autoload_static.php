<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfcf1ca89391a0be8508929f5968515d4
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfcf1ca89391a0be8508929f5968515d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfcf1ca89391a0be8508929f5968515d4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}