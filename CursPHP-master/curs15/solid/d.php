<?php
//asa nu
// class MySQLConnection
// {
//     public function connect()
//     {
//         // handle the database connection
//         return 'Database connection';
//     }
// }

// class PasswordReminder
// {
//     private $dbConnection;

//     public function __construct(MySQLConnection $dbConnection)
//     {
//         $this->dbConnection = $dbConnection;
//     }
// }


interface DBConnectionInterface
{
    public function connect();
}
class MySQLConnection implements DBConnectionInterface
{
    public function connect()
    {
        // handle the database connection
        return 'Database connection';
    }
}

class PasswordReminder
{
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}