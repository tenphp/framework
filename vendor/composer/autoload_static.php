<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf29e97cc844b70b53a0fde91b56929f
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Routing\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/routing',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf29e97cc844b70b53a0fde91b56929f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf29e97cc844b70b53a0fde91b56929f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}