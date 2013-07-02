<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class app_core_controller_abstract {
    
    protected $registry;
    protected $validate;
            
    function __construct($registry) {
        
        $this->registry=$registry;
    }
    
    
    abstract function index();
    
}
?>
