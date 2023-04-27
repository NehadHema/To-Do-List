<?php
$host="localhost";
$userName ="root";
$password ="";
$db_name="to_do_list";

try {
    $conn= new PDO("mysql:host=$host;port=3306;dbname=$db_name",$userName,$password);
} catch (Exception $e) {
    echo"Connection Failed: ".$e->getMessage();
}

