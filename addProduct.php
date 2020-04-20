<!DOCTYPE html>
<html>
<head>
	<title>Add New Product</title>
	<meta charset="utf-8">
  	<link rel="stylesheet" type="text/css" href="styleCSS/CSS_index.css">
  	<link rel="stylesheet" type="text/css" href="styleCSS/CSS_edit_delete_add.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="JavaScript_asm.js"></script>
</head>
<body>
	<div>
		<?php include 'layout/header_for_admin.php';?>
	</div>
	<div class="row">
		<div class="leftcolumn">
			<div class="card">
				<form name="frm">
					<table  class="tb1">
						<tr>
							<th class="edit" colspan="2" align="left">Add New Product</th>
						</tr>
						<tr>
							<th>ID:</th>
							<td>
								<input type="text" name="id" required="">
							</td>
						</tr>
						<tr>
							<th>Name:</th>
							<td>
								<input type="text" name="name" required="">
							</td>
						</tr>
						<tr>
							<th>Iamge:</th>
							<td>
								<input type="text" name="image">
							</td>
						</tr>
						<tr>
							<th>Operating System: </th>
							<td><input type="text" name="operating"></td>
						</tr>
						<tr>
							<th>Rear Camere: </th>
							<td><input type="text" name="rear_cam" style="width: 500px;"></td>
						</tr>
						<tr>
							<th>Front camera: </th>
							<td><input type="text" name="front_cam"></td>
						</tr>
						<tr>
							<th>Rom: </th>
							<td><input type="text" name="rom"></td>
						</tr>
						<tr>
							<th>Ram: </th>
							<td><input type="text" name="ram"></td>
						</tr>
						<tr>
							<th>Battery: </th>
							<td><input type="text" name="battery"></td>
						</tr>
						<tr>
							<th>Price:</th>
							<td>
								<input type="text" name="price">
							</td>
						</tr>
						<tr>
							<th>Category: </th>
							<td>
								<select name="cat" id="">
								<?php
								$sql="select * from category";
								$rows = query($sql);
								for($i=0; $i<count($rows); $i++)
								{
								?>
									<option value="<?=$rows[$i][0]?>">
										<?=$rows[$i][1]?>
										
									</option>
								<?php
								}
								?>
								</select>
							</td>
						</tr>
						<tr>
							<td  colspan="2" style="text-align: center;">
								<input class="btn" type="submit" name="Insert" value="ADD">
							</td>
						</tr>
					</table>
					</form>
					<?php
					if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['image']) && isset($_GET['price']) && isset($_GET['operating']) && isset($_GET['rear_cam']) && isset($_GET['front_cam']) && isset($_GET['rom']) && isset($_GET['ram']) && isset($_GET['battery']) && isset($_GET['cat']))
					{
						$id = $_GET['id'];
						$name = $_GET['name'];
						$image = $_GET['image'];
						$price = $_GET['price'];
						$operating = $_GET['operating'];
						$rear_cam = $_GET['rear_cam'];
						$front_cam = $_GET['front_cam'];
						$rom = $_GET['rom'];
						$ram = $_GET['ram'];
						$battery = $_GET['battery'];
						$CatId = $_GET['cat'];
						$sql = "Insert Into product values ('" . $id . "', '" . $name ."', '" . $image . "', '" . $price . "', '".$operating."', '".$rear_cam."', '".$front_cam."', '".$rom."', '".$ram."','".$battery."','".$CatId."' )";
						//echo $sql;
						if(execsql($sql))
						{
							echo "Addition successfully";
						}else
						{
							echo "Addition failed";
						}
					}
					?>
				</div>
			</div>
		<div class="rightcolumn">
    		<div class="card">
        		<h2><a href="http://localhost:8080/ASM2-WebDesign/InforAdmin_viewer.php">About Me</a></h2>
        		<div class="img">
          			<img src="backgroundimage/avt.jpg" alt="avatar" width="100%">
        		</div>
        		<div class="myName">
          			<h3 style="font-family: Trebuchet MS">Nguyen Duc Cuong</h3>
          			<h3 style="font-family: Trebuchet MS">GCH18641</h3>
          			<h3 style="font-family: Trebuchet MS"><strong>Hotline:</strong>0336424121</h3>
        		</div>
    		</div>
  		</div>
	</div>
	<div>
    	<?php include 'layout/footer.php'; ?>
  	</div>
</body>
</html>