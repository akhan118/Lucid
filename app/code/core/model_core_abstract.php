<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


//ini_set('display_errors', '1');
//error_reporting(E_ALL);

abstract class model_core_abstract {

    protected $registry;

    function __construct($registry) {
        
        $this->registry = $registry;
        $this->wakeupActive();
    }

//    ç.  $this->$registry->router->module.'/model

    public function wakeupActive() {
      $modeldirectory=LUCID_MODULES.  $this->registry->router->module . '/model';
      $connection=$this->registry->connections;

       
      
       $cfg = ActiveRecord\Config::instance();
       $cfg->set_model_directory($modeldirectory);

       $cfg->set_connections(array('development' => $connection));
      
      
    }

}

?>
