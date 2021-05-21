<?php session_start();?>
<?php 
 const TITLE = "Maps - Biryu";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>

<div class="bg-maps-topborder">
</div>

<div class="bg-maps">
<br>
	<div class="container">

	<!-- Container for Biryu start -->
	<div class="container bg-container-maps">
		<div class="map-img-caption">
			<h1>Biryu</h1>
		</div>
		<div class="maps-hero-wrapper">
			<img class="img-fluid" src="assets/images/maps/biryu/biryu.jpg" title="Biryu" alt="Biryu">
		</div>

		<!-- div row for Monsters in Biryu start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablemonster">
					<h2>Monsters in Biryu</h2><span class="jumpbutton"> <a href="#tablenpc">(jump to NPCs)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/kaspa_saka.png" title="Kaspa Saka" alt="Kaspa Saka"></td>
								<td>Kaspa Saka</td>
								<td>75</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/skarakoro.png" title="Skarakoro" alt="Skarakoro"></td>
								<td>Skarakoro</td>
								<td>76</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/kaspa_minero.png" title="Kaspa Minero" alt="Kaspa Minero"></td>
								<td>Kaspa Minero</td>
								<td>77</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/soko.png" title="Soko" alt="Soko"></td>
								<td>Soko</td>
								<td>79</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/kaspa_konsa.png" title="Kaspa Konsa" alt="Kaspa Konsa"></td>
								<td>Kaspa Konsa</td>
								<td>80</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/lampara.png" title="Lampara" alt="Lampara"></td>
								<td>Lampara</td>
								<td>80</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/buchin.png" title="Buchin" alt="Buchin"></td>
								<td>Buchin</td>
								<td>80</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/chumsum.png" title="Chumsum" alt="Chumsum"></td>
								<td>Chumsum</td>
								<td>81</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/abi_konsa.png" title="Abi Konsa" alt="Abi Konsa"></td>
								<td>Abi Konsa</td>
								<td>82</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/bora.png" title="Bora" alt="Bora"></td>
								<td>Bora</td>
								<td>83</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/vatelya.png" title="Vatelya" alt="Vatelya"></td>
								<td>Vatelya</td>
								<td>85</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/wotelya.png" title="Wotelya" alt="Wotelya"></td>
								<td>Wotelya</td>
								<td>85</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/kaspa_patri.png" title="Kaspa Patri" alt="Kaspa Patri"></td>
								<td>Kaspa Patri (Boss)</td>
								<td>88</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/angul_general_kibyo.png" title="Angul General Kibyo" alt="Angul General Kibyo"></td>
								<td>Angul General Kibyo (Boss)</td>
								<td>94</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/angul_general_samurai.png" title="Angul General Samurai" alt="Angul General Samurai"></td>
								<td>Angul General Samurai (Boss)</td>
								<td>94</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/me.png" title="" alt=""></td>
								<td>Me (Boss)</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/angul_general_carreta.png" title="" alt=""></td>
								<td>Angul General Carreta (Boss)</td>
								<td>95</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/manthao.png" title="Manthao" alt="Manthao"></td>
								<td>Manthao</td>
								<td>200</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-monsters/gato.png" title="Gato" alt="Gato"></td>
								<td>Gato</td>
								<td>200</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- div row for Monsters in Biryu end -->

		<br>
		<br>

		<!-- div row for NPCs in Biryu start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablenpc">
					<h2>NPCs in Biryu</h2><span class="jumpbutton"> <a href="#tablemonster">(back to Monsters)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-npc/biryu_administrator_yasita.png" title="" alt=""></td>
								<td>Biryu Administrator Yasita</td>
								<td>359 / 686</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-npc/goods_salesman_mamoru.png" title="Goods Salesman Mamoru" alt="Goods Salesman Mamoru"></td>
								<td>Goods Salesman Mamoru</td>
								<td>453 / 473</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-npc/merchant_oda.png" title="Merchant Oda" alt="Merchant Oda"></td>
								<td>Merchant Oda</td>
								<td>351 / 579</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-npc/merchant_yuri.png" title="Merchant Yuri" alt="Merchant Yuri"></td>
								<td>Merchant Yuri</td>
								<td>480 / 363</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-npc/miner_yume.png" title="Miner Yume" alt="Miner Yume"></td>
								<td>Miner Yume</td>
								<td>482 / 361</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-npc/naoki.png" title="Naoki" alt="Naoki"></td>
								<td>Naoki</td>
								<td>859 / 114</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-npc/storekeeper_gubo.png" title="Storekeeper Gubo" alt="Storekeeper Gubo"></td>
								<td>Storekeeper Gubo</td>
								<td>515 / 480</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/biryu/biryu-npc/yut_nori_administrator_sato.png" title="Yut Nori Administrator Sato" alt="Yut Nori Administrator Sato"></td>
								<td>Yut Nori Administrator Sato</td>
								<td>661 / 397</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<br>
		<!-- div row for NPCs in Biryu end -->


	</div>
	<!-- Container for Biryu end -->
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