<?php session_start();?>
<?php 
 const TITLE = "Maps - Jina Village";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>

<div class="bg-maps-topborder">
</div>

<div class="bg-maps">
<br>
	<div class="container">

	<!-- Container for Jina Village start -->
	<div class="container bg-container-maps">
		<div class="map-img-caption">
			<h1>Jina Village</h1>
		</div>
		<div class="maps-hero-wrapper">
			<img class="img-fluid" src="assets/images/maps/jina_village/jina_village.jpg" title="Jina Village" alt="Jina Village">
		</div>

		<!-- div row for Monsters in Jina Village start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablemonster">
					<h2>Monsters in Jina Village</h2><span class="jumpbutton"> <a href="#tablenpc">(jump to NPCs)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-monsters/zaku.png" title="Zaku" alt="Zaku"></td>
								<td>Zaku</td>
								<td>45</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-monsters/zaku_gosu.png" title="Zaku Gosu" alt="Zaku Gosu"></td>
								<td>Zaku Gosu</td>
								<td>47</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-monsters/nirpati.png" title="Nirpati" alt="Nirpati"></td>
								<td>Nirpati (Boss)</td>
								<td>47</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-monsters/kyoin.png" title="Kyoin" alt="Kyoin"></td>
								<td>Kyoin</td>
								<td>48</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-monsters/mangriang.png" title="Mangriang" alt="Mangriang"></td>
								<td>Mangriang</td>
								<td>50</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-monsters/sestaku.png" title="Sestaku" alt="Sestaku"></td>
								<td>Sestaku (Boss)</td>
								<td>50</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-monsters/zinmon.png" title="Zinmon" alt="Zinmon"></td>
								<td>Zinmon</td>
								<td>51</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-monsters/sinkiu.png" title="Sinkiu" alt="Sinkiu"></td>
								<td>Sinkiu</td>
								<td>53</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-monsters/borangi.png" title="Borangi" alt="Borangi"></td>
								<td>Borangi</td>
								<td>54</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-monsters/zinmon_gosu.png" title="Zinmon Gosu" alt="Zinmon Gosu"></td>
								<td>Zinmon Gosu</td>
								<td>55</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-monsters/vidyama.png" title="Vidyama" alt="Vidyama"></td>
								<td>Vidyama (Boss)</td>
								<td>55</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-monsters/byokbo.png" title="Byokbo" alt="Byokbo"></td>
								<td>Byokbo</td>
								<td>56</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-monsters/vatur.png" title="Vatur" alt="Vatur"></td>
								<td>Vatur (Boss)</td>
								<td>56</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-monsters/sinkiu_gosu.png" title="Sinkiu Gosu" alt="Sinkiu Gosu"></td>
								<td>Sinkiu Gosu</td>
								<td>58</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-monsters/astamu.png" title="Astamu" alt="Astamu"></td>
								<td>Astamu (Boss)</td>
								<td>58</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-monsters/choniokusin.png" title="Choniokusin" alt="Choniokusin"></td>
								<td>Choniokusin</td>
								<td>60</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- div row for Monsters in Jina Village end -->

		<br>
		<br>

		<!-- div row for NPCs in Jina Village start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablenpc">
					<h2>NPCs in Jina Village</h2><span class="jumpbutton"> <a href="#tablemonster">(back to Monsters)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-npc/armor_salesman_wangddaopo.png" title="Armor Salesman Wangddaopo" alt="Armor Salesman Wangddaopo"></td>
								<td>Armor Salesman Wangddaopo</td>
								<td>408 / 853</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-npc/elder_zangzu.png" title="Elder Zangzu" alt="Elder Zangzu"></td>
								<td>Elder Zangzu</td>
								<td>336 / 654</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-npc/fighting_monk_iddungddashu.png" title="Fighting Monk Iddungddashu" alt="Fighting Monk Iddungddashu"></td>
								<td>Fighting Monk Iddungddashu</td>
								<td>474 / 812</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-npc/ghost_girl_mei.png" title="Ghost Girl Mei" alt="Ghost Girl Mei"></td>
								<td>Ghost Girl Mei</td>
								<td>620 / 326</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-npc/goods_salesman_rui_shan.png" title="Goods Salesman Rui Shan" alt="Goods Salesman Rui Shan"></td>
								<td>Goods Salesman Rui Shan</td>
								<td>338 / 866</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-npc/memory_maiden.png" title="Memory Maiden" alt="Memory Maiden"></td>
								<td>Memory Maiden</td>
								<td>335 / 820</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-npc/storekeeper_zongkui.png" title="Warehouse Keeper Zongkui" alt="Warehouse Keeper Zongkui"></td>
								<td>Warehouse Keeper Zongkui</td>
								<td>276 / 695</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/jina_village/jina_village-npc/weapon_salesman_ouyez.png" title="Weapon Salesman Ouyez" alt="Weapon Salesman Ouyez"></td>
								<td>Weapon Salesman Ouyez</td>
								<td>412 / 783</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<br>
		<!-- div row for NPCs in Jina Village end -->

	</div>
	<!-- Container for Jina Village end -->
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