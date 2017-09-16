<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f6851a1dac9fd5a0426a8fa7ddbdacd
{
    public static $files = array (
        '2b9d0f43f9552984cfa82fee95491826' => __DIR__ . '/..' . '/sabre/event/lib/coroutine.php',
        'd81bab31d3feb45bfe2f283ea3c8fdf7' => __DIR__ . '/..' . '/sabre/event/lib/Loop/functions.php',
        'a1cce3d26cc15c00fcd0b3354bd72c88' => __DIR__ . '/..' . '/sabre/event/lib/Promise/functions.php',
        '383eaff206634a77a1be54e64e6459c7' => __DIR__ . '/..' . '/sabre/uri/lib/functions.php',
        'ebdb698ed4152ae445614b69b5e4bb6a' => __DIR__ . '/..' . '/sabre/http/lib/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sinergi\\Token\\' => 14,
            'Sabre\\Uri\\' => 10,
            'Sabre\\HTTP\\' => 11,
            'Sabre\\Event\\' => 12,
        ),
        'O' => 
        array (
            'Ogsteam\\Ogspy\\Views\\' => 20,
            'Ogsteam\\Ogspy\\Model\\' => 20,
            'Ogsteam\\Ogspy\\Entity\\' => 21,
        ),
        'G' => 
        array (
            'Ghunti\\HighchartsPHP\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sinergi\\Token\\' => 
        array (
            0 => __DIR__ . '/..' . '/sinergi/token/src/Token',
        ),
        'Sabre\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabre/uri/lib',
        ),
        'Sabre\\HTTP\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabre/http/lib',
        ),
        'Sabre\\Event\\' => 
        array (
            0 => __DIR__ . '/..' . '/sabre/event/lib',
        ),
        'Ogsteam\\Ogspy\\Views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/views/Helper',
        ),
        'Ogsteam\\Ogspy\\Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
        ),
        'Ogsteam\\Ogspy\\Entity\\' => 
        array (
            0 => __DIR__ . '/../..' . '/entity',
        ),
        'Ghunti\\HighchartsPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/ghunti/highcharts-php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f6851a1dac9fd5a0426a8fa7ddbdacd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f6851a1dac9fd5a0426a8fa7ddbdacd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}