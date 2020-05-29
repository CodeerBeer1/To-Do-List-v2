<?php

include "DB-Conn.php";

$id = $_GET["id"];
$sqlList = "DELETE FROM `lists` WHERE id = ?";
$sqlTasks = "DELETE FROM `tasks` WHERE list_id = ?";

$query = $conn->prepare($sqlTasks);
$query->execute(array($id));

$query = $conn->prepare($sqlList);
$query->execute(array($id));

header("Location: Home.php");

?>