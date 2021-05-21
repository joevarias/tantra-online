<?php
	$cpword = $_POST['cpword'];
	$pword = $_POST['pword'];

	if($cpword == ""){
		echo 1;
	}

	elseif($cpword != $pword){
		echo 2;
	}
	
	else{
		echo 3;
	}
?>