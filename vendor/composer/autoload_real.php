<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit5dd3eade3afc00ee8c1028c82e8e8bdd
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

        spl_autoload_register(array('ComposerAutoloaderInit5dd3eade3afc00ee8c1028c82e8e8bdd', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit5dd3eade3afc00ee8c1028c82e8e8bdd', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit5dd3eade3afc00ee8c1028c82e8e8bdd::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
