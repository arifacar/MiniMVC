<?php

/**
 * The database class is used to connect to a MySQL database 
 * using the connection details set in the root index.php file.
 * 
 */
class Database extends PDO {

    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;

    /**
     * The constants (DBTYPE, DBHOST, DBNAME, DBUSER, DBPASS) are used to connect to the database, 
     * the class extends PDO, it can pass the connection details to its parent construct.
     */
    public function __construct() {
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = DBNAME;
        $this->user = DBUSER;
        $this->pass = DBPASS;
        $dns = $this->engine . ':dbname=' . $this->database . ";host=" . $this->host;
        parent::__construct($dns, $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }

    /**
     * Executes an SQL statement, returning a result set as a PDOStatement object
     * 
     * @param type $sql
     * @param type $array
     * @param type $fetchMode
     * @return type
     */
    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC) {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue($key, $value); //bindValue sql icinde :ile eklenen degiskenlere deger atar.
            // Orn; id=:id kullanirken de $sth->bindValue(":id", 2) gibi
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode); // FETCH_ASSOC gelen arraydeki tekrarlayan ogeleri kaldirir. Tekrarlayan ogeler Index ID idi.
    }

    /**
     * Returns the number of rows affected by the last SQL statement
     * @param type $sql
     * @param type $array
     * @return type
     */
    public function affectedRows($sql, $array = array()) {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue($key, $value); //bindValue sql icinde :ile eklenen degiskenlere deger atar.
            // Orn; id=:id kullanirken de $sth->bindValue(":id", 2) gibi
        }
        $sth->execute();
        return $sth->rowCount(); // FETCH_ASSOC gelen arraydeki tekrarlayan ogeleri kaldirir. Tekrarlayan ogeler Index ID idi.
    }

    /**
     * 
     * @param type $tableName
     * @param type $data
     * @return type
     */
    public function insert($tableName, $data) {
        $fieldKeys = implode(",", array_keys($data)); //array_keys dizideki sadece keyleri alir. implode ise bu keylerin arasina , koyar.
        // burada ihtiyacimiz olan format ad, soyad, telno gibi bir format.
        $fieldValues = ":" . implode(", :", array_keys($data)); // ihtiyacimiz olan :ad, :soyad, :telno formatini olusturduk.
        $sql = "INSERT INTO $tableName ($fieldKeys) VALUES ($fieldValues)";
        $sth = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value); // bindValue (":ad", "Arif"); bindValue (":soyad", "Acar"); ... 
        }
        return $sth->execute();
    }

    /**
     * 
     * @param type $tableName
     * @param type $data
     * @param type $where
     * @return type
     */
    public function update($tableName, $data, $where) {
        $updateKeys = null;
        foreach ($data as $key => $value) {
            $updateKeys .= "$key=:$key,";
        }
        $updateKeys = rtrim($updateKeys, ",");
        $sql = "UPDATE $tableName SET $updateKeys WHERE $where";
        //UPDATE test SET ad=:ad, soyad=:soyad, telno=:telno WHERE id=1
        $sth = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        return $sth->execute();
    }

    /**
     * 
     * @param type $tableName
     * @param type $where
     * @param type $limit
     * @return type
     */
    public function delete($tableName, $where, $limit = 1) {
        return $this->exec("DELETE FROM $tableName WHERE $where LIMIT $limit");
    }

}
