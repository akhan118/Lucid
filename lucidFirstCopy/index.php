<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Error reporting
 */
ini_set('display_errors', '1');
error_reporting(E_ALL);




/**
 * Define Application root
 */
define('LUCID_ROOT', getcwd());

/**
 * Define Application core
 * 
 */


 $core= getcwd().'/app/code/core/';

 define('LUCID_CORE',$core );


 /**
 * Define Application Modules root
 * 
 */


 $modules_root= getcwd().'/modules/';

 define('LUCID_MODULES',$modules_root );

 
 
 
 
 /**
 * Define Application config files
 * 
 */


$configFilename = LUCID_ROOT . '/app/config/config.php';

/**
 * include application configurations file
 */

require_once  $configFilename;



//
//if (!file_exists($configFilename)) {
//    
//        echo $configFilename." was not found";
//   
//    exit;
//}


?>

