<?php
include_once 'config/database.php';

class SearchModel extends ConnectDB
{
    function getSearch($name)
    {
        $sql = "SELECT * FROM rooms WHERE name = $name";
        return mysqli_query($this->connect(), $sql);
    }
}