<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class subscribe_controller extends app_core_controller_abstract {

    function index() {

        /// $POST REQUEST
        $request = $this->registry->request;

        /// Check if Gender is a key/ if not make it a key.
        if (!array_key_exists('Gender', $request)) {
            $gender = array('Gender' => '');
            $request = array_merge($request, $gender);
        }

        // if any field is  empty issue an notice
        if ($this->registry->validate->isempty($request)) {
            $this->registry->layout->emptyMessage = 'the following fields can not be empty ';

            $this->registry->layout->emptykeys = $emptykeys = $this->registry->validate->emptykeys;

            $this->registry->layout->view('subscribe');
        } else {
            $form_model = new form_model_form($this->registry);
            $request = $this->registry->request;
            $email = $request['Email'];

            if ($query = $form_model->checkemailexists($email)) {
                $request = $this->registry->request;
                $this->registry->layout->EmailExistsMessage = ('The following email is  already registred');
                $this->registry->layout->query = $query;

                $this->registry->layout->view('unsubscribe');
            } else {
                $form_model->insertrecord($request);
                $this->registry->layout->recordedsaved = 'You have been subscribed';
                $this->registry->layout->view('redirect');
            }
        }
    }

}

?>
