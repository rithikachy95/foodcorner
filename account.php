<?php
session_start();
if(!isset($_SESSION['email'])){
	header("Location:index.php");
}
	$conn = new mysqli('localhost', 'root', '', 'restaurant');
	$query = $conn->query("select * from accounts_table");
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
		<div class="res">
			<div class="form">
				<div style="text-align:center; font-size: 40px;padding:10px;">Add Accounts Info</div>
				<form action="acc.php" method="post">
					<div>
						<label for="paid">paid</label>
						<input type="text" name="paid">
					</div>
					
					<div>
						<input type="submit" value="Submit" name="submit">
					</div>
					
					
				</form>
			</div>
		</div>
		<div class="res_list">
		<div style="text-align:center; font-size: 40px; padding:10px;">Accounts Info List</div>
			<table>
			  <tr>
				<th>#SL</th>
				<th>paid</th>
			  </tr>
			  <?php
				$i=1;
				while($row = $query->fetch_assoc()){ 
			  ?>
			  <tr>
				<td><?php echo $i++;?></td>
				<td><?php echo $row['paid'];?></td>
				
			  </tr>
			  <?php
				}
			  ?>
			</table>
		</div>
	</div>
</body>
</html>