<?php
$conn = new mysqli('localhost', 'root', '','restaurant');
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	 $_SESSION['admin_email'] = $email;
	 //$_SESSION['staff_email'] = $email;
	 $query = mysqli_query($conn, "SELECT * FROM user_table WHERE email= '$email' AND password= '$password'");
	 if ($query->num_rows>0) {
		 header("Location:user.php");
	 }
	 echo "Error Sign In";
}
?>