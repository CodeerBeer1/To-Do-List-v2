<?php

include "DB-Conn.php";

$id = $_GET["id"];

?>

<form method="post" action="updateListScript.php?id=<?php echo $id ?>">

    <label>Naam</label>
    <input name="list">
    <input type="submit">

</form>