<?php session_start();?>
<?php 
 const TITLE = "Cart";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>
<?php

	$_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];

?>
<?php

require_once 'controllers/connect.php';


$grandtotal = 0;

$data = 
	'
	<table class="table table-striped">
		<thead class="thead-light text-center" width="500">
			<tr class="text-nowrap">
				<th></th>
				<th>Product</th>
				<th>Price(₱hp)</th>
				<th>Quantity</th>
				<th>Sub-total</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody class="text-center table-light">
	';


if(isset($_SESSION['cart'])){
	foreach($_SESSION['cart'] as $id => $quantity){

		$id = mysqli_real_escape_string($conn, $id);
		$sql = "SELECT * FROM tbl_products WHERE id = '$id'";

		$result = mysqli_query($conn,$sql);

		while($row = mysqli_fetch_assoc($result)){
			$name = $row['product_name'];
			$price = $row['price'];
			$description = $row['description'];
			$image = $row['img_path'];


			$subtotal = $quantity * $price;
			// $subtotal2 = number_format($subtotal, 0, '.', ',');
			$grandtotal += $subtotal;


			$data .=
			"
			<tr>
				<td><img src='$image'></td>
				<td>$name</td>
				<td id='price$id'>$price</td>
				<td><input class='form-control mx-auto' style='width: 80px;' type='number' value='$quantity' min='1' onchange='changeNoItems($id)' id='quantity$id'></td>
				<td>&#x20B1<span class='sub-total' id='sub_total$id'>$subtotal</span></td>
				<td><button class='btn btn-danger' onclick='removeFromCart($id)'>Remove</button></td>
			</tr>
			";
		}
	}
}

$data .= "
		</tbody>
	</table>
	<hr>
	<div>
	<p align='right' class='grand_total'>Total: &#x20B1<span id='grand_total' class='grand_total'>$grandtotal</span> </p>
	</div>
	<hr>";

// if not logged in, checkout button with require login
if (!isset($_SESSION['uid'])){

$data .="
		<p align='right' class='mx-1'><button class='btn btn-primary mx-1' onclick='loadMall()'>Continue Shopping</button><button class='btn btn-success' onclick='btnModalLogin()'>Checkout</button>
		</p>";
}

// if logged in, checkout button will load checkout
else {
	if (isset($_SESSION['uid'])){

	$data .="
			<p align='right' class='mx-1'><button class='btn btn-primary mx-1' onclick='loadMall()'>Continue Shopping</button><button class='btn btn-success' onclick='loadCheckOut()'>Checkout</button>
			</p>";

	};
}

if (!isset($_SESSION['total_itemcount']) || $_SESSION['total_itemcount'] == 0){

$data = "<hr><br><p class='text-center' style='font-size: 1.5rem'>Your Cart is empty.<p></p></p><p class ='text-center'><button class='btn btn-primary mx-1 btn-lg' onclick='loadMall()'>Continue Shopping</button><p><br><hr>";
}

?>
<article>
	<div class="container">
		<h1 class="text-center">Cart</h1>
<?php
if (isset($_SESSION['total_itemcount']) && $_SESSION['total_itemcount'] >= 1){

	echo "<p class='text-center tomycart'><a href='mall.php'>(back to Item Mall)</a></p>";
	}
?>

		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive">
					<?php echo $data; ?>
				</div>
				<br>
				<br>
			</div>
		</div>
	</div>
</article>



<?php require_once 'partials/footer.php'; ?>