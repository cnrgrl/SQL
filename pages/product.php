<?php require_once 'connection.php'; ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h2>PRODUCT</h2>
<hr>

<table style="width: 60%" border="1">
		
		<tr>
			<th>NO</th>
			<th>PRODUCT_ID</th>
			<th>PRODUCT_NAME</th>
			<th>PRODUCT_QUANTITY</th>
			<th>WAREHOUSE_NAME</th>
			<th>MANUFACTURER_NAME</th>
			<th width="50">FUNCTION1</th>
			<th width="50">FUNCTION2</th>
		</tr>

		<?php

		$data=$conn->prepare("SELECT PRODUCT.PRODUCT_ID, PRODUCT.PRODUCT_NAME, PRODUCT.PRODUCT_QUANTITY, WAREHOUSE.WAREHOUSE_NAME, MANUFACTURER.MANUFACTURER_NAME FROM PRODUCT JOIN WAREHOUSE ON WAREHOUSE.WAREHOUSE_ID=PRODUCT.WAREHOUSE_ID  JOIN MANUFACTURER ON MANUFACTURER.MANUFACTURER_ID=PRODUCT.MANUFACTURER_ID");


		
		$data->execute();

		$counter=0;

		while($qdata=$data->fetch(PDO::FETCH_ASSOC)) { $counter++?>



		<tr>
			<td><?php echo $counter; ?></td>
			<td><?php echo $qdata['PRODUCT_ID'] ?></td>
			<td><?php echo $qdata['PRODUCT_NAME'] ?></td>
			<td><?php echo $qdata['PRODUCT_QUANTITY'] ?></td>
			<td><?php echo $qdata['WAREHOUSE_NAME'] ?></td>
			<td><?php echo $qdata['MANUFACTURER_NAME'] ?></td>
			
			
			<td align="center"><a href="?page=editproduct&PRODUCT_ID=<?php echo $qdata['PRODUCT_ID'] ?>"><button>Edit</button></td></a>
			
			<td align="center"><a href="?page=operation&BENUTZER_ID=<?php echo $qdata['BENUTZER_ID'] ?>&qdelete=ok"><button>Delete</button></td></a>
		</tr>

		
			
		

		<?php } ?>

	</table>
	<br>
<a href="?page=insert"><button>ADD</button></a>

</body>
</html>





