<?php

include "DB-Conn.php";

$sql = "SELECT * FROM lists";
$query = $conn->prepare($sql);
$query->execute();
$lists = $query->fetchAll();

?>

<form method="post" action="addTaskScript.php">

    <label>Naam</label>
    <input name="task">
    <label>Kies lijst</label>
    <select name="list_id" required>
        <?php
            foreach($lists as $row)
            {
                ?>
                <option value="<?php echo $row['id'] ?>"><?php echo $row["name"] ?></option>
                <?php
            }
        ?>
    </select>
    <input type="submit">

</form>