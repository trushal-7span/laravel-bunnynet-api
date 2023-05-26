<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3158ff2ff31d9f40207599104cb65c4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sevenspan\\Bunnynet\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sevenspan\\Bunnynet\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3158ff2ff31d9f40207599104cb65c4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3158ff2ff31d9f40207599104cb65c4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita3158ff2ff31d9f40207599104cb65c4::$classMap;

        }, null, ClassLoader::class);
    }
}