<?php
	$conn = new mysqli('localhost', 'root', '', 'restaurant');
	if(isset($_POST['submit']))
	{
		$paid = $_POST['paid'];
		
		$query = $conn->query("INSERT INTO accounts_table (account_id, paid) VALUES ('', '$paid');");
		header("Location: account.php");
		
	}
?>