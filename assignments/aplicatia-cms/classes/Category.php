<?php

class Category
{

    const TABLENAME = "categories";

    public $id;
    public $category;


    /**
     * Get the value of category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function read($category=null)
    {

        $sql = "SELECT * FROM " . self::TABLENAME ;
        if($category){
            $sql .= " WHERE category_name='$category";
       }
       else{
            $sql .= " ORDER BY category_name ASC";
       }
        $db = Database::getInstance()->getConnection();
        $res = mysqli_query($db, $sql);
        return $res;
    }
}
