<?php
	require_once 'connect.php';
	$email = mysqli_real_escape_string($conn, $_POST['email']);

	$sql = "SELECT * FROM tbl_users WHERE email = '$email'";

	$result = mysqli_query($conn, $sql);

	$count = mysqli_num_rows($result);

	if ($email == "") {
		echo 1;
	}

	elseif((!filter_var($email, FILTER_VALIDATE_EMAIL))) {
	  	echo 2;
	}

	elseif ($count == 1) {
		echo 3;
	}

	
	else{
		echo 4;
	}

	mysqli_close($conn);
?>