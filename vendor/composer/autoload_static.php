<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit945200887320284573871def685e50fe
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\ConnectionController' => __DIR__ . '/../..' . '/src/Controllers/ConnectionController.php',
        'App\\Controllers\\FormatController' => __DIR__ . '/../..' . '/src/Controllers/FormatController.php',
        'App\\Controllers\\LivreController' => __DIR__ . '/../..' . '/src/Controllers/LivreController.php',
        'App\\Models\\Authors' => __DIR__ . '/../..' . '/src/Models/Authors/Authors.php',
        'App\\Models\\Editeurs' => __DIR__ . '/../..' . '/src/Models/Editeurs/Editeurs.php',
        'App\\Models\\Format' => __DIR__ . '/../..' . '/src/Models/Format/Format.php',
        'App\\Models\\FormatManager' => __DIR__ . '/../..' . '/src/Models/Format/FormatManager.php',
        'App\\Models\\Livre' => __DIR__ . '/../..' . '/src/Models/Livre/Livre.php',
        'App\\Models\\LivreManager' => __DIR__ . '/../..' . '/src/Models/Livre/LivreManager.php',
        'App\\Models\\Users' => __DIR__ . '/../..' . '/src/Models/Users/Users.php',
        'App\\Security\\ConnectionAuthenticator' => __DIR__ . '/../..' . '/src/Security/ConnectionAuthenticator.php',
        'Core\\Connect' => __DIR__ . '/../..' . '/core/Connect.php',
        'Core\\Controller' => __DIR__ . '/../..' . '/core/Controller.php',
        'Core\\Model' => __DIR__ . '/../..' . '/core/Model.php',
        'Core\\Security' => __DIR__ . '/../..' . '/core/Security.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit945200887320284573871def685e50fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit945200887320284573871def685e50fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit945200887320284573871def685e50fe::$classMap;

        }, null, ClassLoader::class);
    }
}
