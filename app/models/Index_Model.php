<?php

class Index_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function getMenu(){
        $params=array(
            "lang"=>  Session::get("lang")
        );
        
        $result = $this->db->select("SELECT * FROM menu where lang=:lang order by sort ASC",$params);
        return $result;
    }

    public function getOptions() {
        $result = $this->db->select("SELECT * FROM options");
        return $result;
    }

}

?>