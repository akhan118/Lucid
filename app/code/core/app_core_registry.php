<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class app_core_registry
{
    private $var=array();
    
    
   
    function __set($index,$value)
    {
      $this->var[$index]=$value;
    }
    
    function __get($index)
    {
      return $this->var[$index];
    }
    
    
}

?>
