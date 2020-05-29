<?php

include "DB-Conn.php";

$idTask = $_GET["id"];

?>

<h2>Taak-naam Wijzigen</h2>

<form method="post" action="updateTaskScript.php?id=<?php echo $idTask ?>">

    <label>Naam</label>
    <input name="task">
    <input type="submit">

</form>