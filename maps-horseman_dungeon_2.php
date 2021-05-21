<?php session_start();?>
<?php 
 const TITLE = "Maps - Horseman Dungeon 2";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>

<div class="bg-maps-topborder">
</div>

<div class="bg-maps">
<br>
	<div class="container">

	<!-- Container for Horseman Dungeon 2 start -->
	<div class="container bg-container-maps">
		<div class="map-img-caption">
			<h1>Horseman Dungeon 2</h1>
		</div>
		<div class="maps-hero-wrapper">
			<img class="img-fluid" src="assets/images/maps/horseman_dungeon_2/horseman_dungeon_2.jpg" title="Horseman Dungeon 2" alt="Horseman Dungeon 2">
		</div>

		<!-- div row for Monsters in Horseman Dungeon 2 start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablemonster">
					<h2>Monsters in Horseman Dungeon 2</h2><span class="jumpbutton"> <a href="#tablenpc">(jump to NPCs)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_2/horseman_dungeon_2-monsters/sarpa_raja.png" title="Sarpa Raja" alt="Sarpa Raja"></td>
								<td>Sarpa Raja</td>
								<td>36</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_2/horseman_dungeon_2-monsters/rdhuni.png" title="Rdhuni" alt="Rdhuni"></td>
								<td>Rdhuni</td>
								<td>36</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_2/horseman_dungeon_2-monsters/visatula.png" title="Visatula" alt="Visatula"></td>
								<td>Visatula</td>
								<td>38</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_2/horseman_dungeon_2-monsters/visatula_caura.png" title="Visatula Caura" alt="Visatula Caura"></td>
								<td>Visatula Caura</td>
								<td>40</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_2/horseman_dungeon_2-monsters/pisaci.png" title="Pisaci" alt="Pisaci"></td>
								<td>Pisaci</td>
								<td>42</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_2/horseman_dungeon_2-monsters/uppari.png" title="Uppari" alt="Uppari"></td>
								<td>Uppari</td>
								<td>42</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_2/horseman_dungeon_2-monsters/pisaci_caura.png" title="Pisaci Caura" alt="Pisaci Caura"></td>
								<td>Pisaci Caura</td>
								<td>42</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_2/horseman_dungeon_2-monsters/nagamudra_hima.png" title="Nagamudra Hima" alt="Nagamudra Hima"></td>
								<td>Nagamudra Hima</td>
								<td>70</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<br>
		<br>

		<!-- div row for Monsters in Horseman Dungeon 2 end -->


		<!-- div row for NPCs in Horseman Dungeon 2 start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablenpc">
					<h2>NPCs in Horseman Dungeon 2</h2><span class="jumpbutton"> <a href="#tablemonster">(back to Monsters)</a></span>
				</div>
				<div>
					<a href="maps.php"><i class="fas fa-arrow-left"></i> back to Maps</a>
				</div>
				<br>
				<p class="nonpcfound">There is no NPC in Horseman Dungeon 2</p>
			</div>
		</div>
		<br>
		<!-- div row for NPCs in Horseman Dungeon 2 end -->

	</div>

	<!-- Container for Horseman Dungeon 2 end -->
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