<?php

class User {

    protected $username;


    /**
     * Get the value of username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     */
    public function setUsername($username): self
    {
        $this->username = $username;

        return $this;
    }
}

interface Author {

   public function setAuthorPrivileges($array);

   public function getAuthorPrivileges();

}

interface Editor {

    public function setEditorPrivileges($array);

    public function getEditorPrivileges();

}

class AuthorEditor extends User implements Author,  Editor {

    public $authorPrivilagesArray;
    public $editorPrivilagesArray;

    public function setAuthorPrivileges($authorPrivilagesArray)
    {
        $this -> authorPrivilagesArray = $authorPrivilagesArray;
    }
    public function getAuthorPrivileges()
    {
        return $this -> authorPrivilagesArray;
    }
    public function setEditorPrivileges($editorPrivilagesArray){
        $this -> editorPrivilagesArray = $editorPrivilagesArray;

    }
    public function getEditorPrivileges()
    {
        return $this -> editorPrivilagesArray;
    }

}

$user1 = new AuthorEditor();
$user1 -> setUsername("Balthazar");

$user1 -> setAuthorPrivileges(array("write text", "add punctuation"));
$user1 -> setEditorPrivileges(array("edit text", "edit punctuation"));

$userName = $user1->getUsername();
$userPrivileges = array_merge($user1->getAuthorPrivileges(), $user1->getEditorPrivileges());

echo $userName . " has the following privileges ";
echo implode(", " , $userPrivileges);
echo " .";