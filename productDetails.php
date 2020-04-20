<!DOCTYPE html>
<html>
<head>
	<title>Product Details</title>
  	<meta charset="utf-8">
  	<link rel="stylesheet" type="text/css" href="styleCSS/CSS_index.css">
  	<link rel="stylesheet" type="text/css" href="styleCSS/CSS_edit_delete_add.css">
  	<link rel="stylesheet" type="text/css" href="styleCSS/CSS_productdetails.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="JavaScript_asm.js"></script>
</head>
<body>
	<div>
		<?php include 'layout/header_for_user.php'; ?>
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
				<div class="group_infor_product">
					<div style="text-align: center;"><h1>Product Information</h1></div>					
					<div style="margin-left: auto; margin-right: auto; width: 500px; height: 500px;">
						<img src="<?=$rows[0][2]?>" style="width: 500px; height: 500px;">
					</div>
					<div style="font-size: 50px" ><?=$rows[0][1]?></div><br><br>
					<div class="price"><?=$rows[0][3]?></div>
					<div class="product_details">
						<h2>Configuration | Parameter</h2>
						<div class="attribute">
							<div class="label">
								<label style="font-size: 20px;">Operating System</label>
							</div>
							<div class="data"><?=$rows[0][4]?></div>
						</div>
						<div class="attribute">
							<div class="label">
								<label style="font-size: 20px;">Rear Camera</label>
							</div>
							<div class="data"><?=$rows[0][5]?></div>
						</div>
						<div class="attribute">
							<div class="label">
								<label style="font-size: 20px;">Front Camera</label>
							</div>
							<div class="data"><?=$rows[0][6]?></div>
						</div>
						<div class="attribute">
							<div class="label">
								<label style="font-size: 20px;">Rom</label>
							</div>
							<div class="data"><?=$rows[0][7]?></div>
						</div>
						<div class="attribute">
							<div class="label">
								<label style="font-size: 20px;">Ram</label>
							</div>
							<div class="data"><?=$rows[0][8]?></div>
						</div>
						<div class="attribute">
							<div class="label">
								<label style="font-size: 20px;">Battery</label>
							</div>
							<div class="data"><?=$rows[0][9]?></div>
						</div>
					</div>			
				</div>
				<?php
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