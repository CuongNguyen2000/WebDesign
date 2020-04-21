<!DOCTYPE html>
<html>
<head>
	<title>header</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styleCSS/CSS_index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="JavaScript_asm.js"></script>
  <script type="text/javascript">
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function Function_drop_login() {
  document.getElementById("dropdown_login").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var dropdown_login = document.getElementById("dropdown_login");
    if (dropdown_login.classList.contains('show')) {
      dropdown_login.classList.remove('show');
    }
  }
}
  </script>
</head>
<body>
	<div class="header">
    	<img src="images/FotoJet.jpg" alt="banner_image" style="width: 1300px; height: 300px;">
  	</div>
  	<div class="topnav">
    <ul>
      	<li class="active">
      		<a href="http://localhost:8080/ASM2-WebDesign/index.php">
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
        			     	<a href="index.php?CatId=<?=$rows[$i][0]?>"><?=$rows[$i][1]?></a>
        			    <?php
      			    }
  	            ?>
          	</div>
          </div>
      	</li>
        <li style="float: right;">
          <div class="dropdown">
              <button class="dropbtn" onclick="Function_drop_login()">Login
                <i class="fa fa-caret-down"></i>
             </button>
             <div class="dropdown-content" id="dropdown_login">
               <a href="http://localhost:8080/ASM2-WebDesign/Login_user.php">Login</a>
               <a href="http://localhost:8080/ASM2-WebDesign/register.php">Register</a>
             </div>
          </div>
        </li>
      	<li style="float: right;">
          <a href="http://localhost:8080/ASM2-WebDesign/Login.php">Log in as ADMIN</a>
        </li>
    </ul>
  	</div>
</body>
</html>