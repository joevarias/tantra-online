<?php session_start();?>
<?php 
 const TITLE = "Maps - Kruma";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>

<div class="bg-maps-topborder">
</div>

<div class="bg-maps">
<br>
	<div class="container">

	<!-- Container for Kruma start -->
	<div class="container bg-container-maps">
		<div class="map-img-caption">
			<h1>Kruma</h1>
		</div>
		<div class="maps-hero-wrapper">
			<img class="img-fluid" src="assets/images/maps/kruma/kruma.jpg" title="Kruma" alt="Kruma">
		</div>

		<!-- div row for Monsters in Kruma start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablemonster">
					<h2>Monsters in Kruma</h2><span class="jumpbutton"> <a href="#tablenpc">(jump to NPCs)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/kruma/kruma-monsters/brahma_ashi_avara.png" title="Brahma Ashi Avara" alt="Brahma Ashi Avara"></td>
								<td>Brahma Ashi Avara</td>
								<td>200</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/kruma/kruma-monsters/brahma_kapa_avara.png" title="Brahma Kapa Avara" alt="Brahma Kapa Avara"></td>
								<td>Brahma Kapa Avara</td>
								<td>23</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/kruma/kruma-monsters/shiva_ashi_avara.png" title="Shiva Ashi Avar" alt="Shiva Ashi Avar"></td>
								<td>Shiva Ashi Avara</td>
								<td>200</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/kruma/kruma-monsters/shiva_kapa_avara.png" title="Shiva Kapa Avara" alt="Shiva Kapa Avara"></td>
								<td>Shiva Kapa Avara</td>
								<td>200</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/kruma/kruma-monsters/vishnu_ashi_avara.png" title="Vishnu Ashi Avara" alt="Vishnu Ashi Avara"></td>
								<td>Vishnu Ashi Avara</td>
								<td>200</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/kruma/kruma-monsters/vishnu_kapa_avara.png" title="Vishnu Kapa Avara" alt="Vishnu Kapa Avara"></td>
								<td>Vishnu Kapa Avara</td>
								<td>200</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- div row for Monsters in Kruma end -->

		<br>
		<br>

		<!-- div row for NPCs in Kruma start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablenpc">
					<h2>NPCs in Kruma</h2><span class="jumpbutton"> <a href="#tablemonster">(back to Monsters)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/kruma/kruma-npc/brahman_memory_maiden.png" title="Brahman Memory Maiden" alt="Brahman Memory Maiden"></td>
								<td>Brahman Memory Maiden</td>
								<td>652 / 129</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/kruma/kruma-npc/shivan_memory_maiden.png" title="Shivan Memory Maiden" alt="Shivan Memory Maiden"></td>
								<td>Shivan Memory Maiden</td>
								<td>58 / 305</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/kruma/kruma-npc/storekeeper_dungshan.png" title="Storekeeper Dungshan" alt="Storekeeper Dungshan"></td>
								<td>Storekeeper Dungshan</td>
								<td>483 / 780</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/kruma/kruma-npc/storekeeper_mengjao.png" title="Storekeeper Mengjao" alt="Storekeeper Mengjao"></td>
								<td>Storekeeper Mengjao</td>
								<td>77 / 305</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/kruma/kruma-npc/storekeeper_ruhu.png" title="Storekeeper Ruhu" alt="Storekeeper Ruhu"></td>
								<td>Storekeeper Ruhu</td>
								<td>652 / 149</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/kruma/kruma-npc/supply_salesman_diankao.png" title="" alt=""></td>
								<td>Supply Salesman Diankao</td>
								<td>652 / 117</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/kruma/kruma-npc/supply_salesman_huryaoh.png" title="Supply Salesman Huryaoh" alt="Supply Salesman Huryaoh"></td>
								<td>Supply Salesman Huryaoh</td>
								<td>46 / 305</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/kruma/kruma-npc/supply_salesman_meng_tong.png" title="Supply Salesman Meng Tong" alt="Supply Salesman Meng Tong"></td>
								<td>Supply Salesman Meng Tong</td>
								<td>483 / 813</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/kruma/kruma-npc/vishnu_memory_maiden.png" title="Vishnu Memory Maiden" alt="Vishnu Memory Maiden"></td>
								<td>Vishnu Memory Maiden</td>
								<td>483 / 801</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<br>
		<!-- div row for NPCs in Kruma end -->


	</div>
	<!-- Container for Kruma end -->
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