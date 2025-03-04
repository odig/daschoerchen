<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7dd33e15d60392aef7f6e69d5a1186b1
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grav\\Plugin\\ChoerchenEvent\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grav\\Plugin\\ChoerchenEvent\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Grav\\Plugin\\ChoerchenEventPlugin' => __DIR__ . '/../..' . '/choerchen-event.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7dd33e15d60392aef7f6e69d5a1186b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7dd33e15d60392aef7f6e69d5a1186b1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7dd33e15d60392aef7f6e69d5a1186b1::$classMap;

        }, null, ClassLoader::class);
    }
}
