<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaa220fc6208dedfb1de8c10c77edc1db
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WpbPlusTimeline\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WpbPlusTimeline\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitaa220fc6208dedfb1de8c10c77edc1db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaa220fc6208dedfb1de8c10c77edc1db::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaa220fc6208dedfb1de8c10c77edc1db::$classMap;

        }, null, ClassLoader::class);
    }
}
