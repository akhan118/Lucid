<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/// FORM TABLE
class form_table extends \ActiveRecord\Model {

    static $table_name = 'form';

}

class form_model_form extends model_core_abstract {

    protected $form_table;

    function __construct($registry) {
        parent::__construct($registry);
        $this->form_table = new form_table;
    }

    function unsub($var) {
        $user = $this->form_table->find($var);
        $user->delete();
    }

    function getall() {
        $query = $this->form_table->find('all');
        return $query;
    }

    function checkemailexists($var) {
        $query = $this->form_table->find('all', array('conditions' => array('email = ?', $var)));
        if (count($query) == 0 || $var == FALSE) {
            return false;
        } else {
            return $query;
        }
    }

    function insertrecord($var) {
        $this->form_table->firstname = $var['First_name'];
        $this->form_table->lastname = $var['Last_name'];
        $this->form_table->email = $var['Email'];
        $this->form_table->gender = $var['Gender'];
        $this->form_table->address = $var['address'];
        $this->form_table->city = $var['city'];
        $this->form_table->state = $var['state'];
        $this->form_table->zip = $var['zip'];
        $this->form_table->bio = $var['bio'];
        $this->form_table->save();
        return $this;
    }

}

?>
