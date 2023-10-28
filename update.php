<?php
session_start();
if(!isset($_SESSION['email'])){
	header("Location:index.php");
}
	$conn = new mysqli('localhost', 'root', '', 'restaurant');
	$query = $conn->query("select * from food_table");
?>
<?php

if(isset($_REQUEST['id'])){
	$id = $_REQUEST['id'];
}
else {
	header('Location: food_menu.php');
}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Update page</title>
	
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
				<div style="text-align:center; font-size: 40px;padding:10px;">Update Data</div>
				<?php
				$result = mysql_query("SELECT * FROM food_table WHERE food_id='$id'");
				while($row=mysql_fetch_array($result))
				{
					
					$name_old = $row['name'];
					$description_old = $row['description'];
					$price_old = $row['price'];
				}
		       ?>
				
				<form action="menu.php" method="post">
					<div>
						<label for="name">food name:</label>
						<input type="text" name="food_name" value="<?php echo $name_old; ?>">
					</div>
					
					<div>
						<label for="des">description:</label>
						<textarea name="description" id="des" cols="30" rows="10" value="<?php echo $description_old; ?>"></textarea>
					</div>
					<br>
						<div>
						<label for="price">price:</label>
						<input type="number" name="price" value="<?php echo $price_old; ?>">
					</div>
					<div>
						<input type="submit" value="UPDATE" name="update">
					</div>
					
				</form>
			</div>
		</div>
		<div class="res_list">
		<div style="text-align:center; font-size: 40px; padding:10px;">Food menu List</div>
			<table>
			  <tr>
				<th>Food_id</th>
				<th>Food name</th>
				<th>Description</th>
				<th>price</th>
				<th>Action</th>
			  </tr>
			  <?php
				$i=1;
				while($row = $query->fetch_assoc()){ 
			  ?>
			  <tr>
				<td><?php echo $i++;?></td>
				<td><?php echo $row['food_name'];?></td>
				<td><?php echo $row['description'];?></td>
				<td><?php echo $row['price'];?></td>
				<td><a href="update.php"<?php echo $row[food_id]; ?> ">Edit</a></td>
				
			  
			  <?php
				}
			  ?>
			</table>
		</div>
	</div>
</body>
</html>