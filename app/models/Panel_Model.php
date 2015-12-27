<?php

class Panel_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function getContents() {
        $sql = "select content.*, NULL as content, category.name as category
            FROM content
            INNER JOIN category 
            ON content.categoryID = category.ID";

        $data = $this->db->select($sql);
        return $data;
    }

    public function getCars() {
        $sql = "select * 
            FROM content
            
            WHERE categoryID=2
            ";

        $data = $this->db->select($sql);
        return $data;
    }

    public function getCategories() {
        $sql = "select * from category";
        $result = $this->db->select($sql);
        return $result;
    }

    public function getMenus($type, $lang) {
        $where = array(
            "type" => $type,
            "lang" => $lang
        );

        $sql = "select * from menu where type=:type and lang=:lang ORDER BY sort ASC";
        $result = $this->db->select($sql, $where);
        return $result;
    }

    public function addMenu($array = array()) {
        $result = $this->db->insert("menu", $array);
        return $result;
    }

    public function getAllMenus() {
        $sql = "select * from menucat";
        $result = $this->db->select($sql);
        return $result;
    }

    public function updateMenu($array = array(), $id) {
        $result = $this->db->update("menu", $array, "ID=" . $id);
        return $result;
    }

    public function getSliders() {
        $sql = "select * from sliders";
        $result = $this->db->select($sql);
        return $result;
    }

    public function getSlider($id) {
        $where = array(
            "ID" => $id
        );

        $sql = "select * from sliders where ID=:ID";
        $result = $this->db->select($sql, $where);
        return $result;
    }

    public function updateSlider($array = array(), $id) {
        $result = $this->db->update("sliders", $array, "ID=" . $id);
        return $result;
    }

    public function getContent($id) {
        $where = array(
            "ID" => $id
        );

        $sql = "select * from content where ID=:ID";
        $result = $this->db->select($sql, $where);
        return $result;
    }

    public function addContent($array = array()) {
        $result = $this->db->insert("content", $array);
        return $result;
    }

    public function updateContent($array = array(), $id) {
        $result = $this->db->update("content", $array, "ID=" . $id);
        return $result;
    }

    public function deleteContent($where) {
        $result = $this->db->delete("content", $where);
        return $result;
    }

    public function addSlider($array = array()) {
        $result = $this->db->insert("sliders", $array);
        return $result;
    }

    public function deleteSlider($where) {
        $result = $this->db->delete("sliders", $where);
        return $result;
    }

    public function getContactMessages() {
        $sql = "select * from contactmessages ORDER BY date DESC";
        $result = $this->db->select($sql);
        return $result;
    }

    public function deleteItem($table, $where) {
        $result = $this->db->delete($table, $where);
        return $result;
    }

    public function getUser($id) {
        $where = array(
            "ID" => $id
        );

        $sql = "select id,name,mail from users where ID=:ID";
        $result = $this->db->select($sql, $where);

        return $result;
    }

    public function getSettings() {
        $sql = "select * from options";
        $result = $this->db->select($sql);
        return $result;
    }

    public function updateSettings($array = array(), $name) {
        $result = $this->db->update("options", $array, "ID=" . $name);
        return $result;
    }

}

?>