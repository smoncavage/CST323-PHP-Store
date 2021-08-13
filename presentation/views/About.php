<!--
Stephan Moncavage
CST-236
eCommerce Site Milestone Project
Milestone 1
27 February 2021
-->
<?php
include_once '../../autoloader.php';
//include('../../utility/auth_session.php');
//sessCheck();
//if($_SESSION["valid"] != 1){
//    header("Location: /CST236-Activity/eCommerceSite/presentation/views/login/login.php");
//}
?>
<?php include 'layout_head.php';?>
<link rel = "stylesheet" href = "../css/style.css">
<body class = "body">

<div class="container" id="main-content">
	<h3 class = "home-title" >Welcome to eCommerce!</h3>
	<br>
	<br>
	<p> This is where I tell you about myself. </p>


	<br>
	<a href="login/login.php"> <input type = "submit" name = "login" value = "Login"/></a>
	<a href="login/register.html"> <input type = "submit" name = "register" value = "Register" /></a>
	<a href="login/logout.php"> <input type = "submit" name = "logout" value = "Logout"/></a>
	</div>
</body>
<?php include 'layout_foot.php'; ?>
</html>