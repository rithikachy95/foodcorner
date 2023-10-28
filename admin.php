<?php
session_start();
if(!isset($_SESSION['email'])){
	header("Location:index.php");
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>FoodGallery</title>
	
	<link rel="stylesheet" href="food.css" />
</head>
<body>
	<header>
		<div class="title" style="color:#fff; margin: 10px; font-size: 30px;font-weight:bold">FoodGallery Admin Panel</div>
		<a href="logout.php" style="float: right;margin-top: -50px;margin-right: 30px; font-size: 20px; text-decoration: none;color: #fff;">logout</a>
	</header>
	<div class="body_section">
		<div class="menu">
			<ul>
				<li><a href="admin.php">Dashboard</a></li>
				<li><a href="food_menu.php">Food Menu</a></li>
				<li><a href="customer.php">Order</a></li>
				<li><a href="account.php">Account</a></li>
				<li><a href="staff.php">Staff </a></li>
				<li><a href="staffreg.php">staff registration</a></li>
			</ul>
		</div>
		<div class="main">
			<h1>Welcome To Our FoodGallery</h1>
			<?php print_r($_SESSION["email"]);?>
		</div>
	</div>
</body>
</html>