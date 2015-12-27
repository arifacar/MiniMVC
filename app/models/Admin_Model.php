<?php

class Admin_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function userControl($array = array()) {
        $sql = "select * from users where mail=:mail and password=:password";
        $count = $this->db->affectedRows($sql, $array);
        if ($count > 0) {
            return $this->db->select($sql, $array);
        } else {
            return false;
        }
    }
}
?>