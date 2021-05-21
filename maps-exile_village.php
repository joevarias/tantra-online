<?php session_start();?>
<?php 
 const TITLE = "Maps - Exile Village";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>

<div class="bg-maps-topborder">
</div>

<div class="bg-maps">
<br>
	<div class="container">

	<!-- Container for Exile Village start -->
	<div class="container bg-container-maps">
		<div class="map-img-caption">
			<h1>Village of the Outcast</h1>
		</div>
		<div class="maps-hero-wrapper">
			<img class="img-fluid" src="assets/images/maps/exile_village/exile_village.jpg" title="Exile Village" alt="Exile Village">
		</div>

		<!-- div row for Monsters in exile_village start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablemonster">
					<h2>Monsters in Exile Village</h2><span class="jumpbutton"> <a href="#tablenpc">(jump to NPCs)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-monsters/ban_zangkun.png" title="Ban Zangkun" alt="Ban Zangkun"></td>
								<td>Ban Zangkun</td>
								<td>70</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-monsters/zonbu.png" title="Zonbu" alt="Zonbu"></td>
								<td>Zonbu</td>
								<td>72</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-monsters/nayavasan.png" title="Nayavasan" alt="Nayavasan"></td>
								<td>Nayavasan (Boss)</td>
								<td>72</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-monsters/baoku.png" title="Baoku" alt="Baoku"></td>
								<td>Baoku</td>
								<td>74</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-monsters/ban_dopang.png" title="Ban Dopang" alt="Ban Dopang"></td>
								<td>Ban Dopang</td>
								<td>75</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-monsters/samuyata.png" title="Samuyata" alt="Samuyata"></td>
								<td>Samuyata (Boss)</td>
								<td>75</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-monsters/bongbo.png" title="Bongbo" alt="Bongbo"></td>
								<td>Bongbo</td>
								<td>76</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-monsters/sukam.png" title="Sukam" alt="Sukam"></td>
								<td>Sukam (Boss)</td>
								<td>76</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-monsters/yakku.png" title="Yakku" alt="Yakku"></td>
								<td>Yakku</td>
								<td>78</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-monsters/yomrabyang.png" title="Yomrabyang" alt="Yomrabyang"></td>
								<td>Yomrabyang</td>
								<td>80</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-monsters/gatva.png" title="Gatva" alt="Gatva"></td>
								<td>Gatva</td>
								<td>80</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- div row for Monsters in Exile Village end -->

		<br>
		<br>

		<!-- div row for NPCs in Exile Village start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablenpc">
					<h2>NPCs in Exile Village</h2><span class="jumpbutton"> <a href="#tablemonster">(back to Monsters)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-npc/discipling_monk_ryuzshun.png" title="Discipling Monk Ryuzshun" alt="Discipling Monk Ryuzshun"></td>
								<td>Discipling Monk Ryuzshun</td>
								<td>676 / 798</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-npc/discipling_monk_usong.png" title="Discipling Monk Usong" alt="Discipling Monk Usong"></td>
								<td>Discipling Monk Usong</td>
								<td>410 / 816</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-npc/elder_haiddungddashu.png" title="" alt=""></td>
								<td>Elder Haiddungddashu</td>
								<td>539 / 661</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-npc/farmer_shunongs.png" title="Farmer Shunongs" alt="Farmer Shunongs"></td>
								<td>Farmer Shunongs</td>
								<td>450 / 814</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-npc/goods_salesman_ryupuwei.png" title="Goods Salesman Ryupuwei" alt="Goods Salesman Ryupuwei"></td>
								<td>Goods Salesman Ryupuwei</td>
								<td>614 / 874</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-npc/maid_ssunalang.png" title="Maid Ssunalang" alt="Maid Ssunalang"></td>
								<td>Maid Ssunalang</td>
								<td>622 / 818</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-npc/memory_maiden.png" title="Memory Maiden" alt="Memory Maiden"></td>
								<td>Memory Maiden</td>
								<td>540 / 782</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/exile_village/exile_village-npc/storekeeper_borer.png" title="Storekeeper Borer" alt="Storekeeper Borer"></td>
								<td>Storekeeper Borer</td>
								<td>500 / 862</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<br>
		<!-- div row for NPCs in Exile Village end -->

	</div>
	<!-- Container for Exile Village end -->
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