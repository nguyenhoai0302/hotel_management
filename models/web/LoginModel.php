<?php

class AuthModel
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getUserByUsernameAndPassword($username, $password)
    {
        $query = "SELECT * FROM users WHERE name = :username AND password = :password";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        return $stmt->fetch();
    }
}
?>