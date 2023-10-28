<?php
	$conn = new mysqli('localhost', 'root', '', 'restaurant');
	if(isset($_POST['submit']))
	{
		$s_name = $_POST['s_name'];
		$adress = $_POST['add'];
		$phone = $_POST['phone'];
		$position = $_POST['position'];
		$salary = $_POST['number'];
		$salary_date = $_POST['salary_date'];
		
		
		
		$query = $conn->query("INSERT INTO staff_table (staff_id, s_name, address, phone, position, salary, salary_date) VALUES ('', '$s_name', '$adress' ,'$phone','$position', '$salary' ,'$salary_date');");
		header("Location: staff.php");
		
	}
?>