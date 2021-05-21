<?php session_start();?>
<?php 
 const TITLE = "Maps - Mudha Dungeon";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>

<div class="bg-maps-topborder">
</div>

<div class="bg-maps">
<br>
	<div class="container">

	<!-- Container for Mudha Dungeon start -->
	<div class="container bg-container-maps">
		<div class="map-img-caption">
			<h1>Mudha Dungeon</h1>
		</div>
		<div class="maps-hero-wrapper">
			<img class="img-fluid" src="assets/images/maps/mudha_dungeon/mudha_dungeon.jpg" title="Mudha Dungeon" alt="Mudha Dungeon">
		</div>

		<!-- div row for Monsters in Mudha Dungeon start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablemonster">
					<h2>Monsters in Mudha Dungeon</h2><span class="jumpbutton"> <a href="#tablenpc">(jump to NPCs)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/akusra.png" title="Akusra" alt="Akusra"></td>
								<td>Akusra</td>
								<td>80</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/akusra_of_strength.png" title="Akusra Of Strength" alt="Akusra Of Strength"></td>
								<td>Akusra Of Strength</td>
								<td>80</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/akusra_of_will.png" title="Akusra of Will" alt="Akusra of Will"></td>
								<td>Akusra of Will</td>
								<td>80</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/butu.png" title="Butu" alt="Butu"></td>
								<td>Butu</td>
								<td>84</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/hadi.png" title="Hadi" alt="Hadi"></td>
								<td>Hadi</td>
								<td>85</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/kapa_karki.png" title="Kapa Karki" alt="Kapa Karki"></td>
								<td>Kapa Karki</td>
								<td>85</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/kruta_karki.png" title="Kruta Karki" alt="Kruta Karki"></td>
								<td>Kruta Karki</td>
								<td>85</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/makara.png" title="Makara" alt="Makara"></td>
								<td>Makara</td>
								<td>85</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/sunta.png" title="Sunta" alt="Sunta"></td>
								<td>Sunta</td>
								<td>85</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/ara_karki.png" title="Ara Karki" alt="Ara Karki"></td>
								<td>Ara Karki</td>
								<td>86</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/atuhi_karakra.png" title="Atuhi Karakra" alt="Atuhi Karakra"></td>
								<td>Atuhi Karakra</td>
								<td>86</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/so_karki.png" title="So Karki" alt="So Karki"></td>
								<td>So Karki</td>
								<td>86</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/masan.png" title="Masan" alt="Masan"></td>
								<td>Masan</td>
								<td>87</td>
							</tr>
							
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/golem.png" title="Golem" alt="Golem"></td>
								<td>Golem</td>
								<td>88</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/chandi_asura.png" title="Chandi Asura" alt="Chandi Asura"></td>
								<td>Chandi Asura</td>
								<td>90</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/chandi_gandharva.png" title="Chandi Gandharva" alt="Chandi Gandharva"></td>
								<td>Chandi Gandharva</td>
								<td>90</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/chandi_garuda.png" title="Chandi Garuda" alt="Chandi Garuda"></td>
								<td>Chandi Garuda</td>
								<td>90</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/chandi_naga.png" title="Chandi Naga" alt="Chandi Naga"></td>
								<td>Chandi Naga</td>
								<td>90</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/chinchana.png" title="Chinchana" alt="Chinchana"></td>
								<td>Chinchana (Boss)</td>
								<td>93</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/damunchana.png" title="Damunchana" alt="Damunchana"></td>
								<td>Damunchana (Boss)</td>
								<td>93</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/jigunchana.png" title="Jigunchana" alt="Jigunchana"></td>
								<td>Jigunchana (Boss)</td>
								<td>93</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/kramunchana.png" title="Kramunchana" alt="Kramunchana"></td>
								<td>Kramunchana (Boss)</td>
								<td>93</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/churima.png" title="Churima" alt="Churima"></td>
								<td>Churima</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-monsters/ananga.png" title="Cali" alt="Cali"></td>
								<td>Cali (Boss)</td>
								<td>99</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- div row for Monsters in Mudha Dungeon end -->

		<br>
		<br>

		<!-- div row for NPCs in Mudha Dungeon start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablenpc">
					<h2>NPCs in Mudha Dungeon</h2><span class="jumpbutton"> <a href="#tablemonster">(back to Monsters)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-npc/baruna.png" title="Baruna" alt="Baruna"></td>
								<td>Baruna</td>
								<td>894 / 879</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mudha_dungeon/mudha_dungeon-npc/darksa.png" title="Darksa" alt="Darksa"></td>
								<td>Darksa</td>
								<td>922 / 915</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<br>
		<!-- div row for NPCs in Mudha Dungeon end -->


	</div>
	<!-- Container for Mudha Dungeon end -->
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