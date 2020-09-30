<?php 

include 'connection.php';


//UPDATE PRODUCT
if (isset($_POST['update'])) {
	
	$PRODUCT_ID=$_POST['PRODUCT_ID'];

	$kaydet=$conn->prepare("UPDATE PRODUCT set
		PRODUCT_ID=:a,
		PRODUCT_NAME=:b,
		PRODUCT_QUANTITY=:c
		where PRODUCT_ID={$_POST['PRODUCT_ID']}
		");

	$insert=$kaydet->execute(array(

		'a' => $_POST['PRODUCT_ID'],
		'b' => $_POST['PRODUCT_NAME'],
		'c' => $_POST['PRODUCT_QUANTITY']
	));
	
		

		Header("Location:?page=product");
		


}


/*

//UPDATE ROLE
if (isset($_POST['update_role'])) {
	
	$ROLE_ID=$_POST['ROLE_ID'];

	$kaydet=$conn->prepare("UPDATE ROLE set
		ROLE_ID=:a,
		ROLE_NAME=:b
		
		where ROLE_ID={$_POST['ROLE_ID']}
		");

	$insert=$kaydet->execute(array(

		'a' => $_POST['ROLE_ID'],
		'b' => $_POST['ROLE_NAME']
	
	));
	Header("Location:?page=role");
}




//UPDATE RECHTE
if (isset($_POST['update_recht'])) {
	
	$RECHTE_ID=$_POST['RECHTE_ID'];

	$kaydet=$conn->prepare("UPDATE RECHTE set
		RECHTE_ID=:a,
		RECHTE_NAME=:b
		
		where RECHTE_ID={$_POST['RECHTE_ID']}
		");

	$insert=$kaydet->execute(array(

		'a' => $_POST['RECHTE_ID'],
		'b' => $_POST['RECHTE_NAME']
	
	));
	Header("Location:?page=recht");
}





//DELETE BENUTZER

if ($_GET['qdelete']=="ok") {
	

	$del=$conn->prepare("DELETE from BENUTZER where BENUTZER_ID=:id");
	$kontrol=$del->execute(array(
		'id' => $_GET['BENUTZER_ID']
	));

	Header("Location:?page=benutzer");


}


//DELETE ROLE

if ($_GET['qdelete']=="role") {
	

	$del=$conn->prepare("DELETE from ROLE where ROLE_ID=:id");
	$kontrol=$del->execute(array(
		'id' => $_GET['ROLE_ID']
	));

	Header("Location:?page=role");


}





//DELETE RECHTE

if ($_GET['qdelete']=="recht") {
	

	$del=$conn->prepare("DELETE from RECHTE where RECHTE_ID=:id");
	$kontrol=$del->execute(array(
		'id' => $_GET['RECHTE_ID']
	));

	Header("Location:?page=recht");


}








//INSERT BENUTZER

if (isset($_POST['insertislemi'])) {
	
	

	$kaydet=$conn->prepare("INSERT into BENUTZER set
		BENUTZER_ID=:x,
		BENUTZER_NAME=:y,
		BENUTZER_ROLE_ID=:z
		");

	$insert=$kaydet->execute(array(

		'x' => $_POST['BENUTZER_ID'],
		'y' => $_POST['BENUTZER_NAME'],
		'z' => $_POST['BENUTZER_ROLE_ID']
	));
	echo "kayıt başarılı";

		Header("Location:?page=benutzer");
}



//INSERT ROLE

if (isset($_POST['insert_role'])) {
	
	

	$kaydet=$conn->prepare("INSERT into ROLE set
		ROLE_ID=:x,
		ROLE_NAME=:y
		");

	$insert=$kaydet->execute(array(

		'x' => $_POST['ROLE_ID'],
		'y' => $_POST['ROLE_NAME']
	));
	Header("Location:?page=role");
}





//INSERT RECHTE

if (isset($_POST['insert_recht'])) {
	
	

	$kaydet=$conn->prepare("INSERT into RECHTE set
		RECHTE_ID=:x,
		RECHTE_NAME=:y
		");

	$insert=$kaydet->execute(array(

		'x' => $_POST['RECHTE_ID'],
		'y' => $_POST['RECHTE_NAME']
	));
	Header("Location:?page=recht");
}


*/

?>