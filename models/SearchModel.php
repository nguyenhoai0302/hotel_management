<?php
include_once 'config/database.php';

class SearchModel extends ConnectDB
{
    function searchName($name)
    {
        $sql = "SELECT * FROM payments WHERE name = $name";
        return mysqli_query($this->connect(), $sql);
    }
}