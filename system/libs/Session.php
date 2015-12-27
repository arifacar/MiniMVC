<?php

class Session {

    /**
     * get initialization to session
     */
    public static function init() {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    /**
     * Get data from session
     * @param type $key
     * @return boolean
     */
    public static function get($key) {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        } else {
            return false;
        }
    }

    /** 
     * Set data to session
     * @param type $key
     * @param type $value
     */
    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    /**
     * Destroy all session
     */
    public static function destroy() {
        session_destroy();
    }

}
