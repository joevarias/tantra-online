<?php
session_start();

$id = $_POST['id'];

unset($_SESSION['cart'][$id]);
$_SESSION['total_itemcount'] = array_sum($_SESSION['cart']);


if ($_SESSION['total_itemcount'] == 0){
	echo 
	"<i class='fas fa-shopping-cart'></i>Cart<span class='badge badge-primary'></span>";
}

else if ($_SESSION['total_itemcount'] > 0){
	echo 
	"<i class='fas fa-shopping-cart'></i>Cart<span class='badge badge-primary'>" . $_SESSION['total_itemcount'] . "</span>";
};

?>