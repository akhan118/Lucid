<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class app_core_router {

    private $registry;
    public  $controller_file;
    public  $module;
    public  $controller;
    public  $action;
    public  $id;
    private $Lucid_root = LUCID_ROOT;
    private $path = LUCID_MODULES;
    private $url_values;

    function __construct($registry) {
        $this->registry = $registry;
    }

    function request_controller() {

        if (!is_readable($this->controller_file)) {

            $this->controller = 'error';

            $this->controller_file = $this->Lucid_root . '/errors' . '/controller/' . $this->controller . 'Controller.php';
        }
         $this->controller_file;

        include $this->controller_file;
        $controller_class = $this->controller . '_controller';
        $controller = new $controller_class($this->registry);
        $action = method_exists($controller, $this->action) ? $this->action : 'index';
        $controller->$action($this->id);
    }

    function get_controller() {
        $this->url_values = empty($_GET) ? '' : $_GET;
        if (!empty($this->url_values)) {
            $this->module = $this->url_values['module'];
            $this->controller = $this->url_values['controller'];
            $this->action = $this->url_values['action'];
            $this->id = $this->url_values['id'];
        }

        if (empty($this->module)) {
            $this->module = 'index';
        }

        if (empty($this->controller)) {

            $this->controller = 'index';
        }

        if (empty($this->action)) {

            $this->action = 'index';
        }

        if (empty($this->id)) {
            $this->id = FALSE;
        }

        /// Module_controller_action_id
        $this->controller_file = $this->path . $this->module . '/controller/' . $this->controller . 'Controller.php';
        return $this;
    }

}

?>
