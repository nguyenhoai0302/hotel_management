<?php
class ConnectDB {

    private $server = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'hotel_management';
    protected function connect() {
        $connect = mysqli_connect($this->server,
            $this->username,
            $this->password,
            $this->database);
        mysqli_set_charset($connect,"utf8");
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        return $connect;

    }
    
}
?>
