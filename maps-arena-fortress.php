<?php session_start();?>
<?php 
 const TITLE = "Maps - Arena - Fortress";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>

<div class="bg-maps-topborder">
</div>

<div class="bg-maps">
<br>
	<div class="container">
	<!-- Container for Arena - Fortress start -->
	<div class="container bg-container-maps">
		<div class="map-img-caption">
			<h1>Arena Fortress</h1>
		</div>
		<div class="maps-hero-wrapper">
			<img class="img-fluid" src="assets/images/maps/arena-fortress/arena-fortress.jpg" title="Arena - Fortress" alt="Arena - Fortress">
		</div>

		<!-- div row for Monsters in Arena - Fortress start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablemonster">
					<h2>Monsters in Arena - Fortress</h2><span class="jumpbutton"> <a href="#tablenpc">(jump to NPCs)</a></span>
				</div>
				<div>
					<a href="maps.php"><i class="fas fa-arrow-left"></i> back to Maps</a>
				</div>
				<br>
				<div class="table-responsive">
					<table class="table table-striped mydatatable">
						<thead>
							<tr>
								<th scope="col" style="width: 33.3%;">Image</th>
								<th scope="col" style="width: 33.3%;">Name</th>
								<th scope="col" style="width: 33.3%;">Level</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/arena-fortress/arena-fortress-monsters/fortress_gaja.png" title="Fortress Gaja" alt="Fortress Gaja"></td>
								<td>Fortress Gaja</td>
								<td>90</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/arena-fortress/arena-fortress-monsters/fortress_manteli.png" title="Fortress Manteli" alt="Fortress Manteli"></td>
								<td>Fortress Manteli</td>
								<td>90</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/arena-fortress/arena-fortress-monsters/fortress_rada.png" title="Fortress Rada" alt="Fortress Rada"></td>
								<td>Fortress Rada</td>
								<td>90</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/arena-fortress/arena-fortress-monsters/kulra_sultan_general.png" title="Kulra Sultan General" alt="Kulra Sultan General"></td>
								<td>Kulra Sultan General</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/arena-fortress/arena-fortress-monsters/sultan_general.png" title="Sultan General" alt="Sultan General"></td>
								<td>Sultan General</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/arena-fortress/arena-fortress-monsters/japeta.png" title="Japeta" alt="Japeta"></td>
								<td>Japeta</td>
								<td>99</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- div row for Monsters in Arena - Fortress end -->

		<br>
		<br>

		<!-- div row for NPCs in Arena - Fortress start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablenpc">
					<h2>NPCs in Arena - Fortress</h2><span class="jumpbutton"> <a href="#tablemonster">(back to Monsters)</a></span>
				</div>
				<div>
					<a href="maps.php"><i class="fas fa-arrow-left"></i> back to Maps</a>
				</div>
				<br>
				<div class="table-responsive">
					<table class="table table-striped mydatatable">
						<thead>
							<tr>
								<th scope="col" style="width: 33.3%;">Image</th>
								<th scope="col" style="width: 33.3%;">Name</th>
								<th scope="col" style="width: 33.3%;">X/Y Coordinates</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/arena-fortress/arena-fortress-npc/duelist_kumar.png" title="Duelist Kumar" alt="Duelist Kumar"></td>
								<td>Duelist Kumar</td>
								<td>328 / 755</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/arena-fortress/arena-fortress-npc/fortress_civil_officer_azvaka.png" title="Fortress Civil Officer Azvaka" alt="Fortress Civil Officer Azvaka"></td>
								<td>Fortress Civil Officer Azvaka</td>
								<td>557 / 657</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/arena-fortress/arena-fortress-npc/fortress_civil_officer_dait.png" title="Fortress Civil Officer Dait" alt="Fortress Civil Officer Dait"></td>
								<td>Fortress Civil Officer Dait</td>
								<td>75 /758</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/arena-fortress/arena-fortress-npc/fortress_civil_officer_rastree.png" title="Fortress Civil Officer Rastree" alt="Fortress Civil Officer Rastree"></td>
								<td>Fortress Civil Officer Rastree</td>
								<td>265 / 466</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/arena-fortress/arena-fortress-npc/fortress_civil_officer_yantle.png" title="Fortress Civil Officer Yantle" alt="Fortress Civil Officer Yantle"></td>
								<td>Fortress Civil Officer Yantle</td>
								<td>367 / 950</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/arena-fortress/arena-fortress-npc/goods_salesman_kirata.png" title="Goods Salesman Kirata" alt="Goods Salesman Kirata"></td>
								<td>Goods Salesman Kirata</td>
								<td>275 / 465</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/arena-fortress/arena-fortress-npc/goods_salesman_potava.png" title="Goods Salesman Potava" alt="Goods Salesman Potava"></td>
								<td>Goods Salesman Potava</td>
								<td>74 / 743</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/arena-fortress/arena-fortress-npc/goods_salesman_ridi.png" title="Goods Salesman Ridi" alt="Goods Salesman Ridi"></td>
								<td>Goods Salesman Ridi</td>
								<td>556 / 665</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/arena-fortress/arena-fortress-npc/goods_salesman_saridi.png" title="Goods Salesman Saridi" alt="Goods Salesman Saridi"></td>
								<td>Goods Salesman Saridi</td>
								<td>335 / 949</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<br>
		<!-- div row for NPCs in Arena - Fortress end -->


	</div>
	<!-- Container for Arena - Fortress end -->
	</div>
<br>
</div>

<div class="bg-maps-footerborder">
</div>

<script type="text/javascript">
	$(document).ready(function(){
	    $('.mydatatable').DataTable({
	        "lengthMenu": [[10, 25, -1], [10, 25, "All"]]
	    });
	});
</script>


<?php require_once 'partials/footer.php'; ?>