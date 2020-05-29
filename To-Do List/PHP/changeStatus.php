<?php

include "DB-Conn.php";

$id = $_GET["id"];
$status = $conn->query("SELECT * FROM `tasks` WHERE `id` = $id");
$statext = $status->fetch(PDO::FETCH_ASSOC);

function changeStatus($conn, $idd, $statt)
{
    if($statt["status"] == "niet klaar")
    {
        $sql = "UPDATE `tasks` SET `status` = 'klaar' WHERE `id` = ?";
        $query = $conn->prepare($sql);
        $query->execute(array($idd));
    
        $status = $conn->query("SELECT * FROM `tasks` WHERE `id` = $idd");
        $conc = $status->fetch(PDO::FETCH_ASSOC);

        return $conc["status"];
    }

    if($statt["status"] == "klaar")
    {
        $sql = "UPDATE `tasks` SET `status` = 'niet klaar' WHERE `id` = ?";
        $query = $conn->prepare($sql);
        $query->execute(array($idd));
    
        $status = $conn->query("SELECT * FROM `tasks` WHERE `id` = $idd");
        $conc = $status->fetch(PDO::FETCH_ASSOC);

        return $conc["status"];
    }
    
}

$end = changeStatus($conn, $id, $statext);

echo $end;
?>