<?php session_start();?>
<?php 
 const TITLE = "Maps - Forge";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>

<div class="bg-maps-topborder">
</div>

<div class="bg-maps">
<br>
	<div class="container">

	<!-- Container for Forge start -->
	<div class="container bg-container-maps">
		<div class="map-img-caption">
			<h1>Forge</h1>
		</div>
		<div class="maps-hero-wrapper">
			<img class="img-fluid" src="assets/images/maps/forge/forge.jpg"title="Forge" alt="Forge">
		</div>

		<!-- div row for Monsters in Forge start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablemonster">
					<h2>Monsters in Forge</h2><span class="jumpbutton"> <a href="#tablenpc">(jump to NPCs)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/antuan.png" title="Antuan" alt="Antuan"></td>
								<td>Antuan (Miniboss)</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/arun.png" title="Arun" alt="Arun"></td>
								<td>Arun</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/bena_kaspa.png" title="Bena Kaspa" alt="Bena Kaspa"></td>
								<td>Bena Kaspa</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/bena_zaku.png" title="Bena Zaku" alt="Bena Zaku"></td>
								<td>Bena Zaku</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/dhara.png" title="Dhara" alt="Dhara"></td>
								<td>Dhara (Miniboss)</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/graha.png" title="Graha" alt="Graha"></td>
								<td>Graha (Miniboss)</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/jangman.png" title="Jangman" alt="Jangman"></td>
								<td>Jangman (Miniboss)</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/jutis.png" title="Jutis" alt="Jutis"></td>
								<td>Jutis (Miniboss)</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/kasani.png" title="Kasani" alt="Kasani"></td>
								<td>Kasani (Miniboss)</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/kumba.png" title="Kumba" alt="Kumba"></td>
								<td>Kumba (Miniboss)</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/mastasara.png" title="Mastasara" alt="Mastasara"></td>
								<td>Mastasara (Miniboss)</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/porkar.png" title="Porkar" alt="Porkar"></td>
								<td>Porkar (Miniboss)</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/raal.png" title="Raal" alt="Raal"></td>
								<td>Raal (Miniboss)</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/ram.png" title="Ram" alt="Ram"></td>
								<td>Ram</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/vrta_kaspa.png" title="Vrta Kaspa" alt="Vrta Kaspa"></td>
								<td>Vrta Kaspa</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/vrta_mlecchas.png" title="Vrta Mlecchas" alt="Vrta Mlecchas"></td>
								<td>Vrta Mlecchas</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/vrta_ulkamukha.png" title="Vrta Ulkamukha" alt="Vrta Ulkamukha"></td>
								<td>Vrta Ulkamukha</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/vrta_zaku.png" title="Vrta Zaku" alt="Vrta Zaku"></td>
								<td>Vrta Zaku</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/cenyn.png" title="Cenyn" alt="Cenyn"></td>
								<td>Cenyn</td>
								<td>110</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/himunchan.png" title="Himunchan" alt="Himunchan"></td>
								<td>Himunchan</td>
								<td>110</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/rashama.png" title="Rashama" alt="Rashama"></td>
								<td>Rashama</td>
								<td>110</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/shivanite.png" title="Shivanite" alt="Shivanite"></td>
								<td>Shivanite</td>
								<td>110</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/forge/forge-monsters/asuramaya.png" title="Asuramaya" alt="Asuramaya"></td>
								<td>Asuramaya</td>
								<td>135</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- div row for Monsters in Forge end -->

		<br>
		<br>

		<!-- div row for NPCs in Forge start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablenpc">
					<h2>NPCs in Forge</h2><span class="jumpbutton"> <a href="#tablemonster">(back to Monsters)</a></span>
				</div>
				<div>
					<a href="maps.php"><i class="fas fa-arrow-left"></i> back to Maps</a>
				</div>
				<br>

				<p class="nonpcfound">There is no NPC in Forge</p>
			</div>
		</div>
		<br>
		<!-- div row for NPCs in Forge end -->


	</div>
	<!-- Container for Forge end -->
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