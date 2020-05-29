<?php

include "DB-Conn.php";

$id = $_GET["id"];

?>
<h2>Taak Wijzigen</h2>
<form method="post" action="updateTaskScript.php?id=<?php echo $id ?>">

    <label>Naam</label>
    <input name="task">
    <input type="submit">

</form>