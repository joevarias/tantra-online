<?php
	session_start();

	unset($_SESSION['firstname']);
	unset($_SESSION['lastname']);
	unset($_SESSION['uid']);
	unset($_SESSION['cart']);
	unset($_SESSION['total_itemcount']);
	unset($_SESSION['prodId']);


	header("Location:" . $_SESSION['redirectURL']);

?>