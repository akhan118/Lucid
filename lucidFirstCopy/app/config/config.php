<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


//spl_autoload_register(null, false);

   
/// Autoload function for all App files
function app_autoload($name) {
     $filename = strtolower($name) . '.php';
     $App_core_files = LUCID_CORE. $filename;
    if (file_exists($App_core_files) == false) {
         return false;   
         }
    include($App_core_files);
}


// Autoload all models files in all Modules.
function models_autoload($class)
{   $classFile = str_replace(' ', DIRECTORY_SEPARATOR, ucwords(str_replace('_', ' ',  strtolower($class) )));
    $classFile.='.php';
    $files=LUCID_MODULES.$classFile;
    if(file_exists($files)==FALSE)
    {    
        return FALSE;
    }
    include ($files);
}


/// Registery the functions as autoload functions
spl_autoload_register('app_autoload');
spl_autoload_register('models_autoload');


/// Loading applications Core files into the Registry for further use.
$registry= new app_core_registry;
$registry->layout= new app_core_template($registry);
$registry->router= new app_core_router($registry);
$registry->router->get_controller()->request_controller();


?>
