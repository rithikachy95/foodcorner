<?php
session_start();
if(!isset($_SESSION['email'])){
	header("Location:index.php");
}
	$conn = new mysqli('localhost', 'root', '', 'restaurant');
	$query = $conn->query("select * from customer_table");
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
		<div class="res_list">
		<div style="text-align:center; font-size: 40px; padding:10px;">Food Order list</div>
			<table>
			  <tr>
				<th>#SL</th>
				<th>customer name</th>
				<th>address</th>
				<th>phone</th>
				<th>issue date</th>
				<th>food name</th>
				<th>quantity</th>
				
			  </tr>
			  <?php
				$i=1;
				while($row = $query->fetch_assoc()){ 
			  ?>
			  <tr>
				<td><?php echo $i++;?></td>
				<td><?php echo $row['customer_name'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['phone'];?></td>
				<td><?php echo $row['issue_date'];?></td>
			   <td><?php echo $row['food_name'];?></td>
				<td><?php echo $row['quantity'];?></td>
			  </tr>
			  <?php
				}
			  ?>
			</table>
		</div>
	</div>
</body>
</html>