<?php
	require_once 'connect.php';
	$uname = mysqli_real_escape_string($conn, $_POST['uname']);
	$pword = $_POST['pword'];
	$cpword = $_POST['cpword'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = mysqli_real_escape_string($conn, $_POST['email']);


	$count_uname = strlen($uname);
	$count_pword = strlen($pword);

	$sql_uname = "SELECT * FROM tbl_users WHERE username = '$uname'";
	$sql_email = "SELECT * FROM tbl_users WHERE email = '$email'";

	$result_uname = mysqli_query($conn, $sql_uname);
	$rowcount_uname = mysqli_num_rows($result_uname);

	$result_email = mysqli_query($conn, $sql_email);
	$rowcount_email = mysqli_num_rows($result_email);


	if ($uname == "" || $pword == "" || $cpword == "" || $email == "" || $fname == "" || $lname == "" ) {
		echo "1";
	}

	if ($count_uname < 5 || $count_uname > 10) {
		echo "2u";
	}

	if ($rowcount_uname == 0) {
		echo "3u";

	}

	if ($rowcount_uname == 1) {
		echo "4u";
	}

	if ($pword=="") {
		echo "5z";
	}

	if ($count_pword < 5 || $count_pword > 20) {
		echo "5p";
	}

	if($cpword != $pword){
		echo "6c";
	}

	if(($cpword && $pword > 1)&&( $cpword == $pword)){
		echo "7c";
	}

	if($fname == ""){
		echo "7f";
	}

	if($lname == ""){
		echo "7l";
	}

	if((!filter_var($email, FILTER_VALIDATE_EMAIL))) {
	  	echo "8e";
	}

	if ($rowcount_email == 1) {
		echo "9em";
	}


	mysqli_close($conn);
?>