<?php

require_once('helper.php');

/**
 * This abstract class provides basic operations for new controllers
 *
 */
abstract class controller {

    /**
     *  class constructor
     */
    public function __construct($resource = '', $argv = '') {

        $this->model = Helper::get_model($this); # load respective module
        $this->view = Helper::get_view($this); # load respective view
    }

}

?>