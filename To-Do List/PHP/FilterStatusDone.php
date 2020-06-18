<?php

    include "DB-Conn.php";

    $sqlList = "SELECT * FROM lists";
    $allLists = $conn->query($sqlList);

    $sqlTask = "SELECT * FROM `tasks` WHERE `status` = 'klaar'";
    $allTasks = $conn->query($sqlTask);

    $dataList = $allLists->fetchAll(PDO::FETCH_ASSOC);
    $dataTasks = $allTasks->fetchAll(PDO::FETCH_ASSOC);

?>
<html>
<body>
<h1>To-Do List</h1>

<h2>Lijsten</h2>
<a href="addList.php"><button>Nieuwe Lijst</button></a>

<table>
    <tr>
        <th>ID</th>
        <th>Naam</th>
    </tr>
<?php
foreach($dataList as $row)
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
<a href="Home.php"><button>Alle Taken</button></a>
<a href="Home.php"><button>Filteren op status</button></a>
<a href="SortStatusDesc.php"><button>Sorteren op status</button></a>
<a href="addTask.php"><button>Nieuwe Taak</button></a>

<table id="tasks-table" >
    <tr>
        <th>ID</th>
        <th>Naam</th>
        <th>Status</th>
        <th>Lijst ID</th>
    </tr>
<?php
foreach($dataTasks as $row)
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
</body>
</html>
<script src="java.js"></script>