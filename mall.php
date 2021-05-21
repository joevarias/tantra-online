<?php session_start();?>
<?php 
 const TITLE = "Mall";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>
<?php

	$_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];

?>

<div class="bg-mall-topborder">
</div>

<div class="bg-mall">
<div class="bg-mall-overlay">
<article>
	<!-- Mall Page Contents -->

	<div class="container">
		<h1 class="text-center">Item Mall</h1>
 		<?php
 		if (isset($_SESSION['total_itemcount']) && $_SESSION['total_itemcount']>0) {
	 		
	 		echo "<p class='text-center tomycart'><a href='cart.php'>(go to <span class='append-cart-change'><i class='fas fa-shopping-cart'></i>Cart) <span class='badge badge-primary'>" . $_SESSION['total_itemcount'] . "</span>"."</span></a></p>";
 		}
 		else {
 			echo "<p class='text-center tomycart'><a href='cart.php'>(go to <span class='append-cart-change'><i class='fas fa-shopping-cart'></i>Cart)</span></a></p>";
 		}
 		?>

		<div class="row">

			<!-- start Categories -->
			<div class="col-lg-3">
				<h1 class="bg-white text-center"></h1>
					<div class="list-group mt-4 mb-1">
						<a href='#' class='list-group-item' onclick='showItemsAll()'>All</a>
						
						
					</div>
					<div class="list-group">
						<?php
	      	 			require "controllers/connect.php";
	      	 			$sql = "SELECT * FROM tbl_product_categories";
	      	 			$result = mysqli_query($conn, $sql);
	      	 			if(mysqli_num_rows($result)>0) {
	      	 				while($row = mysqli_fetch_assoc($result)){
	      	 					echo "<a href='#' class='list-group-item' onclick='showByCategories($row[id])'>$row[category_name] </a>";
	      	 				}
						
						}
					mysqli_close($conn);
	      	 		?>
					</div>
			</div>
			<!-- End Categories -->
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-8 input-group my-3">
						<input class="form-control" type="text" placeholder="Search for item..." id="product_search">
						<button class="input-group-append px-3 btn btn-primary" onclick="searchProduct()">Search</button>
					</div>
					<div class="col-lg-4">
					</div>
				</div>
				<div class="row" id="products">
				<?php 
			  	 	require "controllers/connect.php";

				    $sql = "SELECT * FROM tbl_products"; 
				    $result = mysqli_query($conn, $sql);
				    if(mysqli_num_rows($result) > 0){
				    	while ($row = mysqli_fetch_assoc($result)) {
				    	
				    		echo 
				    			"<div class ='col-md-4 products'>
						    		<div class ='card mall-card'>
						    			<div class='body'>
						    				<p class ='card item-name text-center'><img src='$row[img_path]' class='mx-auto'> $row[product_name]</p>
						    				<p class='text-center item-price'>₱$row[price]</p>
						    				<pre class='card-text m-1' id='desc$row[id]'>
						    				$row[description]</pre>

						    			</div>
						    			<div class='card-footer'>
						    				<input type='number' class='form-control mb-2 text-center' min='1' placeholder='Enter Quantity' id='quantity$row[id]' onkeyup='addToCartEnter(event,$row[id])'>
						    				<button class='btn btn-block btn-primary add-to-cart' onclick='addToCart($row[id])' id='btn_cart$row[id]'>Add to cart</button>
						    			</div>
						    		</div>
					    		</div>";
					    		
				    	}
				    }
   				mysqli_close($conn);
				?>
				</div>
			</div>
		</div>
	</div>
</article>

<br>
</div>
</div>

<div class="bg-mall-footerborder">
</div>

<?php require_once 'partials/footer.php'; ?>