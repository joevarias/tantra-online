<?php 
session_start();
require_once 'connect.php';


$paymentmethod = mysqli_real_escape_string($conn, $_POST['paymentmethod']);
$user = $_SESSION['uid'];
$order_status = 1;

switch ($paymentmethod) {
	case 'cod':
		$payment_mode_id = 1;
		break;
	case 'paypal':
		$payment_mode_id = 2;
		break;
	case 'creditcard':
		$payment_mode_id = 3;
		break;
	case 'wallet':
		$payment_mode_id = 4;
		break;
}

//function for transaction number

function generate_trans_number(){
  $ref_number = '';
  $source = array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F');

  for($i = 0; $i < 16; $i++){
      $index = mt_rand(0,15);
      $ref_number = $ref_number.$source[$index];
    }

   $today = getdate();
  return $ref_number. "-".$today[0];
}


$transno = generate_trans_number();


//Begin Transaction connection - rollback when unsuccessful
mysqli_begin_transaction($conn);


if ($paymentmethod == ('cod' || 'paypal' || 'creditcard' || 'wallet')){
	$trans_data = '';
	$trans_data_update = '';
	$data = '';
	$counter = 0;
	$failed_attempt = 0;
	$grandtotal = 0;
	$subtotal = 0;
	
	foreach ($_SESSION['cart'] as $product_id => $quantity) {

		$sql_price = "SELECT * FROM tbl_products WHERE id = '$product_id'";
		$result_price = mysqli_query($conn, $sql_price);
		$prod_info = mysqli_fetch_assoc($result_price);
		$prod_name = $prod_info['product_name'];
		$prod_price = $prod_info['price'];
		$subtotal = $quantity * $prod_price;


		$sql_order = "INSERT tbl_orders (product_id, quantity, transaction_code, user_id, order_status_id, payment_mode_id, subtotal_amount) 
		VALUES ('$product_id', '$quantity', '$transno', '$user', '$order_status', '$payment_mode_id', '$subtotal')";

		$result_order = mysqli_query($conn, $sql_order);
		$counter++;

		if (!$result_order){
			$data = "Failed transaction.";
			// $sql = "SELECT * FROM tbl_products WHERE id = '$product_id'";
			// $result = mysqli_query($conn, $sql);
			// $prod_info = mysqli_fetch_assoc($result);
			// $prod_name = $prod_info['product_name'];
			$trans_data .= "Trasaction Failed error_501: " . $prod_name . "<br>" . mysqli_error($conn);

			$failed_attempt++;
			
			// rollback when unsuccessful
			mysqli_rollback($conn);

		}
		else {
			$data = "Success!";
			// $sql = "SELECT * FROM tbl_products WHERE id = '$product_id'";
			// $result = mysqli_query($conn, $sql);
			// $prod_info = mysqli_fetch_assoc($result);
			// $prod_name = $prod_info['product_name'];
			// $prod_price = $prod_info['price'];
			// $subtotal = $quantity * $prod_price;
			$trans_data = $prod_name . " qty:" . " " . $quantity. "x" . " " . "Successfully purchased!" . " ";

			mysqli_commit($conn);
			unset($_SESSION['cart'][$product_id]);
			$_SESSION["total_itemcount"] = array_sum($_SESSION["cart"]);
			$grandtotal += $subtotal;

		}

		$trans_data_update .= $trans_data;

	}

}

else {

	$data = 'ERROR:' . '<br>' . mysqli_error($conn) .'<br>' . 'Transaction failed';
}


if (strpos($trans_data_update, 'error_501') ) {
	if ($counter == $failed_attempt){
		echo $trans_data_update;
	}

	elseif ($counter > $failed_attempt){
	echo $trans_data_update;
	echo 'Some transactions failed! Your transaction no: ';
	echo $transno;
	echo ' ';
	echo date("Y-m-d G:i:s");

	}

}


else {
	echo $trans_data_update;
	echo 'Grand Total: ' . $grandtotal . ' ';
	echo 'Transaction Successful! Your transaction no: ';
	echo $transno;
	echo ' ';
	echo date("Y-m-d G:i:s");

}

mysqli_close($conn);

?>