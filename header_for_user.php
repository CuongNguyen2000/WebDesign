<!DOCTYPE html>
<html>
<head>
	<title>header for user</title>
	<meta charset="utf-8">
  	<link rel="stylesheet" type="text/css" href="styleCSS/CSS_index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="JavaScript_asm.js"></script>
</head>
<body>
	<div class="header">
    	<a href="http://localhost:8080/ASM2-WebDesign/index.php"><img src="images/FotoJet.jpg" alt="banner_image" style="width: 1300px; height: 300px;"></a>
  </div>
  	<div class="topnav">
    <ul>
      	<li class="active">
      		<a href="http://localhost:8080/ASM2-WebDesign/View_user.php">
      			<i class="fa fa-home fa-lg fa-fw"></i>
      		</a>
      	</li>
      	<li>
        <div class="dropdown">
          	<button class="dropbtn" onclick="Function_drop()">Categories
            	<i class="fa fa-caret-down"></i>
         	 </button>
        	<div class="dropdown-content" id="myDropdown">
	            <?php  
      			    require_once './Database.php';
      			    $sql = "select * from category";
      			    $rows = query($sql);

      			    for ($i=0; $i < count($rows); $i++) 
      			    {
      			    ?>
      			     	<a href="Admin_product.php?CatId=<?=$rows[$i][0]?>"><?=$rows[$i][1]?></a>
      			    <?php
			         }
	            ?>
        	</div>
        </div>
      	</li>
        <li style="float: right;">
          <a href="http://localhost:8080/ASM2-WebDesign/Login.php">Log in as ADMIN</a>
        </li>
        <li style="float: right;">
          <a href="Logout.php">Log out</a>
        </li>
    </ul>
  	</div>
</body>
</html>