<?php 
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Products</title>
	<meta charset="utf-8">
  	<link rel="stylesheet" type="text/css" href="styleCSS/CSS_index.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="JavaScript_asm.js"></script>
</head>
<body>
	<div>
		<?php include 'layout/header_for_admin.php';?>
	</div>
	<div class="row">
		<div class="leftcolumn">
			<?php 
			if (isset($_GET['CatId'])) {
				$CatId = $_GET['CatId'];
				$sql = "select * from product where CatId=" . $CatId;
			}else
				$sql = "select * from product";
				$rows = query($sql);
				for ($i=0; $i < count($rows); $i++) 
				{ 
				?>
				<div class="product_container">
					<ul class="list_product">
						<li class="product">
							<div class="img">
								<img src="<?=$rows[$i][2]?>" width="100%">
							</div>
							<div class="info">
								<h3><h3 style="color: #E13535">Product name:</h3><?=$rows[$i][1]?></h3>
								<h4>Product ID: <?=$rows[$i][0]?></h4>
								<div class="price_box">
									<span class="regular_price">
										<span class="price"><?=$rows[$i][3]?>₫</span>
									</span>
								</div>
								<a href="editProduct.php?id=<?=$rows[$i][0]?>">Edit</a>
								<a href="deleteProduct.php?id=<?=$rows[$i][0]?>">Delete</a>
								<div class="clear"></div>
							</div>
						</li>
					</ul>
				</div>
			<?php
			}
			?>
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