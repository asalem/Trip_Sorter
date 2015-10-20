<?php
/**
 * auto loading classes (lazy_loader)
 * 
 */

set_include_path(get_include_path() . ':' . __DIR__ . '/');

function __autoload($class) {
    
    $class = ltrim($class, '\\');
    $file  = '';
    $namespace = '';
    
    if ($endOfNs = strrpos($class, '\\')) {
        $namespace = substr($class, 0, $endOfNs);
        $class = substr($class, $endOfNs + 1);
        $file  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    
    $file .= str_replace('_', DIRECTORY_SEPARATOR, $class) . '.php';
    
    require_once $file;
}