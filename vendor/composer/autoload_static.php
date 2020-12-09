<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6354efda70703db00548cac8c654d0ce
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LostEnginner\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LostEnginner\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6354efda70703db00548cac8c654d0ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6354efda70703db00548cac8c654d0ce::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
