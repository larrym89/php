<?php

class Posts {

    const TABLENAME = "posts";

    public $id;
    public $title;
    public $content;
    public $image;
    private $categoryId;
    private $userId;

    

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
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
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
    public function setContent($content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of image
     */
    // public function getImage()
    // {
    //     return $this->image;
    // }

    /**
     * Set the value of image
     */
    // public function setImage($image): self
    // {
    //     $this->image = $image;

    //     return $this;
    // }

    public function read($id=null)
    {

        $sql = "SELECT * FROM " . self::TABLENAME ;
        if($id){
            $sql .= " WHERE id=$id";
       }
       else{
            $sql .= " ORDER BY id DESC";
       }
        $db = Database::getInstance()->getConnection();
        $res = mysqli_query($db, $sql);
        return $res;

    }




}