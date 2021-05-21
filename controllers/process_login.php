<?php session_start(); ?>
<?php
	require_once 'connect.php';

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = sha1($_POST['password']);

	$sql = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'";

	$result = mysqli_query($conn, $sql);

	$count = mysqli_num_rows($result);


	if ($count > 0) {
		while($row = mysqli_fetch_assoc($result)){
			echo 'Welcome '.$row['firstname']. ' ' . $row['lastname'];
			$_SESSION['lastname'] = $row['lastname'];
			$_SESSION['firstname'] = $row['firstname'];
			$_SESSION['uid'] = $row['id'];
		}
	}

	else{
		echo "0";
	}


	mysqli_close($conn);
	
?>