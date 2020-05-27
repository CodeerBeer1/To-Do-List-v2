<?php

include "DB-Conn.php";

$newListName = $_POST["list"];

$sql = "INSERT INTO `lists` (`name`) VALUES ( ? )";

$query = $conn->prepare($sql);
$query->execute(array($newListName));

header("Location: Home.php");

?>