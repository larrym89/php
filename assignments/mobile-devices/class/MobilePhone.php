<?php
include_once("Connection.php");
class MobilePhone
{

    const TABLENAME = "mobilephones";

    public $id;
    public $producator;
    public $model;
    public $pret;
    public $anProductie;
    public $dataIntrarii;


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of producator
     */
    public function getProducator()
    {
        return $this->producator;
    }

    /**
     * Set the value of producator
     */
    public function setProducator($producator)
    {
        $this->producator = $producator;
    }

    /**
     * Get the value of model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * Get the value of pret
     */
    public function getPret()
    {
        return $this->pret;
    }

    /**
     * Set the value of pret
     */
    public function setPret($pret)
    {
        $this->pret = $pret;
    }

    /**
     * Get the value of anProductie
     */
    public function getAnProductie()
    {
        return $this->anProductie;
    }

    /**
     * Set the value of anProductie
     */
    public function setAnProductie($anProductie)
    {
        $this->anProductie = $anProductie;
    }

    /**
     * Get the value of dataIntrarii
     */
    public function getDataIntrarii()
    {
        return $this->dataIntrarii;
    }

    /**
     * Set the value of dataIntrarii
     */
    public function setDataIntrarii($dataIntrarii)
    {
        $this->dataIntrarii = $dataIntrarii;
    }

    public function create()
    {
        $sql = "INSERT INTO " . self::TABLENAME . " (producator, model, pret, an_productie) VALUES (
            '$this->producator', '$this->model', '$this->pret', '$this->anProductie');";

        $instance = Connection::getInstance();
        $conn = $instance->getConnection(); // se creeaza conexiunea la baza de date
        $res = mysqli_query($conn, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function read($id = null)
    {
        $sql = "SELECT * FROM " . self::TABLENAME;
        if ($id) {
            $sql .= " WHERE id=$id";
        } else {
            $sql .= " ORDER BY id DESC";
        }

        $instance = Connection::getInstance();
        $conn = $instance->getConnection(); // se creeaza conexiunea la baza de date
        $res = mysqli_query($conn, $sql);
        return $res;
    }

    public function update($id)
    {
        $sql = "UPDATE " . self::TABLENAME . " SET
              producator = '$this->producator',
              model = '$this->model',
              pret = '$this->pret',
              an_productie = '$this->anProductie'
              WHERE id=$id";

        $instance = Connection::getInstance();
        $conn = $instance->getConnection(); // se creeaza conexiunea la baza de date
        $res = mysqli_query($conn, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id){
        
      $sql = "DELETE FROM " . self::TABLENAME . " WHERE id=$id";
        $instance = Connection::getInstance();
        $conn = $instance->getConnection();// se creeaza conexiunea la baza de date
        $res = mysqli_query($conn, $sql);
       if($res){
              
           return true;
       }else{
           return false;
       }
   }
}
