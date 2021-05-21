<?php 
	session_start();
	require_once 'connect.php';

	$fname = mysqli_real_escape_string($conn, $_POST['firstname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lastname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$id = mysqli_real_escape_string($conn, $_SESSION['uid']);

	$sql = "SELECT * FROM tbl_users WHERE email = '$email'";

	$result = mysqli_query($conn, $sql);

	$count = mysqli_num_rows($result);

	while($row = mysqli_fetch_assoc($result)){
		$quid = $row['id'];
	}


	if ($email == "") {
		$data = 'blank';
	}

	elseif((!filter_var($email, FILTER_VALIDATE_EMAIL))) {
	  	$data = 'invalid';
	}

	elseif ($count == 1 && $id != $quid ) {
		$data = 'exists';
	}

	else {

		$sql = "UPDATE tbl_users SET firstname = '$fname', lastname = '$lname', email = '$email' WHERE id ='$id'";
		

		$result = mysqli_query($conn, $sql);

		if ($result){
			$data = "Success!";
		}
		else {
			$data = "Error: " . "<br>" . mysqli_error($conn);
		}

	}

	echo $data;

	mysqli_close($conn);
?>