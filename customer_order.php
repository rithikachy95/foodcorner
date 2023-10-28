<?php
	$conn = new mysqli('localhost', 'root', '', 'restaurant');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Food Gallery</title>
		
		<link rel="stylesheet" href="style.css" />
    </head>
    <body>
	
		<div class="header">
			<div class="title">Food Gallery</div>
			</div>
             <div id="order">
			<div class="form">Customer Form</div>
			<div class="form">
				<form action="order.php" method="post">
				    <br>
					Customer Name: <input type="text" name="name">
					</br>
					<br>
					Address: <textarea name="add" id="add"></textarea>
					</br>
					<br>
					Phone: <input type="text" name="phone">
					</br>
					<br>
					Food Name: 
					<select name="food">
					<?php 
						$query = $conn->query("select * from food_table");
						while($r = $query->fetch_assoc()){
					?>
					 <option value="<?php echo $r['food_name']?>"><?php echo $r['food_name']?></option>
					 <?php
						}
					 ?>
					</select>
					</br>
					<br>
					Quantity: <input type="number" name="qun">
					</br>
					<input type="submit" value="Submit" name="submit">
				</form>
			</div>
		
		</div>
	</body>
</html>
		