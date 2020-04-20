<!DOCTYPE html>
<html>
<head>
	<title>Edit Products</title>
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
				<?php  
				if (isset($_GET['id'])) 
				{
					$id = $_GET['id'];
					$sql = "select * from Product where productid='". $id ."'";
					//echo $sql;
					$rows = query($sql);
				?>
				<form action="">
					<table class="tb1">
						<tr>
							<th class="edit" colspan="2" align="left">Change Product Information</th>
						</tr>
						<tr>
							<th>Category: </th>
							<td>
								<select name="catid">
									<?php  
									$sql = "select * from category";
									$cats =  query($sql);
									for ($i=0; $i < count($cats); $i++) 
									{ 
										if ($cats[$i][0] == $rows[0][10]) 
											{
										?>
											<option value="<?=$cats[$i][0]?>" selected>
												<?=$cats[$i][1]?>
											</option>
										<?php
											}
											else
											{
										?>
											<option value="<?=$cats[$i][0]?>">
												<?=$cats[$i][1]?>
											</option>
										<?php
											}
										?>
									<?php
									}
									?>
								</select><br>
							</td>
						</tr>
						<tr>
							<th>ID: </th>
							<td><input type="text" name="id" value="<?=$rows[0][0]?>"></td>
						</tr>
						<tr>
							<th>Name: </th>
							<td><input type="text" name="name" value="<?=$rows[0][1]?>"></td>
						</tr>
						<tr>
							<th>Iamge: </th>
							<td>
								<div class="img"><img src="<?=$rows[0][2]?>" width="100%"></div>
								<input type="text" name="image" value="<?=$rows[0][2]?>">
							</td>
						</tr>
						<tr>
							<th>Operating System: </th>
							<td><input type="text" name="operating" value="<?=$rows[0][4]?>"></td>
						</tr>
						<tr>
							<th>Rear Camere: </th>
							<td><input type="text" name="rear_cam" style="width: 500px;" value="<?=$rows[0][5]?>"></td>
						</tr>
						<tr>
							<th>Front camera: </th>
							<td><input type="text" name="front_cam" value="<?=$rows[0][6]?>"></td>
						</tr>
						<tr>
							<th>Rom: </th>
							<td><input type="text" name="rom" value="<?=$rows[0][7]?>"></td>
						</tr>
						<tr>
							<th>Ram: </th>
							<td><input type="text" name="ram" value="<?=$rows[0][8]?>"></td>
						</tr>
						<tr>
							<th>Battery: </th>
							<td><input type="text" name="battery" value="<?=$rows[0][9]?>"></td>
						</tr>
						<tr>
							<th>Price: </th>
							<td><input type="text" name="price" value="<?=$rows[0][3]?>"></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: center;">
								<input class="btn" type="submit" value="Update">
							</td>
						</tr>	
					</table>
				</form>
				<?php
				}
					if (isset($_GET['id']) && isset($_GET['name']) && isset($_GET['image']) && isset($_GET['price']) && isset($_GET['operating']) && isset($_GET['rear_cam']) && isset($_GET['front_cam']) && isset($_GET['rom']) && isset($_GET['ram']) && isset($_GET['battery']) && isset($_GET['catid'])) 
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
						$CatId = $_GET['catid'];
						$sql = "update product set productname='".$name."', image='".$image."', price='".$price."', operatingsystem='".$operating."', rearcamera='".$rear_cam."', frontcamera='".$front_cam."', rom='".$rom."', ram='".$ram."', battery='".$battery."', catid=".$CatId." where productid='".$id."'";
						//echo $sql;
						if(execsql($sql))
						{
							echo "Update successfully";
						}else
						{
							echo "Update failed";
						}
					}
				?>
			</div>
		</div>
		<div class="rightcolumn">
    		<div class="card">
        		<h2><a href="http://localhost:8080/ASM2-WebDesign/InforAdmin_ad.php">About Me</a></h2>
        		<div class="img">
          			<img src="backgroundimage/avt.jpg" alt="avatar" width="100%">
        		</div>
        		<div class="myName">
          			<h3 style="font-family: Trebuchet MS">Nguyen Duc Cuong</h3>
          			<h3 style="font-family: Trebuchet MS">GCH18641</h3>
        		</div>
    		</div>
  		</div>
	</div>
	<div>
    	<?php include 'layout/footer.php'; ?>
  	</div>
</body>
</html>