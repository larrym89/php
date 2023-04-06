<?php

class Form{
    public $form;

    public function __construct($method = "GET", $action = "", $enctype = "", $id = ""){
        if(empty($enctype)){
            $enctype = "application/x-www-form-urlencoded";
        }
        $this->form = "<form id=$id method=$method enctype=$enctype $id=id>";
        return $this;
    }

    public function input($type = "text", $name, $required, $value = ""){
        if(!empty($required)){
            $required = "required";
        }
        $this->form .= "<input type=$type name=$name $required>";
        return $this;
    }

    public function label($for, $text){
        $this->form .= "<label for='$for'>$text</label>";
        return $this;
    }

    public function select($name, $required){
        if(!empty($required)){
            $required = "required";
        }
        $this->form .= "<select name=$name $required>";
        return $this;
    }

    public function end_select(){
        $this->form .= "</select>";
        return $this;
    }

    public function option($value, $text, $selected){
        if(!empty($selected)){
            $selected = "selected";
        }

        $this->form .= "<option value='$value' $selected>$text</option>";
        return $this;
    }

    public function textarea($name, $required, $value){
        if(!empty($required)){
            $required = "required";
        }
        $this->form .= "<textarea name='$name' $required>$value</textarea>";
        return $this;
    }

    public function br(){
        $this->form .= "<br>";
        return $this;
    }

    public function end_form(){
        $this->form .= "</form>";
        return $this->form;
    }
}


echo "<hr>";

$form = new Form("POST", "index.php", "", "test");
$form = $form->label("username", "Insert your username")
             ->input("text", "username", true)
             ->br()
             ->label("password", "Insert your password")
             ->input("password", "password", true)
             ->br()
             ->br()
             ->input("submit", "", "", "Log in here!")
             ->end_form();
echo $form;