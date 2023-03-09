<?php

include_once("Connection.php");


class User
{

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
        $this->status = $status;
    }

    public function get_all_data($id) {

        $sql = "SELECT * FROM users WHERE id = $id";

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

        mysqli_close($conn);

    }

}

$user = new User("2","Clark", "Kent", "superman@dc.com", "loislane", "1989-08-12", "3");

$data = $user->get_all_data(1);
echo $data;