<?php

    include "DB-Conn.php";

    $sql = "SELECT * FROM lists";

    $allLists = $conn->query($sql);
?>

<h2>Lijsten</h2>
<a href="addList.php"><button>Nieuwe Lijst</button></a>

<table>
    <tr>
        <th>ID</th>
        <th>Naam</th>
    </tr>
<?php
while($row = $allLists->fetch(PDO::FETCH_ASSOC))
{
    ?>
    
   <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><a href="deleteList.php?id=<?php echo $row["id"] ?>"><button>Verwijder</button></a></td>
        <td><a href="updateList.php?id=<?php echo $row["id"] ?>"><button>Wijzig naam</button></a></td>
   </tr>

   <?php
}

?>
</table>

<h2>Taken</h2>