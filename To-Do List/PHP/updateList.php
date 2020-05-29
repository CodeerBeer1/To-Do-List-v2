<?php

include "DB-Conn.php";

$id = $_GET["id"];

?>

<h2>Lijst-naam Wijzigen</h2>

<form method="post" action="updateListScript.php?id=<?php echo $id ?>">

    <label>Naam</label>
    <input name="list">
    <input type="submit">

</form>