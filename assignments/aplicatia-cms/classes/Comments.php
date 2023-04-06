<?php

class Comments {

    const TABLENAME = 'comments';

    public $id;
    public $content;




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
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function read($id=null)
    {

        $sql = "SELECT * FROM " . self::TABLENAME ;
        if($id){
            $sql .= " WHERE post_id=$id";
       }
       else{
            $sql .= " ORDER BY id DESC";
       }
        $db = Database::getInstance()->getConnection();
        $res = mysqli_query($db, $sql);
        return $res;

    }

    public function create() {

        $sql = "INSERT INTO ". self::TABLENAME. " (content) VALUES '$this->content'";
        $db = Database::getInstance()->getConnection();
        $res = mysqli_query($db, $sql);
        if($res){
            return true;
       }else{
           return false;
       }
    }

    public function update($id) {

        $sql = "UPDATE ". self::TABLENAME. " SET content SET content = '$this->content' WHERE id = '$id'";
        $db = Database::getInstance()->getConnection();
        $res = mysqli_query($db, $sql);
        if($res){
            return true;
       }else{
           return false;
       }

    }
}