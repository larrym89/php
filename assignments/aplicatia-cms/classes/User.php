<?php
class USER
{
    public $username;
    public $email;
    private $password;

    public function __construct()
    {

    }

    public function register($username, $email, $password)
    {
        $this->setUsername($username);
        $this->setEmail($email);
        $this->setPassword($password);

        $sql = "SELECT id FROM users WHERE username='$this->username' LIMIT 1";
        $instance = Database::getInstance();
        $conn = $instance->getConnection();
        $check = mysqli_query($conn, $sql);
        $count_row = mysqli_num_rows($check);

        //if the username is not in db then insert to the table
        if ($count_row == 0) {
            $sql_ins = "INSERT INTO users SET
            username='$this->username',
            email='$this->email',
            password='$this->password'";
            $res = mysqli_query($conn, $sql_ins);
            if ($res) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function login($uname, $upass)
    {

        $sql = "SELECT * FROM users WHERE username = '" . $uname . "' LIMIT 1";
        //echo password_hash($upass, PASSWORD_DEFAULT);
        $instance = Database::getInstance();
        $conn = $instance->getConnection();// se creeaza conexiunea la baza de date
        $res = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($res);
        if ($rowCount == 1) {
            $row = mysqli_fetch_assoc($res);
            if (password_verify($upass, $row['password'])) {
                $_SESSION['user_session'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                return true;
            } else {
                return false;
            }
        }

    }

    public static function is_loggedin()
    {
        if (isset($_SESSION['user_session'])) {
            return true;
        }
    }

    public static function redirect($url)
    {
        header("Location: $url");
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }

    public function read()
    {
        $sql = "SELECT * FROM  users ORDER BY id DESC";
        $instance = Database::getInstance();
        $conn = $instance->getConnection();// se creeaza conexiunea la baza de date
        $res = mysqli_query($conn, $sql);
        return $res;
    }


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

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */
    public function setPassword($password): self
    {
        $this->password = $password;

        return $this;
    }
}
