<?php
	$conn = new mysqli('localhost', 'root', '', 'restaurant');
	if(isset($_POST['submit']))
	{
		$name = $_POST['cat_name'];
		$description = $_POST['des'];
		
		$query = $conn -> query("INSERT INTO res_table (id,name, description) VALUES ('', '$name', '$description');");
		header("Location: category.php");
		
	}
?>