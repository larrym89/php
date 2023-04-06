<?php

include_once("Connection.php");


class User
{

    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $birthday;
    public $status;

    // *Constructorul Clasei
    public function __construct($first_name, $last_name, $email, $password, $birthday, $status)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
        $this->birthday = $birthday;
        $this->status = $status;
    }

    // *Metoda care returneaza toate datele utilizatorului
    public static function get_allData($first_name) {

        $sql = "SELECT * FROM users WHERE first_name = '$first_name'";

        $instance = Connection::getInstance();
        $conn = $instance->getConnection();
        $res = mysqli_query($conn, $sql);
        
        while($row = mysqli_fetch_assoc($res)) {

            switch ($row['status']) {
                case "0":
                    $row['status'] = "User Deleted";
                    break;
                case "1":
                    $row['status'] = "User Deactivated";
                    break;
                case "2":
                    $row['status'] = "User Blocked";
                    break;
                case "3":
                    $row['status'] = "User Active";
                    break;
                case "4":
                    $row['status'] = "Administrator";
                    break;
            }

            return "<ul>
            <li>ID: " . $row['id'] . "</li>
            <li>First Name: " . ucfirst( $row['first_name']) . "</li>
            <li>Last Name: " . ucfirst( $row['last_name']) . "</li>
            <li>Email: " . $row['email'] . "</li>
            <li>Password: " . $row['password'] . "</li>
            <li>Birthday: " . $row['birthday'] . "</li>
            <li>Status: " . $row['status'] . "</li>
            </ul>";            

        }


    }

    // *Metoda care returneaza prenumele si numele utilizatorului
    public static function get_fullName($first_name) {

        $sql = "SELECT first_name , last_name FROM users WHERE first_name='$first_name'";

        $instance = Connection::getInstance();
        $conn = $instance->getConnection();
        $res = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($res)) {
            return "Full name: " . $row['first_name'] . " " . $row['last_name'] . "<br>";
        }

    }

    //* Metoda care returneaza emailul utilizatorului
    public static function get_email($first_name){

        $sql = "SELECT email FROM users WHERE first_name = '$first_name'";

        $instance = Connection::getInstance();
        $conn = $instance->getConnection();
        $res = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($res)) {
            return "Email: " . $row['email'] ."<br>";
        }

    }

    // *Metoda care returneaza id-ul utlizatorului
    public static function get_userId($first_name) {

        $sql = "SELECT id FROM users WHERE first_name='$first_name'";

        $instance = Connection::getInstance();
        $conn = $instance->getConnection();
        $res = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($res)) {
            return "User ID: " . $row['id'] . "<br>";
        }

    }

    // *Metoda care returneaza orice date de la utilizator folosind parametrii metodei
    public static function get_data($user, $data) {

        $sql = "SELECT ". $data ." FROM users WHERE first_name = '$user'";
        
        $instance = Connection::getInstance();
        $conn = $instance->getConnection();
        $res = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($res)) {
            return ucfirst($user) . "'s " . $data . ": " . $row[$data] . "<br>";
        }    

    }

    // *Metoda care returneaza o valoare booleana in functie de faptul daca utilizatorul este adult sau minor
    public static function is_adult($first_name) {

        $sql = "SELECT birthday FROM users WHERE first_name = '$first_name'";

        $instance = Connection::getInstance();
        $conn = $instance->getConnection();
        $res = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($res)) {

            $today = new DateTime(date("Y-m-d"));
            $bday = new DateTime($row['birthday']);

            $diff = $today->diff($bday);

            if ($diff->y < 18) {
                return false . "<br>";
            } else {
                return true . "<br>";
            }
        }
        
    }

    //* Metoda care adauga un utilizator  nou utilizand parametrii metodei
    public static function add_user($first_name, $last_name, $email, $password, $birthday, $status) {

        $sql = "INSERT INTO users (first_name, last_name, email, password, birthday, status)
                 VALUES ('$first_name', '$last_name', '$email', '$password','$birthday', '$status')";
        
        $instance = Connection::getInstance();
        $conn = $instance->getConnection();

        if(mysqli_query($conn, $sql)){
            echo "Datele au fost introduse cu succes!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }

    //* Metoda care editeaza un utilizator existent 
    public static function update_user($user, $data, $value) {

        $sql = "UPDATE users SET " . $data . "='" . $value . "' WHERE first_name='" . $user ."'";

        $instance = Connection::getInstance();
        $conn = $instance->getConnection();

        if(mysqli_query($conn, $sql)){
            echo "Datele au fost schimbate cu succes!" . "<br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }

    //* Metoda care schimba starea unui utilizator existent
    public static function update_status($user, $status){

        $sql = "UPDATE users SET status='". $status ."' WHERE first_name='". $user ."'";

        $instance = Connection::getInstance();
        $conn = $instance->getConnection();

        if(mysqli_query($conn, $sql)){
            echo "Statusul a fost schimbat cu succes!" . "<br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }

}



$user = new User("Tony", "Stark", "ironman@marvel.com", "manofmetal23", "1976-05-24", "4");

// $user->add_user("Tony", "Stark", "ironman@marvel.com", "manofmetal23", "1976-05-24", "4");

$data = User::get_allData("tony");
echo $data;

$data = User::get_fullName("tony");
echo $data;

$data = User::get_email("tony");
echo $data;

$data = User::get_userId("tony");
echo $data;

$data = User::get_data("tony", "birthday");
echo $data;

$data = User::is_adult("tony");
echo $data;

User::update_user("tony", "email", "newEmail@email.com");

User::update_status("tony", "2");