<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 * 
 */

class index_controller extends app_core_controller_abstract {

    public function index() {
        $this->registry->layout->view('form');
    }

}

?>
