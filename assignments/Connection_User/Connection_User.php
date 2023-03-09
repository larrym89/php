<?php

class Connection {

    public $host;
    public $user;
    public $password;
    public $database;
    // public $port;
    public $mysqli;

    public function __construct($host, $user, $password, $database)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
        // $this->port = $port;
    }

    public function db_connect()
    {
        $db = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database . '', $this->user, $this->password) or die("Cannot connect to mySQL.");

        return $db;
    }

        
}

// $db->db_connect();

class User {

    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $birthday;
    public $status;
    

    public function __construct($id, $first_name, $last_name, $email, $password, $birthday, $status)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->birthday = $birthday;
        switch ($status) {
            case "0" :
                $this->status = "User deleted";
                break;
            case "1" :
                $this->status = "User deactivated";
                break;
            case "2" :
                $this->status = "User blocked";
                break;
            case "3" :
                $this->status = "User active";
                break;
            case "4" :
                $this->status = "Administrator";
                break;
                            
        }
    }

    public function get_all_data() {

        $return = "<ul>
        <li>ID: " . $this->id . "</li>
        <li>First Name: " . $this->first_name . "</li>
        <li>Last Name: " . $this->last_name . "</li>
        <li>Email: " . $this->email . "</li>
        <li>Password: " . $this->password . "</li>
        <li>Birthday: " . $this->birthday . "</li>
        <li>Status: " . $this->status . "</li>
        </ul><br>";

        return $return;

    }

    public function get_fullName() {

        $return = "Full name: " . ucfirst($this->first_name) . " " . ucfirst($this->last_name) . "<br>";

        return $return;

    }

    public function get_email() {

        $return = "Email: " . $this->email . "<br>";

        return $return;

    }

}



$user = new User("1","Clark", "Kent", "superman@dc.com", "loislane", "1989-08-12", "3");

$data = $user->get_all_data();
echo $data;

$data = $user->get_fullName();
echo $data;

$data = $user->get_email();
echo $data;