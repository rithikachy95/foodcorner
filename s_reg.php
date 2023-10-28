<?php
	$conn = new mysqli('localhost', 'root', '', 'restaurant');
	if(isset($_POST['submit']))
	{
		$s_name = $_POST['s_name'];
		$address = $_POST['add'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$education = $_POST['education'];
		$experience = $_POST['exp'];
		$birth_date = $_POST['birth_date'];
		
		
		$query = $conn->query("INSERT INTO staffreg_table (s_id, s_name, address, phone, email, password, education, experience, birth_date) VALUES ('', '$s_name', '$address' ,'$phone','$email','$password', '$education' ,'$experience','$birth_date');");
		header("Location: staffreg.php");
		
	}
?>