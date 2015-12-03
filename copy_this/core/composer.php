<?php
/**
 * Registers auto-loader from composer.
 */
function registerComposerAutoLoad()
{
    $autoloaderPath = __DIR__ . '/vendor/autoload.php';
    if (file_exists($autoloaderPath)) {
        include_once $autoloaderPath;
    }
}

/*
 * It makes no difference if this is called here, because the oxfunctions only contains declarations and one single call
 * for registering the oxid autoloader to the top of the autoloader chain. The composer autoloader is appended to the
 * autoloader chain and the spl handles it without problems.
 */
registerComposerAutoLoad();
