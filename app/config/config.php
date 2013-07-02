<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//spl_autoload_register(null, false);
/// Autoload function for all App files
function app_autoload($name) {
    $filename = strtolower($name) . '.php';
    $App_core_files = LUCID_CORE . $filename;
    if (file_exists($App_core_files) == false) {
        return false;
    }
    include($App_core_files);
}

// Autoload all models files in all Modules.
function models_autoload($class) {
    $classFile = str_replace(' ', DIRECTORY_SEPARATOR, str_replace('_', ' ', strtolower($class)));
    $classFile.='.php';

    $files = LUCID_MODULES . $classFile;
    if (file_exists($files) == FALSE) {
        return FALSE;
    }
    include ($files);
}

/// Register the functions as autoload functions
spl_autoload_register('app_autoload');
spl_autoload_register('models_autoload');
require_once LUCID_ROOT . '/includes/ActiveRecord.php';


/// connnections
//'development' => 'mysql://root:root@localhost/form'
/*
$env = 'development';
$username = 'root';
$password = 'root';
$host = 'localhost';
$db = 'form';
*/



$env = 'live';
$username = 'lucid3000';
$password = 'Legend@95';
$host = 'lucid3000.db.7369443.hostedresource.com';
$db = 'lucid3000';



$db_connect = 'mysql://' . $username . ':' . $password . '@' . $host . '/' . $db;

/// Loading applications Core files into the Registry for further use.
$registry = new app_core_registry;
$registry->connections = $db_connect;
$registry->layout = new app_core_template($registry);
$registry->validate = new app_core_validate();
$registry->router = new app_core_router($registry);
$registry->router->get_controller()->request_controller();
?>
