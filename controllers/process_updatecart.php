<?php
session_start();

	$newcount = $_POST['newcount'];
	$id = $_POST['id'];


	$_SESSION['cart'][$id] = $newcount;
	$_SESSION["total_itemcount"] = array_sum($_SESSION["cart"]);
	
	echo "<i class='fas fa-shopping-cart'></i>Cart <span class='badge badge-primary'>" . $_SESSION['total_itemcount'] . "</span>";

?>