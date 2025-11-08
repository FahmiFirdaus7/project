<?php

$hostname = "localhost";
$username = "root";
$port = "3306";
$password = "";
$database = "hiking";

$connection = null;

try{
    $connection = new mysqli($hostname, 
                            $username, 
                            $password,
                            $database,
                            $port);
    

} catch(mysqli_sql_exception $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
} 


?>