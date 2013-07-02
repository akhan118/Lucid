<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */



class index_controller extends app_core_controller_abstract
{
    
    
    function index() {
		
		
	//$this->registry->router->$controller_file;
        
        
        $this->registry->layout->homepage='
Lucid PHP Framework- intends to provide a basic PHP MVC framework 
for  applications without future constrains.
The MVC framework provide a simple , flexiable and lucid
approach to developoments with PHP.            

'; 
        
       $this->registry->layout->view('index');
        
    }
    
    
    
    function view()
    {
        
        
        echo 'view';
    }
    
}


?>
