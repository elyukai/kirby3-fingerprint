<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ba9ff5a99053bbd716ab7ff9446f086
{
    public static $files = array (
        '56132eb46a6e1cc440a63d3ec41f7289' => __DIR__ . '/../..' . '/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bnomei\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bnomei\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ba9ff5a99053bbd716ab7ff9446f086::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ba9ff5a99053bbd716ab7ff9446f086::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
