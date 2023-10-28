<?php
session_start();
if(!isset($_SESSION['email'])){
	header("Location:index.php");
}
	$conn = new mysqli('localhost', 'root', '', 'restaurant');
	$query = $conn->query("select * from staffreg_table");
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
				<div style="text-align:center; font-size: 40px;padding:10px;">Staff Registration Form</div>
				<form action="s_reg.php" method="post">
					<div>
						<label for="name">s_name</label>
						<input type="text" name="s_name">
					</div>
					
					<div>
						<label for="add">address</label>
						<textarea name="add" id="add" cols="10" rows="5"></textarea>
					</div>
					<br>
						<div>
						<label for="phone">phone</label>
						<input type="number" name="phone">
					</div>
					<div>
						<label for="email">email</label>
						<input type="text" name="email">
					</div>
					<div>
						<label for="password">password</label>
						<input type="password" name="password">
					</div>
					<div>
						<label for="education">education</label>
						<input type="text" name="education">
					</div>
					
					<div>
						<label for="exp">experience</label>
						<textarea name="exp" id="exp" cols="30" rows="10"></textarea>
					</div>
					
						<div>
						<label for="birth_date">birth_date</label>
						<input type="date" name="birth_date">
					</div>
					<div>
						<input type="submit" value="Submit" name="submit">
					</div>
					
				</form>
			</div>
		</div>
		<div class="res_list">
		<div style="text-align:center; font-size: 40px; padding:10px;">New Staff Info List</div>
			<table>
			  <tr>
				<th>#SL</th>
				<th>s_name</th>
				<th>address</th>
				<th>phone</th>
				<th>email</th>
				<th>education</th>
				<th>experience</th>
				<th>birth_date</th>
			  </tr>
			  <?php
				$i=1;
				while($row = $query->fetch_assoc()){ 
			  ?>
			  <tr>
				<td><?php echo $i++;?></td>
				<td><?php echo $row['s_name'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['phone'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['education'];?></td>
				<td><?php echo $row['experience'];?></td>
				<td><?php echo $row['birth_date'];?></td>
			  </tr>
			  <?php
				}
			  ?>
			</table>
		</div>
	</div>
</body>
</html>