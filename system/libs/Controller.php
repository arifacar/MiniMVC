<?php

/**
 * The controller translates interactions with 
 * the view into actions to be performed by the model.
 */
class Controller {

    protected $load = array();

    public function __construct() {
        $this->load = new Load();
        $this->request = new Request();
        $this->response = new Response();
    }

}
