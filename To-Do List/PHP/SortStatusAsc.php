<?php

    include "DB-Conn.php";

    $sqlList = "SELECT * FROM lists";
    $allLists = $conn->query($sqlList);

    $sqlTask = 'SELECT * FROM tasks ORDER BY `status` ASC';
    $allTasks = $conn->query($sqlTask);

?>

<h1>To-Do List</h1>

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
        <td><a href="FilterList.php?id=<?php echo $row["id"] ?>"><button>Filter taken op dit lijst</button></a></td>
   </tr>

   <?php
}

?>
</table>

<h2>Taken</h2>

<a href="FilterStatusNDone.php"><button>Filteren op status</button></a>
<a href="Home.php"><button>Sorteren op status</button></a>
<a href="addTask.php"><button>Nieuwe Taak</button></a>

<table id="tasks-table" >
    <tr>
        <th>ID</th>
        <th>Naam</th>
        <th>Status</th>
        <th>Lijst ID</th>
    </tr>
<?php
while($row = $allTasks->fetch(PDO::FETCH_ASSOC))
{
    ?>
    
   <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td>
            <button id="status <?php echo $row["id"] ?>" onclick="changeStatus( <?php echo $row['id'] ?> )">
                    <?php
                        echo $row["status"];
                    ?>
            </button>
        </td>
        <td><?php echo $row['list_id']?></td>
        <td><a href="deleteTask.php?id=<?php echo $row["id"] ?>"><button>Verwijder</button></a></td>
        <td><a href="updateTask.php?id=<?php echo $row["id"] ?>"><button>Wijzig naam</button></a></td>
   </tr>

   <?php
}

?>
</table>

<script src="java.js"></script>