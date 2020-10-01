<?php require_once 'connection.php'; ?>

<?php

if(isset($_POST['search']))
{   echo "sadasdasdasda";
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `PRODUCT` WHERE CONCAT(`PRODUCT_ID`, `PRODUCT_NAME`, `PRODUCT_QUANTITY`, `WAREHOUSE_ID`, `MANUFACTURER_ID`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
//commit test
}
else {
    $query = "SELECT * FROM `PRODUCT`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    include 'connection.php';


    $connect = mysqli_connect("localhost", "root", "", "lager");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
















<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h2>PRODUCT</h2>
<hr>





<form action="index.php?page=product" method="post">
    <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
    <input type="submit" name="search" value="Filter"><br><br>

    <table border="1">

        <tr>

            <th>PRODUCT_ID</th>
            <th>PRODUCT_NAME</th>
            <th>PRODUCT_QUANTITY</th>
            <th>WAREHOUSE_NAME</th>
            <th>MANUFACTURER_NAME</th>
            <th width="50">FUNCTION1</th>
            <th width="50">FUNCTION2</th>

        </tr>



        <!-- populate table from mysql database -->
        <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>
                <td><?php echo $row['PRODUCT_ID'];?></td>
                <td><?php echo $row['PRODUCT_NAME'];?></td>
                <td><?php echo $row['PRODUCT_QUANTITY'];?></td>
                <td><?php echo $row['WAREHOUSE_ID'];?></td>
                <td><?php echo $row['MANUFACTURER_NAME'];?></td>
                <td align="center"><a href="?page=editproduct&PRODUCT_ID=<?php echo $qdata['PRODUCT_ID'] ?>"><button>Edit</button></td></a>
                <td align="center"><a href="?page=operation&BENUTZER_ID=<?php echo $qdata['BENUTZER_ID'] ?>&qdelete=ok"><button>Delete</button></td></a>


            </tr>
        <?php endwhile;?>
    </table>
</form>



<a href="?page=insert"><button>ADD</button></a>

</body>
</html>





