<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>

<body>

<h2>MANUFACTURER</h2>
<hr>

<form name="search_form" method="post" action="recht.php">
        Search:<input type="text" name="search_box" value=""/>
        <input type="submit" name="search" value="filter">
    </form>




<table style="width: 60%" border="1">
    <tr>
        <th>NO</th>
        <th>MANUFACTURER_ID</th>
        <th>MANUFACTURER_NAME</th>
        <th width="50">FUNCTION1</th>
        <th width="50">FUNCTION2</th>
    </tr>
    <?php
    $data=$conn->prepare("SELECT * from MANUFACTURER");
    $data->execute();
    $counter=0;

    while($qdata=$data->fetch(PDO::FETCH_ASSOC)) { $counter++?>
        <tr>
            <td><?php echo $counter; ?></td>
            <td><?php echo $qdata['MANUFACTURER_ID'] ?></td>
            <td><?php echo $qdata['MANUFACTURER_NAME'] ?></td>
            
            <td align="center"><a href="?page=edit_recht&RECHTE_ID=<?php echo $qdata['RECHTE_ID'] ?>"><button>Edit</button></td></a>
            <td align="center"><a href="?page=operation&RECHTE_ID=<?php echo $qdata['RECHTE_ID'] ?>&qdelete=recht"><button>Delete</button></td></a>
        </tr>
    <?php 

} 



?>
</table>
<br>
<a href="?page=insert_recht"><button>ADD</button></a>
 

</body>
</html>