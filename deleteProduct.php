<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>
	<div>
		<?php include 'layout/header_for_admin.php';?>
	</div>
<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "delete from Product where productid='". $id ."'";
		//echo $sql;
		$rows = query($sql);
	}
	header("location: Admin_product.php");
?>

</body>
</html>