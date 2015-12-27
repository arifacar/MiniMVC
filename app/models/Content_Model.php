<?php

class Content_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function getContent($permalink) {
        $params = array(
            "permalink" => $permalink
        );

        $result = $this->db->select("SELECT * FROM content where permalink LIKE :permalink", $params);
        return $result;
    }

}

?>