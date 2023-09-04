<?php

function Qeema_autoload($classPath)
{
    $namespacePath = explode('\\', $classPath);

    // Check if namespace is aster or not.
    if ($namespacePath[0] == 'Qeema') {
        // Get Class Name from end array.
        $className = end($namespacePath);

        // Prepere the path of class file.
        $filePath = get_template_directory() . DS . 'includes' . DS . 'classes' . DS . $className . '.php';
        $eleWidgets = get_template_directory() . DS . 'includes' . DS . 'elementor' . DS . 'widgets' . DS . $className . '.php';
        $wpWidgets = get_template_directory() . DS . 'includes' . DS . 'widgets' . DS . $className . '.php';

        if (file_exists($filePath)) {
            require_once($filePath);
        } elseif (file_exists($eleWidgets)) {
            require_once $eleWidgets;
        } elseif(file_exists($wpWidgets)) {
            require_once $wpWidgets;
        }
    }
}

spl_autoload_register('Qeema_autoload');