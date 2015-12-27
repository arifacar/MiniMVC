<?php

class Process_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function addContactMessage($params) {
        $result = $this->db->insert("contactmessages", $params);
        return $result;
    }

    public function checkUser($params) {
        $sql = "select * from users where mail=:mail";
        $count = $this->db->affectedRows($sql, $params);

        if ($count > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getNews() {
        $params = array(
            "lang" => Session::get("lang"),
            "categoryID" => 2
        );

        $result = $this->db->select("SELECT * FROM content where lang=:lang and categoryID=:categoryID ORDER BY ID DESC", $params);
        return $result;
    }

    public function getSliders() {
        $params = array(
            "lang" => Session::get("lang")
        );

        $result = $this->db->select("SELECT * FROM sliders where lang=:lang", $params);
        return $result;
    }

    public function getMenu() {
        $params = array(
            "lang" => Session::get("lang")
        );

        $result = $this->db->select("SELECT * FROM menu where lang=:lang", $params);
        return $result;
    }

    public function getOptions() {
        $result = $this->db->select("SELECT * FROM options");
        return $result;
    }

}

?>