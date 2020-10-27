<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit262dd1a037902e9a78c7b76aa0190baa
{
    public static $files = array (
        '5d8debf575cfe6d5b0eeb402bc28dc7c' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit262dd1a037902e9a78c7b76aa0190baa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit262dd1a037902e9a78c7b76aa0190baa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit262dd1a037902e9a78c7b76aa0190baa::$classMap;

        }, null, ClassLoader::class);
    }
}