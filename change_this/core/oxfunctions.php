<?php
/*
 * Just include this file to the bottom of your oxfunctions.php.
 * The includes code will be ignored if oxid >= 4.9.6 / 5.2.6.
 */
if (!function_exists('registerComposerAutoLoad')) {
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'composer.php';
}

