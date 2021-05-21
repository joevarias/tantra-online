<?php session_start();?>
<?php
	if(!isset($_SESSION["uid"])){
		header("Location: index.php");
	}
?>
<?php 
 const TITLE = "My Transactions";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>
<?php require_once 'controllers/connect.php'; 

$uid = mysqli_real_escape_string($conn, $_SESSION['uid']);

// sql for grand total
// $sql_summary = "SELECT transaction_code, SUM(subtotal_amount) AS 'grand_total' FROM (SELECT quantity, purchase_date, transaction_code, product_name, img_path, status, payment_desc, subtotal_amount FROM tbl_orders o JOIN tbl_products p ON o.product_id = p.id JOIN tbl_order_status s ON o.order_status_id = s.id JOIN tbl_payment_mode pmt ON o.payment_mode_id = pmt.id WHERE user_id = '$uid') o GROUP BY o.transaction_code ORDER BY o.purchase_date ASC";

$sql_eachtrans = "SELECT quantity, purchase_date, transaction_code, product_name, img_path, status, payment_desc, subtotal_amount FROM tbl_orders o 
	JOIN tbl_products p ON o.product_id = p.id 
	JOIN tbl_order_status s ON o.order_status_id = s.id 
	JOIN tbl_payment_mode pmt ON o.payment_mode_id = pmt.id 
	WHERE user_id = '$uid' ORDER BY o.purchase_date DESC";

$data = "
		<table class='table table-striped'>
			<thead class='thead-light text-center' width='500'>
				<tr class='text-nowrap'>
					<th></th>
					<th>Product</th>
					<th>Quantity</th>
					<th>Transaction Code</th>
					<th>Purchase Date/Time</th>
					<th>Sub-total Amount(₱hp)</th>
					<th>Payment Mode</th>
				</tr>
			</thead>
			<tbody class='text-center table-light'>";


$result = mysqli_query($conn, $sql_eachtrans);

$count = mysqli_num_rows($result);


if ($count > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$image = $row['img_path'];
		$prod_name = $row['product_name'];
		$quantity = $row['quantity'];
		$trans_code = $row['transaction_code'];
		$date = $row['purchase_date'];
		$subtotal_amount = $row['subtotal_amount'];
		$payment_mode = $row['payment_desc'];

	$data .= "
			<tr>
				<td><img src='$image'></td>
				<td>$prod_name</td>
				<td>$quantity</td>
				<td>$trans_code</td>
				<td>$date</td>
				<td>&#x20B1<span>$subtotal_amount</span></td>
				<td>$payment_mode</td>
			</tr>";

	}
}



elseif ($count == 0){
	$data .= "<tr><p class='text-center'><i>No records found.</i> </p></tr>";
}

else {
	$data .= "Error: " . "<br>" . mysqli_error($conn);
}


$data .="
		</tbody>
	</table>";


mysqli_close($conn);
?>

<article>
	<div class="container">
		<h1>My Transactions</h1>
		<p class='text-center tomyprofile'><a href='myaccount.php'>(<i class="fas fa-arrow-left"></i> back to Profile)</a></p>
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