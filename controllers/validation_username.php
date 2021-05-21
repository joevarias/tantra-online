<?php
	require_once 'connect.php';
	$uname = mysqli_real_escape_string($conn, $_POST['uname']);
	$count_uname = strlen($uname);

	$sql = "SELECT * FROM tbl_users WHERE username = '$uname'";

	$result = mysqli_query($conn, $sql);

	$count = mysqli_num_rows($result);

	if ($uname == "") {
		echo 1;
	}
	elseif ($count_uname < 5 || $count_uname > 10) {
		echo 2;
	}

	elseif ($count == 0) {
		echo 3;
	}
	elseif ($count == 1) {
		echo 4;
	}

	mysqli_close($conn);
?>