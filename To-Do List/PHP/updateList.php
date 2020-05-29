<?php

include "DB-Conn.php";

$idList = $_GET["id"];

?>

<h2>Lijst-naam Wijzigen</h2>

<form method="post" action="updateListScript.php?id=<?php echo $idList ?>">

    <label>Naam</label>
    <input name="list">
    <input type="submit">

</form>