<?php

/**
 * The Model is the name given to the permanent storage of the data used in the overall design. 
 * It must allow access for the data to be viewed, or collected and written to, 
 * and is the bridge between the View component and the Controller component in the overall pattern.
 */

class Model {

    protected $db = array();

    public function __construct() {
        $this->db = new Database();
    }

}
