<?php

class Comments {

    const TABLENAME = 'comments';

    public $user_id;
    public $post_id;
    public $content;





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
     * Get the value of user_id
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * Get the value of post_id
     */
    public function getPostId()
    {
        return $this->post_id;
    }

    /**
     * Set the value of post_id
     */
    public function setPostId($post_id)
    {
        $this->post_id = $post_id;
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

        $sql = "INSERT INTO comments (content, user_id, post_id)  VALUES ('$this->content', '$this->user_id', '$this->post_id')";
        $db = Database::getInstance()->getConnection();
        $res = mysqli_query($db, $sql);
        if($res){

            return true;
       }else{
           return false;
       }
    }

    public function update($post_id, $content) {

        $sql = "UPDATE comments SET content = '$content' WHERE id='$post_id'";
        $db = Database::getInstance()->getConnection();
        $res = mysqli_query($db, $sql);
        if($res){
            return true;
       }else{
           return false;
       }

    }

    public function delete($post_id) {
        $sql = "DELETE FROM comments WHERE id = '$post_id'";
        $db = Database::getInstance()->getConnection();
        $res = mysqli_query($db, $sql);
        if($res){
            return true;
       }else{
        return false;
       }
    }


}