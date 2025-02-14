<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb61e6141cf7fffaf017bdf11de73a2cd
{
    public static $files = array (
        '04c6c5c2f7095ccf6c481d3e53e1776f' => __DIR__ . '/..' . '/mustangostang/spyc/Spyc.php',
    );

    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Cache\\' => 22,
            'DeviceDetector\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Doctrine\\Common\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache',
        ),
        'DeviceDetector\\' => 
        array (
            0 => __DIR__ . '/..' . '/matomo/device-detector',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb61e6141cf7fffaf017bdf11de73a2cd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb61e6141cf7fffaf017bdf11de73a2cd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
