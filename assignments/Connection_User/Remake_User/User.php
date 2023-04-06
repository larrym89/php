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
    public function getAllData() {

        switch ($this->status) {
            case "0":
                $this->status = "User Deleted";
                break;
            case "1":
                $this->status = "User Deactivated";
                break;
            case "2":
                $this->status = "User Blocked";
                break;
            case "3":
                $this->status = "User Active";
                break;
            case "4":
                $this->status = "Administrator";
                break;
        }

        return "<ul>
            <li>First Name: " . ucfirst( $this->first_name) . "</li>
            <li>Last Name: " . ucfirst($this->last_name) . "</li>
            <li>Email: " . $this->email . "</li>
            <li>Password: " . $this->password . "</li>
            <li>Birthday: " . $this->birthday . "</li>
            <li>Status: " . $this->status . "</li>
            </ul>";

    }

    // *Metoda care returneaza prenumele si numele utilizatorului
    public function get_fullName() {
       
        return "Full name: " . ucfirst($this->first_name) . " " . ucfirst($this->last_name) . "<br>";    

    }

    //* Metoda care returneaza emailul utilizatorului
    public function get_email(){
      
        return "Email: " . $this->email ."<br>";
        
    }

    // *Metoda care returneaza id-ul utlizatorului
    public static function get_userId($first_name) {

        $sql = "SELECT id FROM users WHERE first_name='$first_name'";

        $instance = Connection::getInstance("localhost", "root", "", "user", "3306");
        $conn = $instance->getConnection();
        $res = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($res)) {
            return "User ID: " . $row['id'] . "<br>";
        }

    }

    // *Metoda care returneaza orice date de la utilizator folosind parametrii metodei
    public function get_data($data) {

       
        return ucfirst($this->first_name) . "'s " . $data . ": " . $this->{$data} . "<br>";
    

    }

    // *Metoda care returneaza o valoare booleana in functie de faptul daca utilizatorul este adult sau minor
    public function is_adult() {
        
        $today = new DateTime(date("Y-m-d"));
        $bday = new DateTime($this->birthday);

        $diff = $today->diff($bday);

        if ($diff->y < 18) {
            return false . "<br>";
        } else {
            return true . "<br>";
        }
    
        
    }

    //* Metoda care adauga un utilizator nou
    public function add_user() {

        $sql = "INSERT INTO users (first_name, last_name, email, password, birthday, status)
                 VALUES ('$this->first_name', '$this->last_name', '$this->email', '$this->password','$this->birthday', '$this->status')";
        
        $instance = Connection::getInstance("localhost", "root", "", "user", "3306");
        $conn = $instance->getConnection();

        if(mysqli_query($conn, $sql)){
            echo "Datele au fost introduse cu succes!";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }

    //* Metoda care editeaza un utilizator existent 
    public function update_user() {

        $sql = "UPDATE users SET 
            first_name='$this->first_name',
            last_name='$this->last_name',
            email='$this->email',
            password='$this->password',
            birthday='$this->birthday',
            status='$this->status'
            WHERE first_name='$this->first_name'";

        $instance = Connection::getInstance("localhost", "root", "", "user", "3306");
        $conn = $instance->getConnection();

        if(mysqli_query($conn, $sql)){
            echo "Datele au fost schimbate cu succes!" . "<br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

    }

    //* Metoda care schimba starea unui utilizator existent
    public function update_status($status){

        $this->status = $status;
        return "Statusul a fost schimbat cu succes";

    }

    
    //* Metoda care adauga un utilizator  nou utilizand parametrii metodei
    // public static function add_user($first_name, $last_name, $email, $password, $birthday, $status) {

    //     $sql = "INSERT INTO users (first_name, last_name, email, password, birthday, status)
    //              VALUES ('$first_name', '$last_name', '$email', '$password','$birthday', '$status')";
        
    //     $instance = Connection::getInstance("localhost", "root", "", "user", "3306");
    //     $conn = $instance->getConnection();

    //     if(mysqli_query($conn, $sql)){
    //         echo "Datele au fost introduse cu succes!";
    //     } else {
    //         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //     }

    // }
    

}



$user = new User("Tony", "Stark", "ironman@marvel.com", "manofmetal23", "1976-05-24", "4");

$data = $user->getAllData();
echo $data;

$data = $user->get_fullName();
echo $data;

$data = $user->get_email();
echo $data;

$data = $user->get_data("email");
echo $data;

$data = User::get_userId("steve");
print_r($data);

$data = $user->is_adult();
echo $data;

$user->add_user();

$user->email = "newEmail@marvel.com";
$user->update_user("tony");

$data = $user->update_status("2");
echo $data;

// User::add_user("Tony", "Stark", "ironman@marvel.com", "manofmetal23", "1976-05-24", "4"); //Metoda care adauga un utilizator folosind parametrii