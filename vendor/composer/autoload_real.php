<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitff42c4ba89069c4481d1ad37e6d6ed9f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitff42c4ba89069c4481d1ad37e6d6ed9f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitff42c4ba89069c4481d1ad37e6d6ed9f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitff42c4ba89069c4481d1ad37e6d6ed9f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}