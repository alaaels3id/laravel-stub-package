<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54b873ef2dd0dbe9425ee43e7d1b8c94
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alaaelsaid\\LaravelStubPackage\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alaaelsaid\\LaravelStubPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit54b873ef2dd0dbe9425ee43e7d1b8c94::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54b873ef2dd0dbe9425ee43e7d1b8c94::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit54b873ef2dd0dbe9425ee43e7d1b8c94::$classMap;

        }, null, ClassLoader::class);
    }
}
