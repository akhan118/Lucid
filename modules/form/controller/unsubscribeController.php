<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class unsubscribe_controller extends app_core_controller_abstract {

    protected $model;

    function __construct($registry) {
        parent::__construct($registry);
        $this->model = new form_model_form($this->registry);
    }

    function index() {
        $request = $this->registry->request;
        $record = $request['record'];
        $this->model->unsub($record);
        $this->registry->layout->unsubmessage = 'You have been taken out of the subscribtion';
        $this->registry->layout->view('redirect');
    }

}

?>
