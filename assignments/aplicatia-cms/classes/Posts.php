<?php

class Posts {

    const TABLENAME = "posts";

    public $id;
    public $title;
    public $content;
    private $category;


    public function read($id=null)
    {

        if($id){
            $sql = "SELECT * FROM " .self::TABLENAME . " WHERE id=$id";
       }       
       else{
            $sql = "SELECT * FROM ". self::TABLENAME ." ORDER BY id DESC";
       }
        $db = Database::getInstance()->getConnection();
        $res = mysqli_query($db, $sql);
        return $res;

    }


    public function showCategory() 
    {
        
        $sql = "SELECT * FROM `posts` WHERE `posts_category_name` = '".$_GET['category']."' ORDER BY `id` DESC";
        $db = Database::getInstance()->getConnection();
        $res = mysqli_query($db, $sql);
        return $res;

    }

    public function create()
    {

        $sql = "INSERT INTO ". self::TABLENAME. " (posts_title, posts_content, posts_category_name) VALUES ('$this->title', '$this->content', '$this->category')";
        $db = Database::getInstance()->getConnection();
        $res = mysqli_query($db, $sql);
        if($res){
            return true;
       }else{
           return false;
       }

    }

    public function delete($id)
    {
        $sql = "DELETE FROM ".self::TABLENAME. " WHERE id=$id";
        $db = Database::getInstance()->getConnection();
        $res = mysqli_query($db, $sql);
        if($res){
            return true;
       }else{
           return false;
       }
    }

    

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title)
    {
        $this->title = $title;
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


    /**
     * Get the value of categoryId
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of categoryId
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }
}
