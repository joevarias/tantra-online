<?php
	require_once 'connect.php';

	$uname = mysqli_real_escape_string($conn, $_POST['uname']);
	$val_pword = $_POST['pword'];
	$pword = sha1($_POST['pword']);
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);


	$count_uname = strlen($uname);
	$count_pword = strlen($val_pword);

	$sql_uname = "SELECT * FROM tbl_users WHERE username = '$uname'";
	$sql_email = "SELECT * FROM tbl_users WHERE email = '$email'";

	$result_uname = mysqli_query($conn, $sql_uname);
	$rowcount_uname = mysqli_num_rows($result_uname);

	$result_email = mysqli_query($conn, $sql_email);
	$rowcount_email = mysqli_num_rows($result_email);


	if ($uname == "" || $val_pword == "" || $email == "" || $fname == "" || $lname == "" || ($count_uname < 5 || $count_uname > 10) || $rowcount_uname == 1 || ($count_pword < 5 || $count_pword > 20) || (!filter_var($email, FILTER_VALIDATE_EMAIL)) || ($rowcount_email == 1)){

		$data = "Error: " . "Please check javascript of your browser";

	}
	
	else {

		$sql = "INSERT tbl_users (username, password, firstname, lastname, email)
		VALUES ('$uname', '$pword', '$fname', '$lname', '$email')";

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