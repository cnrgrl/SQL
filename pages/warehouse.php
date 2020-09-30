<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
   
</head>
<body>

<h2>WAREHOUSE</h2>
<hr>
   
<table style="width: 60%" border="1">
    <tr>
        <th>NO</th>
        <th>WAREHOUSE_ID</th>
        <th>WAREHOUSE_NAME</th>
        <th width="50">FUNCTION1</th>
        <th width="50">FUNCTION2</th>
    </tr>
    <?php
    $data=$conn->prepare("SELECT * from WAREHOUSE");
    $data->execute();
    $counter=0;
    while($qdata=$data->fetch(PDO::FETCH_ASSOC)) { $counter++?>
        <tr>
            <td><?php echo $counter; ?></td>
            <td><?php echo $qdata['WAREHOUSE_ID'] ?></td>
            <td><?php echo $qdata['WAREHOUSE_NAME'] ?></td>
            <td align="center"><a href="?page=edit_role&ROLE_ID=<?php echo $qdata['ROLE_ID'] ?>"><button>Edit</button></td></a>
            <td align="center"><a href="?page=operation&ROLE_ID=<?php echo $qdata['ROLE_ID'] ?>&qdelete=role"><button>Delete</button></td></a>
        </tr>
    <?php } ?>
</table>
<br>
<a href="?page=insert_role"><button>ADD</button></a>
                
        



</body>
</html>