<?php session_start();?>
<?php 
 const TITLE = "Maps - Shambala Dungeon 1";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>

<div class="bg-maps-topborder">
</div>

<div class="bg-maps">
<br>
	<div class="container">

	<!-- Container for Shambala Dungeon 1 start -->
	<div class="container bg-container-maps">
		<div class="map-img-caption">
			<h1>Shambala Dungeon 1</h1>
		</div>
		<div class="maps-hero-wrapper">
			<img class="img-fluid" src="assets/images/maps/shambala_dungeon_1/shambala_dungeon_1.jpg" title="Shambala Dungeon 1" alt="Shambala Dungeon 1">
		</div>

		<!-- div row for Monsters in Shambala Dungeon 1 start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablemonster">
					<h2>Monsters in Shambala Dungeon 1</h2><span class="jumpbutton"> <a href="#tablenpc">(jump to NPCs)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/shambala_dungeon_1/shambala_dungeon_1-monsters/zarku.png" title="Zarku" alt="Zarku"></td>
								<td>Zarku</td>
								<td>40</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala_dungeon_1/shambala_dungeon_1-monsters/zarku_rudhira.png" title="Zarku Rudhira" alt="Zarku Rudhira"></td>
								<td>Zarku Rudhira</td>
								<td>42</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala_dungeon_1/shambala_dungeon_1-monsters/ghorayogi.png" title="Ghorayogi" alt="Ghorayogi"></td>
								<td>Ghorayogi</td>
								<td>44</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala_dungeon_1/shambala_dungeon_1-monsters/nagamudra.png" title="Nagamudra" alt="Nagamudra"></td>
								<td>Nagamudra</td>
								<td>46</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala_dungeon_1/shambala_dungeon_1-monsters/bumi.png" title="Bumi" alt="Bumi"></td>
								<td>Bumi (Boss)</td>
								<td>48</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala_dungeon_1/shambala_dungeon_1-monsters/arzuna.png" title="Arzuna" alt="Arzuna"></td>
								<td>Arzuna (Boss)</td>
								<td>50</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala_dungeon_1/shambala_dungeon_1-monsters/murddi.png" title="Murddi" alt="Murddi"></td>
								<td>Murddi (Boss)</td>
								<td>52</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- div row for Monsters in Shambala Dungeon 1 end -->


		<!-- div row for NPCs in Shambala Dungeon 1 start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablenpc">
					<h2>NPCs in Shambala Dungeon 1</h2><span class="jumpbutton"> <a href="#tablemonster">(back to Monsters)</a></span>
				</div>
				<div>
					<a href="maps.php"><i class="fas fa-arrow-left"></i> back to Maps</a>
				</div>
				<br>
				<p>There is no NPC in Shambala Dungeon 1</p>
			</div>
		</div>
		<br>
		<!-- div row for NPCs in Shambala Dungeon 1 end -->


	</div>
	<!-- Container for Shambala Dungeon 1 end -->
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