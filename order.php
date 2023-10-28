<?php
	$conn = new mysqli('localhost', 'root', '', 'restaurant');
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$address = $_POST['add'];
		$phone = $_POST['phone'];
		$issue_date = date('Y-m-d');
		$food_name = $_POST['food'];
		$quantity = $_POST['qun'];
		//echo $quantity;
		
		$query = $conn->query("INSERT INTO customer_table (customer_id, customer_name, address, phone,food_name,quantity,issue_date) VALUES ('', '$name', '$address','$phone', '$food_name','$quantity', '$issue_date');");
		header("Location: index.php");
		
	}
?>