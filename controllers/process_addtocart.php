<?php
session_start();


	$id = $_POST['productId'];
	$quantity = $_POST['quantity'];

	$_SESSION["cart"][$id] = $quantity;
	$_SESSION["total_itemcount"] = array_sum($_SESSION["cart"]);



	echo "<i class='fas fa-shopping-cart'></i>Cart <span class='badge badge-primary'>" . $_SESSION['total_itemcount'] . "</span>";


?>