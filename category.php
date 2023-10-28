<?php
	$conn = new mysqli('localhost', 'root', '', 'restaurant');
	$query = $conn->query("select * from res_table");
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
		<h2 class="title"  style="color:#fff; padding: 10px;">FoodGallery Admin Panel</h2>
	</header>
	<div class="body_section">
		<div class="menu">
			<ul>
				<li><a href="admin.php">Dashboard</a></li>
				<li><a href="category.php">Food Catagory</a></li>
				<li><a href="food_menu.php">Food Menu</a></li>
				<li><a href="customer.php">Order</a></li>
			</ul>
		</div>
		<div class="res">
			<div class="form">
				<div style="text-align:center; font-size: 40px;padding:10px;">Add Food Category</div>
				<form action="res.php" method="post">
					<div>
						<label for="name">Catagory name:</label>
						<input type="text" name="cat_name">
					</div>
					<div>
						<label for="des">Description:</label>
						<textarea name="des" id="des" cols="30" rows="10"></textarea>
					</div>
					
					<div>
						<input type="submit" value="Submit" name="submit">
					</div>
					
				</form>
			</div>
		</div>
		<div class="res_list">
		<div style="text-align:center; font-size: 40px; padding:10px;">Food Category List</div>
			<table>
			  <tr>
				<th>#SL</th>
				<th>Food Catagory name</th>
				<th>Description</th>
			  </tr>
			  <?php
				$i=1;
				while($row = $query->fetch_assoc()){ 
			  ?>
			  <tr>
				<td><?php echo $i++;?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['description'];?></td>
			  </tr>
			  <?php
				}
			  ?>
			</table>
		</div>
	</div>
</body>
</html>