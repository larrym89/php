<?php

include_once("Connection.php");

trait _bicycle {
    public $model;
    public $type;
    public $size;
    public $price;
    public $description;
}

interface _getterMethods {
    public function getModel();
    public function getType();
    public function getSize();
    public function getPrice();
}

class Bicycle {

    use _bicycle;

    public function __construct($model, $type, $price, $size,$description ){

        $this->model = $model;
        $this->type = $type;
        $this->price = $price;
        $this->size = $size;
        $this->description = $description;

    }
    //* Setter methods
    public function setModel( $model ){
        $this->model = $model;
    }

    public function setType( $type ){
        $this->model = $type;
    }

    public function setPrice( $price ){
        $this->model = $price;
    }

    public function setSize( $size ){
        $this->model = $size;
    }

    public function setDescription( $description ){
        $this->model = $description;
    }

    //* Getter methods
    public function getModel() {
        return $this->model;
    }

    public function getType() {
        return $this->type;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getSize() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description;
    }

    //* Method to insert the data into the database
    public function addToDB() {
        $sql = "INSERT INTO bicycles (model, type, size, price, description) VALUES (
            '$this->model','$this->type', '$this->size', '$this->price', '$this->description'
        )";
        $instance = Connection::getInstance();
        $conn = $instance->getConnection();
        $res = mysqli_query($conn, $sql);
        if($res) {
            return true;
        } else {
            return false;
        }
    }

    //* Method to retrieve the data from the database
    public function fetchData($id=null) {
        $sql = "SELECT * FROM bicycles";

        if($id){
            $sql .= " WHERE id=$id";
       }
       else{
            $sql .= " ORDER BY id DESC";
       }

       $instance = Connection::getInstance();
       $conn = $instance->getConnection();
       $res = mysqli_query($conn, $sql);
       return $res;
    }

}

?>