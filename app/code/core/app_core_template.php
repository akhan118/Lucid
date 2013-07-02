<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


class app_core_template
{
    
    private  $registry;
    protected $variables=array();
    
    
    
   function __construct($registry) {
        $this->registry= $registry ;
    }
    
    
    
   function __set($name, $value) {
        $this->variables[$name]=$value ;
        }
   
        
        
        
        function view($name)
        
        {      
       
            
        $views_Path=LUCID_MODULES. $this->registry->router->module.'/view/'. $name.'.php';
            

         if (!file_exists($views_Path))
	{
           //  die($views_Path);
           $views_Path=LUCID_ROOT.'/errors'.'/controller/'.'notemplateController.php';
                     

	}
        
        
          foreach($this->variables as $var=> $value)
          {
              
              $$var=$value;
              
              
          }
          include $views_Path;
        
        

	
//    
    
         }

}

?>
