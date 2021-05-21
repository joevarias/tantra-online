<?php session_start();?>
<?php 
 const TITLE = "Maps - Horseman Dungeon 1";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>

<div class="bg-maps-topborder">
</div>

<div class="bg-maps">
<br>
	<div class="container">

	<!-- Container for Horseman Dungeon 1 start -->
	<div class="container bg-container-maps">
		<div class="map-img-caption">
			<h1>Horseman Dungeon 1</h1>
		</div>
		<div class="maps-hero-wrapper">
			<img class="img-fluid" src="assets/images/maps/horseman_dungeon_1/horseman_dungeon_1.jpg" title="Horseman Dungeon 1" alt="Horseman Dungeon 1">
		</div>

		<!-- div row for Monsters in Horseman Dungeon 1 start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablemonster">
					<h2>Monsters in Horseman Dungeon 1</h2><span class="jumpbutton"> <a href="#tablenpc">(jump to NPCs)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_1/horseman_dungeon_1-monsters/ugra_mlecchas_karmana.png" title="Ugra Mlecchas Karmana" alt="Ugra Mlecchas Karmana"></td>
								<td>Ugra Mlecchas Karmana</td>
								<td>22</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_1/horseman_dungeon_1-monsters/kavanda.png" title="Kavanda" alt="Kavanda"></td>
								<td>Kavanda</td>
								<td>24</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_1/horseman_dungeon_1-monsters/rasenasu.png" title="Rasenasu" alt="Rasenasu"></td>
								<td>Rasenasu (Boss)</td>
								<td>24</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_1/horseman_dungeon_1-monsters/kavanda_jatu.png" title="Kavanda Jatu" alt="Kavanda Jatu"></td>
								<td>Kavanda Jatu</td>
								<td>26</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_1/horseman_dungeon_1-monsters/bali.png" title="Bali" alt="Bali"></td>
								<td>Bali (Boss)</td>
								<td>26</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_1/horseman_dungeon_1-monsters/kavanda_raja.png" title="Kavanda Raja" alt="Kavanda Raja"></td>
								<td>Kavanda Raja</td>
								<td>28</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_1/horseman_dungeon_1-monsters/uppa.png" title="" alt=""></td>
								<td>Uppa (Boss)</td>
								<td>28</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_1/horseman_dungeon_1-monsters/tarantula.png" title="Tarantula" alt="Tarantula"></td>
								<td>Tarantula</td>
								<td>30</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_1/horseman_dungeon_1-monsters/tarantula_caura.png" title="Tarantula Caura" alt="Tarantula Caura"></td>
								<td>Tarantula Caura</td>
								<td>32</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_1/horseman_dungeon_1-monsters/manuzen.png" title="Manuzen" alt="Manuzen"></td>
								<td>Manuzen (Boss)</td>
								<td>32</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<br>
		<br>
		<!-- div row for Monsters in Horseman Dungeon 1 end -->


		<!-- div row for NPCs in Horseman Dungeon 1 start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablenpc">
					<h2>NPCs in Horseman Dungeon 1</h2><span class="jumpbutton"> <a href="#tablemonster">(back to Monsters)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/horseman_dungeon_1/horseman_dungeon_1-npc/vharah.png" title="Vharah" alt="Vharah"></td>
								<td>Vharah</td>
								<td>460 / 420</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<br>
		<!-- div row for NPCs in Horseman Dungeon 1 end -->

	
	</div>
	<!-- Container for Horseman Dungeon 1 end -->
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