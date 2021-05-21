<?php
	$pword = $_POST['pword'];
	$count_pword = strlen($pword);

	if ($pword == "") {
		echo 1;
	}
	elseif ($count_pword < 5 || $count_pword > 20) {
		echo 2;
	}
	else {
		echo 3;
	}
?>