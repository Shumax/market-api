<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit91bf50f61f2255314a15c9ff6a0e1c42
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit91bf50f61f2255314a15c9ff6a0e1c42::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit91bf50f61f2255314a15c9ff6a0e1c42::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit91bf50f61f2255314a15c9ff6a0e1c42::$classMap;

        }, null, ClassLoader::class);
    }
}
