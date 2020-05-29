<?php

include "DB-Conn.php";

$idList = $_GET["id"];
$updatedListName = $_POST["list"];

$sql = "UPDATE `lists` SET `name` = ? WHERE `id` = ?";

$query = $conn->prepare($sql);
$query->execute(array($updatedListName, $idList));

header("Location: Home.php");

?>