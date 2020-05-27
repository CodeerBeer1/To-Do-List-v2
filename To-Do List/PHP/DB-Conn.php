<?php

$server = "localhost";
$usn = "root";
$pswd = "";
$db = "tododb";

try
{
    $conn = new PDO('mysql:host='.$server.';dbname='.$db, $usn, $pswd);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOExeption $e)
{
    echo $CreateDB.$e->getMessage();
}

?>