<?php
class USER
{
    public $nume;
    public $prenume;
    public $email;
    private $parola;

    public function __construct()
    {

    }

    public function register($nume, $prenume, $email, $parola)
    {
        $this->setNume($nume);
        $this->setPrenume($prenume);
        $this->setEmail($email);
        $this->setParola($parola);

        $sql = "SELECT id FROM users WHERE email='$this->email' LIMIT 1";
        $instance = Database::getInstance();
        $conn = $instance->getConnection();
        $check = mysqli_query($conn, $sql);
        $count_row = mysqli_num_rows($check);

        //if the username is not in db then insert to the table
        if ($count_row == 0) {
            $sql_ins = "INSERT INTO users SET
            nume='$this->nume',
            prenume='$this->prenume',
            email='$this->email',
            parola='$this->parola'";
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

    public function login($umail, $upass)
    {

        $sql = "SELECT * FROM users WHERE email = '" . $umail . "' LIMIT 1";
        //echo password_hash($upass, PASSWORD_DEFAULT);
        $instance = Database::getInstance();
        $conn = $instance->getConnection();// se creeaza conexiunea la baza de date
        $res = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($res);
        if ($rowCount == 1) {
            $row = mysqli_fetch_assoc($res);
            if (password_verify($upass, $row['parola'])) {
                $_SESSION['user_session'] = $row['id'];
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
     * Get the value of nume
     */
    public function getNume()
    {
        return $this->nume;
    }

    /**
     * Set the value of nume
     *
     * @return  self
     */
    public function setNume($nume)
    {
        $this->nume = $nume;

    }

    /**
     * Get the value of prenume
     */
    public function getPrenume()
    {
        return $this->prenume;
    }

    /**
     * Set the value of prenume
     *
     * @return  self
     */
    public function setPrenume($prenume)
    {
        $this->prenume = $prenume;

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
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

    }

    /**
     * Get the value of parola
     */
    public function getParola()
    {
        return $this->parola;
    }

    /**
     * Set the value of parola
     *
     * @return  self
     */
    public function setParola($parola)
    {
        $this->parola = password_hash($parola, PASSWORD_DEFAULT);

    }

    public static function getUserIP()
    {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }

        return $ip;
    }

}
