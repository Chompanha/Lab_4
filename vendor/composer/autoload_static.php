<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit83f1de73c896b40714b57c2237d5968e
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Envms\\FluentPDO\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Envms\\FluentPDO\\' => 
        array (
            0 => __DIR__ . '/..' . '/envms/fluentpdo/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit83f1de73c896b40714b57c2237d5968e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit83f1de73c896b40714b57c2237d5968e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit83f1de73c896b40714b57c2237d5968e::$classMap;

        }, null, ClassLoader::class);
    }
}