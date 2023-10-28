<?php
	$conn = new mysqli('localhost', 'root', '', 'restaurant');
	if(isset($_POST['submit']))
	{
		$name = $_POST['food_name'];
		$description = $_POST['des'];
		$price = $_POST['price'];
		
		
		$query = $conn->query("INSERT INTO food_table (food_id, food_name, description,price) VALUES ('', '$name', '$description' ,'$price');");
		header("Location: food_menu.php");
		
	}
?>