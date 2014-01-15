<?php

spl_autoload_register(function($className)
{
    $file = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';

    if (file_exists($file)) {
        include($file);
    }
});
