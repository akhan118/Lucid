<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class admin_controller extends app_core_controller_abstract {

    protected $model;

    function __construct($registry) {
        parent::__construct($registry);
        $this->model = new form_model_form($this->registry);
    }

    function index() {
        $request = $this->registry->request;
        $record = $request['id'];


        if (!empty($record)) {
            $this->model->unsub($record);
        }
        $query = $this->model->getall();
        $this->registry->layout->query = $query;
        $this->registry->layout->view('admin');
    }

}

?>
