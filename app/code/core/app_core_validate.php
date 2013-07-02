<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


class app_core_validate
{
    
    protected $registry;
    public $emptykeys=array();


    /// to be continued 
    
    
    function isempty($var)
    
    {
       
        
        
        
        
        foreach($var as $key=>$value)
        {
            
           
         if(empty($value))
             
             
         {      
             
             
             
             $this->emptykeys[$key]=$value;
             
         }
            
            
        }
        
        if(empty($this->emptykeys))
        {
            
            return false;
            
        }
        else {
            
            
            return true;
        }
        
        
        
    }
    
    
    
}



?>
