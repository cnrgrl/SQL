<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h2>UPDATE PRODUCT TABLE</h2>
<hr>


	<?php 

	$data=$conn->prepare("SELECT PRODUCT.PRODUCT_ID, PRODUCT.PRODUCT_NAME, PRODUCT.PRODUCT_QUANTITY, WAREHOUSE.WAREHOUSE_NAME, MANUFACTURER.MANUFACTURER_NAME FROM PRODUCT JOIN WAREHOUSE ON WAREHOUSE.WAREHOUSE_ID=PRODUCT.WAREHOUSE_ID  JOIN MANUFACTURER ON MANUFACTURER.MANUFACTURER_ID=PRODUCT.MANUFACTURER_ID where PRODUCT_ID=:id");
	$data->execute(array(
		'id' => $_GET['PRODUCT_ID']
	));

	$qdata=$data->fetch(PDO::FETCH_ASSOC);

	
	?>




	<form action="?page=operation" method="POST">

		<label>PRODUCT ID  &emsp;&emsp;&emsp;&emsp;  :</label>
		<input type="text" required="" name="PRODUCT_ID" value="<?php echo $qdata['PRODUCT_ID'] ?>"><br>
		<label>PRODUCT NAME   &emsp;&emsp; :</label>
		<input type="text" required="" name="PRODUCT_NAME" value="<?php echo $qdata['PRODUCT_NAME'] ?>"><br>
		<label>PRODUCT QUANTITY &nbsp:</label>
		<input type="text" required="" name="PRODUCT_QUANTITY" value="<?php echo $qdata['PRODUCT_QUANTITY'] ?>"><br>



		Warehouse Name&emsp;&emsp;&emsp;:
		<label class="container">Garbsen
 		<input type="radio" name="WAREHOUSE_NAME" value="Garbsen" <?php 
  			if($qdata['WAREHOUSE_NAME']=="Garbsen"){
			echo 'checked="checked"';
		} ?>>
		</label>
		<label class="container">Laatzen
  		<input type="radio" name="WAREHOUSE_NAME" value="Laatzen" <?php 
  			if($qdata['WAREHOUSE_NAME']=="Laatzen"){
			echo 'checked="checked"';
		} ?>>

		</label>
		<br>

		
		<label for="MANUFACTURER">Manufacturer:</label>

		<select name="MANUFACTURER" id="MANUFACTURER">
		  <option value="volvo">Volvo</option>
		  <option value="saab">Saab</option>
		  <option value="mercedes">Mercedes</option>
		  <option value="audi">Audi</option>
		</select>


		<input type="hidden" value="<?php echo $qdata['PRODUCT_ID'] ?>" name="PRODUCT_ID">
		<br>
		<button type="submit" name="update">Edit</button>

	</form>

	<br>







</body>
</html>