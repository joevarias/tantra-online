<?php session_start();?>
<?php 
 const TITLE = "Maps - Mandara";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>

<div class="bg-maps-topborder">
</div>

<div class="bg-maps">
<br>
	<div class="container">

	<!-- Container for Mandara start -->
	<div class="container bg-container-maps">
		<div class="map-img-caption">
			<h1>Mandara</h1>
		</div>
		<div class="maps-hero-wrapper">
			<img class="img-fluid" src="assets/images/maps/mandara/mandara.jpg" title="Mandara" alt="Mandara">
		</div>

		<!-- div row for Monsters in Mandara start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablemonster">
					<h2>Monsters in Mandara</h2><span class="jumpbutton"> <a href="#tablenpc">(jump to NPCs)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/vasabhum.png" title="Vasabhum" alt="Vasabhum"></td>
								<td>Vasabhum</td>
								<td>1</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/vasabhum_caura.png" title="Vasabhum Caura" alt="Vasabhum Caura"></td>
								<td>Vasabhum Caura</td>
								<td>3</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/bindu.png" title="Bindu" alt="Bindu"></td>
								<td>Bindu (Boss)</td>
								<td>3</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/mlecchas.png" title="Mlecchas" alt="Mlecchas"></td>
								<td>Mlecchas</td>
								<td>5</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/vasabhum_kulapra.png" title="Vasabhum Kulapra" alt="Vasabhum Kulapra"></td>
								<td>Vasabhum Kulapra</td>
								<td>7</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/mlecchas_caura.png" title="Mlecchas Caura" alt="Mlecchas Caura"></td>
								<td>Mlecchas Caura</td>
								<td>9</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/yena.png" title="" alt=""></td>
								<td>Yena (Boss)</td>
								<td>9</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/vrca.png" title="Vrca" alt="Vrca"></td>
								<td>Vrca</td>
								<td>11</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/mlecchas_karmana.png" title="Mlecchas Karmana" alt="Mlecchas Karmana"></td>
								<td>Mlecchas Karmana</td>
								<td>11</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/vrca_dara.png" title="Vrca Dara" alt="Vrca Dara"></td>
								<td>Vrca Dara</td>
								<td>13</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/varaha.png" title="" alt=""></td>
								<td>Varaha</td>
								<td>15</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/boa.png" title="Boa" alt="Boa"></td>
								<td>Boa</td>
								<td>15</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/mawei.png" title="Mawei" alt="Mawei"></td>
								<td>Mawei (Boss)</td>
								<td>15</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/varaha_raja.png" title="Varaha Raja" alt="Varaha Raja"></td>
								<td>Varaha Raja</td>
								<td>17</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/saara_vrca.png" title="Saraa Vrca" alt="Saraa Vrca"></td>
								<td>Saraa Vrca</td>
								<td>17</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/aprah_varaha_raja.png" title="Aprah Varaha Raja" alt="Aprah Varaha Raja"></td>
								<td>Aprah Varaha Raja</td>
								<td>19</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/asidra.png" title="Asidra" alt="Asidra"></td>
								<td>Asidra (Boss)</td>
								<td>19</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/srbinda.png" title="Srbinda" alt="Srbinda"></td>
								<td>Srbinda</td>
								<td>21</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/naroma.png" title="Naroma" alt="Naroma"></td>
								<td>Naroma (Boss)</td>
								<td>21</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/srbinda_satvan.png" title="Srbinda Satvan" alt="Srbinda Satvan"></td>
								<td>Srbinda Satvan</td>
								<td>23</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-monsters/libertine.png" title="Libertine" alt="Libertine"></td>
								<td>Libertine</td>
								<td>55</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- div row for Monsters in Mandara end -->

		<br>
		<br>

		<!-- div row for NPCs in Mandara start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablenpc">
					<h2>NPCs in Mandara</h2><span class="jumpbutton"> <a href="#tablemonster">(back to Monsters)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-npc/anjali.png" title="Anjali" alt="Anjali"></td>
								<td>Anjali</td>
								<td>515 / 190</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-npc/blacksmith_vartan.png" title="Blacksmith Vartan" alt="Blacksmith Vartan"></td>
								<td>Blacksmith Vartan</td>
								<td>547 / 142</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-npc/craftsman_kirika.png" title="Craftsman Kirika" alt="Craftsman Kirika"></td>
								<td>Craftsman Kirika</td>
								<td>553 / 142</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-npc/defense_general_apvas.png" title="Defense General Apvas" alt="Defense General Apvas"></td>
								<td>Defense General Apvas</td>
								<td>485 / 250</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-npc/drunkard.png" title="Drunkard" alt="Drunkard"></td>
								<td>Drunkard</td>
								<td>463 / 108</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-npc/hajit.png" title="Hajit" alt="Hajit"></td>
								<td>Hajit</td>
								<td>512 / 192</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-npc/horseman_rahul.png" title="Horseman Rahul" alt="Horseman Rahul"></td>
								<td>Horseman Rahul</td>
								<td>546 / 111</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-npc/jeweler_ashuri.png" title="Jeweler Ashuri" alt="Jeweler Ashuri"></td>
								<td>Jeweler Ashuri</td>
								<td>539 / 142</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-npc/memory_maiden.png" title="Memory Maiden" alt="Memory Maiden"></td>
								<td>Memory Maiden</td>
								<td>491 / 178</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-npc/pharmacist_karan.png" title="" alt=""></td>
								<td>Pharmacist Karan</td>
								<td>531 / 142</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-npc/security_soldier_abhei.png" title="Security Soldier Abhei" alt="Security Soldier Abhei"></td>
								<td>Security Soldier Abhei</td>
								<td>481 / 275</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-npc/security_soldier_badru.png" title="Security Soldier Badru" alt="Security Soldier Badru"></td>
								<td>Security Soldier Badru</td>
								<td>900 / 200</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-npc/security_soldier_kumar.png" title="Security Soldier Kumar" alt="Security Soldier Kumar"></td>
								<td>Security Soldier Kumar</td>
								<td>497 / 275</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/mandara/mandara-npc/tradesman_buvan.png" title="Tradesman Buvan" alt="Tradesman Buvan"></td>
								<td>Tradesman Buvan</td>
								<td>414 / 117</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<br>
		<!-- div row for NPCs in Mandara end -->
		

	</div>
	<!-- Container for Mandara end -->
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