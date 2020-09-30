<?php require_once 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>

<h2>UPDATE PRODUCT TABLE</h2>
<hr>


	<?php 

	$data=$conn->prepare("SELECT PRODUCT_ID,PRODUCT_NAME,PRODUCT_QUANTITY from PRODUCT where PRODUCT_ID=:id");
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
		

		<input type="hidden" value="<?php echo $qdata['PRODUCT_ID'] ?>" name="PRODUCT_ID">
		<br>
		<button type="submit" name="update">Edit</button>

	</form>

	<br>







</body>
</html>