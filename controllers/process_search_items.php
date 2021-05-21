<?php  
	require_once 'connect.php';

	$word = mysqli_real_escape_string($conn, $_POST['word']);


	$sql = "SELECT * FROM tbl_products WHERE product_name LIKE '%$word%'";

	$data = "";

	$result = mysqli_query($conn, $sql);

	$count = mysqli_num_rows($result);

		if($count>0){

			while($row = mysqli_fetch_assoc($result)){
				echo 
				"<div class ='col-md-4 products'>
		    		<div class ='card mall-card'>
		    			<div class='body'>
		    				<p class ='card item-name text-center'><img src='$row[img_path]' class='mx-auto'> $row[product_name]</p>
		    				<p class='text-center item-price'>₱$row[price]</p>
		    				<pre class='card-text m-1'>
		    				$row[description]</pre>

		    			</div>
		    			<div class='card-footer'>
		    				<input type='number' class='form-control mb-2 text-center' min='1' placeholder='Enter Quantity' id='quantity$row[id]' onkeyup='addToCartItem(event,$row[id])'>
		    				<button class='btn btn-block btn-primary add-to-cart' onclick='addToCart($row[id])' id='btn_cart$row[id]'>Add to cart</button>
		    			</div>
		    		</div>
	    		</div>";
			}

		}
		else {
			$data = "<div class ='col-12'>No Records Found!</div>";
		}

	echo $data;
	
	mysqli_close($conn);
?>