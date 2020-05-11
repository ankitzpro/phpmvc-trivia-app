<?php
error_reporting(0);

class Datamanage extends Connection {

    public function insertData($data) {
        $pdo = parent::getInstance();
        $fields = implode(", ", array_keys($data));
        $values = "'".implode("','", array_values($data))."'";
        $sql = "INSERT INTO quiz ($fields) VALUES ($values)";
        $statement = $pdo->prepare($sql);
        foreach ($data as $key => $value) {
            $statement->bindValue(":$key", $value, PDO::PARAM_STR);
        }
        $statement->execute();
    }

    public function dataList() {
        $pdo = parent::getInstance();
        $sql = "SELECT * FROM quiz ORDER BY name ASC";
        $statement = $pdo->query($sql);
        $statement->execute();

        return $statement->fetchAll();
    }

    
}