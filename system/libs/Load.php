<?php

/**
 * This class can automatically load MVC and library classes. 
 * It can register several automatic class loader functions to load different
 * types of project classes from different directories.
 * Currently it can load class scripts for models, controller, user and system library classes. 
 * The respective directories are configured using constants.
 */

class Load {
    /**
     * We didnt anything in __construct method
     */
    function __construct() {
        
    }

    /**
     * 
     * @param type $filename
     * @param type $data
     */
    public function view($filename, $data = false) {
        include_once "system/language/" . Session::get("lang") . ".php";
        if ($data) {
            extract($data);
        }
        include 'app/views/' . $filename . '.php';
    }

    /**
     * 
     * @param type $filename
     * @return \filename
     */
    public function model($filename) {
        include 'app/models/' . $filename . '.php';
        return new $filename;
    }

}
