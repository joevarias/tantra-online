<?php 
 const TITLE = "Checkout";
?>
<?php require_once 'partials/header.php'; ?>
<?php

	if((!isset($_SESSION["uid"]) && !isset($_SESSION['total_itemcount'])) or $_SESSION['total_itemcount'] <= 0){
		header("Location: cart.php");
	}

?>
<?php require_once 'partials/navbar.php'; ?>
<?php

	require_once 'controllers/connect.php';

	$grandtotal = 0;

	$data = 
	'
	<table class="table table-striped">
		<thead class="thead-light text-center" width="200">
			<tr class="text-nowrap">
				<th></th>
				<th>Product</th>
				<th>Price(₱hp)</th>
				<th>Quantity</th>
				<th>Sub-total</th>
			</tr>
		</thead>
		<tbody class="text-center table-light">
	';

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
			$grandtotal += $subtotal;


			$data .=
			"
			<tr>
				<td><img src='$image'></td>
				<td>$name</td>
				<td id='price$id'>$price</td>
				<td>$quantity</td>
				<td>&#x20B1<span class='sub-total' id='sub_total$id'>$subtotal</span></td>
			</tr>
			";
			
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
?>

<article>
	<h1 align="center">Checkout Page</h1>
	<div class="container">
		<div class="row">
			<div class="col-lg-7">

				<!-- container Order Information -->
				<div class="container">
					<div class="row">
						<div class="col-lg-12 card p-3 my-2">
							<h4 class="mb-3">Order Information</h4>
							<div class="col-lg-12">
								<?php echo $data;?>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-5">

				<!-- Container order summary -->
				<div class="container">
					<div class="row">
						<div class="col-lg-12 card p-3 my-2">
							<h4>Order Summary</h4>
							<div class="card-body order-summary">
								<div class="payment-method">
									<label for="payment_method">Payment Method</label>
									<select name="payment_method" id="payment_method" class="ml-2">
									  <option value="cod">Cash On Delivery</option>
									  <option value="paypal">Paypal</option>
									  <option value="creditcard">Credit Card</option>
									  <option value="wallet">Wallet</option>
									</select>
								</div>
								<hr>
								<p>Sub-total <?= "(" . $_SESSION['total_itemcount'] . " items)"?><span class="checkout-sub-total-right"><?= $grandtotal ?></span>
								</p>
								<hr>

								<p>Total<span class="checkout-sub-total-right grand_total">₱<?= $grandtotal ?></span></p>

								<span><small class="checkout-sub-total-right">VAT included, where applicable</small></span>
								<br>
								<button class="btn btn-success text-center btn-block btn-lg" onclick="placeOrder()">Place Order Now</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<br>
</article>

<?php require_once 'partials/footer.php'; ?>