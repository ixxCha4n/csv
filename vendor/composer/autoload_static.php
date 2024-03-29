<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite26c68447a0b7012352f8b983564e94e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CSV\\Parser\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CSV\\Parser\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite26c68447a0b7012352f8b983564e94e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite26c68447a0b7012352f8b983564e94e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite26c68447a0b7012352f8b983564e94e::$classMap;

        }, null, ClassLoader::class);
    }
}
