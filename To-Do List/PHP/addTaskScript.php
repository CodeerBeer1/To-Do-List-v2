<?php

include "DB-Conn.php";

$task = $_POST["task"];
$listID = $_POST["list_id"];

$sql = "INSERT INTO `tasks` (`name`, `list_id`) VALUES ( :name, :list_id )";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":name", $task);
$stmt->bindParam(":list_id", $listID);

$stmt->execute();

header("Location: Home.php");

?>