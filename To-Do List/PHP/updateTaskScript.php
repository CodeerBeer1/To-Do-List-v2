<?php

include "DB-Conn.php";

$idTask = $_GET["id"];
$updatedTaskName = $_POST["task"];

$sql = "UPDATE `tasks` SET `name` = ? WHERE id = ?";

$query = $conn->prepare($sql);
$query->execute(array($updatedTaskName, $idTask));

header("Location: Home.php");

?>