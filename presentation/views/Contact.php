<!--
Stephan Moncavage
CST-236
eCommerce Site Milestone Project
Milestone 1
27 February 2021
-->
<?php
//include('../../utility/auth_session.php');
//sessCheck();
//if($_SESSION["valid"] != 1){
//	header("Location: /CST236-Activity/eCommerceSite/presentation/views/login/login.php");
//}
?>
<?php include 'layout_head.php';?>
<link rel = "stylesheet" href = "../css/style.css" type="text/css">
<body class = "body">

<div class="container" id="main-content">
	<h3 class = "home-title" >Welcome to eCommerce!</h3>
	<br>
	<br>
	<p> Please feel free to send me an email with any question or comments that you may have. Thank you! </p>
	<a href="mailto: [smoncavage@my.gcu.edu]?subject= &body= "> Email me! </a> 
</div>

	<br>
	<a href="/CST236-Activity/eCommerceSite/presentation/views/login/logout.php"> <input type = "submit" name = "logout" value = "Logout"/></a>
	
</body>
<?php include 'layout_foot.php'; ?>
</html>