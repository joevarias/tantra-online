<?php session_start();?>
<?php 
 const TITLE = "Maps - Chaturanga";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>

<div class="bg-maps-topborder">
</div>

<div class="bg-maps">
<br>
	<div class="container">

	<!-- Container for Chaturanga start -->
	<div class="container bg-container-maps">
		<div class="map-img-caption">
			<h1>Chaturanga</h1>
		</div>
		<div class="maps-hero-wrapper">
			<img class="img-fluid" src="assets/images/maps/chaturanga/chaturanga.jpg" title="Chaturanga" alt="Chaturanga">
		</div>

		<!-- div row for Monsters in Chaturanga start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablemonster">
					<h2>Monsters in Chaturanga</h2><span class="jumpbutton"> <a href="#tablenpc">(jump to NPCs)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/chaturanga/chaturanga-monsters/kokabung.png" title="Kokabung" alt="Kokabung"></td>
								<td>Kokabung</td>
								<td>92</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/chaturanga/chaturanga-monsters/buksakbyo.png" title="Buksakbyo" alt="Buksakbyo"></td>
								<td>Buksakbyo</td>
								<td>92</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/chaturanga/chaturanga-monsters/unkyu_kabiong.png" title="Unkyu Kabiong" alt="Unkyu Kabiong"></td>
								<td>Unkyu Kabiong</td>
								<td>94</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/chaturanga/chaturanga-monsters/kumkyu_kabiong.png" title="Kumkyu Kabiong" alt="Kumkyu Kabiong"></td>
								<td>Kumkyu Kabiong</td>
								<td>96</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/chaturanga/chaturanga-monsters/bubyo.png" title="Bubyo" alt="Bubyo"></td>
								<td>Bubyo (Boss)</td>
								<td>98</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/chaturanga/chaturanga-monsters/komubyo.png" title="" alt=""></td>
								<td>Komubyo</td>
								<td>98</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/chaturanga/chaturanga-monsters/kibyo.png" title="Kibyo" alt="Kibyo"></td>
								<td>Kibyo (Boss)</td>
								<td>100</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/chaturanga/chaturanga-monsters/zonchabiong.png" title="Zonchabiong" alt="Zonchabiong"></td>
								<td>Zonchabiong (Boss)</td>
								<td>102</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/chaturanga/chaturanga-monsters/sangbyo.png" title="Sangbyo" alt="Sangbyo"></td>
								<td>Sangbyo (Boss)</td>
								<td>104</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/chaturanga/chaturanga-monsters/byonmu.png" title="Byonmu" alt="Byonmu"></td>
								<td>Byonmu (Boss)</td>
								<td>105</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/chaturanga/chaturanga-monsters/raphu_kibyo.png" title="Raphu Kibyo" alt="Raphu Kibyo"></td>
								<td>Raphu Kibyo (Boss)</td>
								<td>138</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/chaturanga/chaturanga-monsters/raphu.png" title="Raphu" alt="Raphu"></td>
								<td>Raphu (Boss)</td>
								<td>138</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- div row for Monsters in Chaturanga end -->

		<br>
		<br>

		<!-- div row for NPCs in Chaturanga start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablenpc">
					<h2>NPCs in Chaturanga</h2><span class="jumpbutton"> <a href="#tablemonster">(back to Monsters)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/chaturanga/chaturanga-npc/vadapaz_irina.png" title="Vadapaz Irina" alt="Vadapaz Irina"></td>
								<td>Vadapaz Irina</td>
								<td>191 / 886</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/chaturanga/chaturanga-npc/vadavid_irina.png" title="Vadavid Irina" alt="Vadavid Irina"></td>
								<td>Vadavid Irina</td>
								<td>758 / 831</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/chaturanga/chaturanga-npc/wootpaz_irina.png" title="Wootpaz Irina" alt="Wootpaz Irina"></td>
								<td>Wootpaz Irina</td>
								<td>137 / 320</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/chaturanga/chaturanga-npc/wootpbiz_irina.png" title="Wootpbiz Irina" alt="Wootpbiz Irina"></td>
								<td>Wootpbiz Irina</td>
								<td>703 / 265</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<br>
		<!-- div row for NPCs in Chaturanga end -->


	</div>
	<!-- Container for Chaturanga end -->
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