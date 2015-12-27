<?php
    /**
     * Load - Loads the language file, can return the data and set the language to use
     * Get - return an language string if it exists, else it will return false
     */
class Language {
    function __construct() {
        Session::init();
        include_once "system/language/".Session::get("lang").".php";
    }
        
}