<?php

include "DB-Conn.php";

$id = $_GET["id"];
$updatedName = $_POST["list"];

$sql = "UPDATE `lists` SET `name` = ? WHERE id = ?";

$query = $conn->prepare($sql);
$query->execute(array($updatedName, $id));

header("Location: Home.php");

?>