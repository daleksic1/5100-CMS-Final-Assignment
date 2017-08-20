<?php
namespace App\Core\Database;

use PDO;

class QueryBuilder {

    public $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll($tablename) {
        // prepare a query
        $query = $this->pdo->prepare("SELECT * FROM {$tablename}");

        // execute a query
        $query->execute();

        // fetch data
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAllFood(){
        $query = $this->pdo->prepare("SELECT food.*, food_types.title FROM food LEFT JOIN food_types ON food.food_type_id = food_types.id");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($table, $parameters) {

        $sql = sprintf("INSERT INTO %s (%s) VALUES(%s)",
            $table,
            implode(", ", array_keys($parameters)),
            ":" . implode(", :", array_keys($parameters))) ;


        $query = $this->pdo->prepare($sql);

        $query->execute($parameters);
//        dd($query->debugDumpParams());


    }

    public function update($table, $parameters, $id) {

        $keys = "";
        foreach ($parameters as $key => $parameter) {
            $keys .= $key . ' = "' . $parameter .'",';
        }
        $keys= substr($keys, 0 , -1);

        $sql = sprintf("UPDATE %s SET %s WHERE id = '%s'",
            $table, $keys, $id);

        $query = $this->pdo->prepare($sql);

        $query->execute($parameters);

//        dd($query->debugDumpParams());
    }

    public function find($tablename, $id)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$tablename} WHERE id = '{$id}'");
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function delete($tablename, $id) {

        $query = $this->pdo->prepare("DELETE FROM {$tablename} WHERE id = '{$id}'");
        $query->execute();

    }

    public function authenticate($email, $password)
    {
        $query = $this->pdo->prepare("SELECT * FROM users WHERE email = '{$email}' AND password='{$password}'");
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function getAllHistory()
    {
        $query = $this->pdo->prepare("SELECT history.*, users.username, food.food_title, food.food_calories FROM history LEFT JOIN users ON users.id = history.user_id LEFT JOIN food ON food.id = history.food_id");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    public function getCal($user){
        $query = $this->pdo->prepare("SELECT SUM(food.food_calories) as total_calories FROM history LEFT JOIN food ON history.food_id = food.id WHERE history.user_id = $user");

        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}



