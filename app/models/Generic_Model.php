<?php

/**
 * Generic_Modal
 * Tihs class provide generic functions for model 
 * which can be generally usefull for creating reading update deleting joining and other manipulation 
 * of records to provide facility to the user and save time of the developer
 */
class Generic_Model extends Model {

    /**
     * 
     * @param String $tableName
     * @param Array $array
     * @return Object
     */
    public function insertItem($tableName, $array = array()) {
        $lastInsertedId = $this->db->insertReturnID($tableName, $array);
        return $this->getItem($tableName, $lastInsertedId);
    }

    /**
     * 
     * @param String $tableName
     * @param Array $data
     * @param Integer $ID
     * @return Object
     */
    public function updateItem($tableName, $data, $ID) {
        $this->db->update($tableName, $data, "ID=" . $ID);
        return $this->getItem($tableName, $ID);
    }

    /**
     * 
     * @param String $tableName
     * @param Integer $id
     * @return Object
     * 
     */
    public function getItem($tableName, $id) {
        $params = array("ID" => $id);
        $query = "SELECT * FROM " . $tableName . " WHERE ID=:ID";
        $result = $this->db->select($query, $params);
        if ($result == null)
            return null;
        else
            return $result[0];
    }

    /**
     * 
     * @param String $tableName
     * @param String $permalink
     * @return Object
     */
    public function getItemWithPermalink($tableName, $permalink) {
        $params = array("permalink" => $permalink);

        $query = "SELECT * FROM " . $tableName . " WHERE permalink LIKE :permalink";
        $result = $this->db->select($query, $params);

        if ($result == null)
            return null;
        else
            return $result[0];
    }

    /**
     * 
     * @param String $table
     * @param String $where
     * @return Boolean
     */
    public function deleteAllItem($table, $where) {
        $result = $this->db->delete($table, $where, 100);
        return $result;
    }

    /**
     * 
     * @param String $tableName
     * @param String $whereClause
     * @param Array $params
     * @return Integer
     */
    public function getItemCount($tableName, $whereClause, $params) {
        return $this->db->affectedRows("SELECT * FROM " . $tableName . " WHERE " . $whereClause, $params);
    }

    /**
     * 
     * @param String $tableName
     * @param String $whereClause
     * @param Integer $limit
     * @param Array $params
     * @return Array
     */
    public function getItemList($tableName, $whereClause, $limit, $params) {
        return $this->db->select("SELECT * FROM " . $tableName .
                        " WHERE " . $whereClause .
                        " LIMIT " . $limit . " ," . LIST_PER_PAGE_SIZE, $params);
    }
}

?>