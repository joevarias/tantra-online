<?php
	session_start();
	require_once 'connect.php';

	$currentpword = sha1($_POST['currentpword']);
	$val_pword = $_POST['newpword'];
	$confirmpword = $_POST['cpword'];
	$newpword = sha1($_POST['newpword']);
	$uid = mysqli_real_escape_string($conn, $_SESSION['uid']);

	$count_val_pword = strlen($val_pword);

	$sql_currentpw = "SELECT * FROM tbl_users WHERE id = '$uid' AND password = '$currentpword'";
	$result_currentpw = mysqli_query($conn, $sql_currentpw);
	$rowcount_currentpw = mysqli_num_rows($result_currentpw);

	if ($rowcount_currentpw) {
		if ($val_pword=="") {
			echo "5z";
		}

		if ($count_val_pword < 5 || $count_val_pword > 20) {
			echo "5p";
		}

		else {
			echo "3d";
		}

		if($confirmpword != $val_pword){
			echo "6c";
		}


		if(($count_val_pword >= 5 && $count_val_pword <= 20) && ( $confirmpword == $val_pword) && ($rowcount_currentpw)){

			mysqli_query($conn, "UPDATE tbl_users SET password = '$newpword' WHERE id ='$uid'");

			echo "7c";
		}

	}

	else {
		echo "1a";
	}


?>