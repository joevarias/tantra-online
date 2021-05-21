<?php session_start();?>
<?php 
 const TITLE = "Maps - Shambala";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>

<div class="bg-maps-topborder">
</div>

<div class="bg-maps">
<br>
	<div class="container">

	<!-- Container for Shambala start -->
	<div class="container bg-container-maps">
		<div class="map-img-caption">
			<h1>Shambala</h1>
		</div>
		<div class="maps-hero-wrapper">
			<img class="img-fluid" src="assets/images/maps/shambala/shambala.jpg" title="Shambala" alt="Shambala">
		</div>

		<!-- div row for Monsters in Shambala start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablemonster">
					<h2>Monsters in Shambala</h2><span class="jumpbutton"> <a href="#tablenpc">(jump to NPCs)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/ulkamukha.png" title="Ulkamukha" alt="Ulkamukha"></td>
								<td>Ulkamukha</td>
								<td>21</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/ulkamukha_caura.png" title="Ulkamukha Caura" alt="Ulkamukha Caura"></td>
								<td>Ulkamukha Caura</td>
								<td>23</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/ulkamukha_satvan.png" title="Ulkamukha Satvan" alt="Ulkamukha Satvan"></td>
								<td>Ulkamukha Satvan</td>
								<td>25</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/crama.png" title="Crama" alt="Crama"></td>
								<td>Crama (Boss)</td>
								<td>25</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/visa_curmi.png" title="Visa Curmi" alt="Visa Curmi"></td>
								<td>Visa Curmi</td>
								<td>27</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/ugra_ulkamukha.png" title="Ugra Ulkamukha" alt="Ugra Ulkamukha"></td>
								<td>Ugra Ulkamukha</td>
								<td>28</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/tarantula.png" title="Tarantula" alt="Tarantula"></td>
								<td>Tarantula</td>
								<td>30</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/ugra_ulkamukha_caura.png" title="Ugra Ulkamukha Caura" alt="Ugra Ulkamukha Caura"></td>
								<td>Ugra Ulkamukha Caura</td>
								<td>30</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/heruka.png" title="Heruka" alt="Heruka"></td>
								<td>Heruka</td>
								<td>31</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/ugra_ulkamukha_satvan.png" title="Ugra Ulkamukha Satvan" alt="Ugra Ulkamukha Satvan"></td>
								<td>Ugra Ulkamukha Satvan</td>
								<td>32</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/azna_heruka.png" title="" alt=""></td>
								<td>Azna Heruka</td>
								<td>33</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/digamvara.png" title="Digamvara" alt="Digamvara"></td>
								<td>Digamvara (Boss)</td>
								<td>33</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/ananga.png" title="Ananga" alt="Ananga"></td>
								<td>Ananga</td>
								<td>35</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/ananga_dvanta.png" title="Ananga Dvanta" alt="Ananga Dvanta"></td>
								<td>Ananga Dvanta</td>
								<td>37</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/sari.png" title="Sari" alt="Sari"></td>
								<td>Sari (Boss)</td>
								<td>37</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/pizac_aggana.png" title="Pizac Aggana" alt="Pizac Aggana"></td>
								<td>Pizac Aggana</td>
								<td>39</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/aggana_tara.png" title="Aggana Tara" alt="Aggana Tara"></td>
								<td>Aggana Tara</td>
								<td>40</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/kaulitara.png" title="Kaulitara" alt="Kaulitara"></td>
								<td>Kaulitara</td>
								<td>41</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-monsters/dweza.png" title="Dweza" alt="Dweza"></td>
								<td>Dweza (Boss)</td>
								<td>41</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- div row for Monsters in Shambala end -->

		<br>
		<br>

		<!-- div row for NPCs in Shambala start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablenpc">
					<h2>NPCs in Shambala</h2><span class="jumpbutton"> <a href="#tablemonster">(back to Monsters)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-npc/alhi.png" title="Alhi" alt="Alhi"></td>
								<td>Alhi</td>
								<td>155 / 518</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-npc/bava.png" title="" alt=""></td>
								<td>Bava</td>
								<td>403 / 163</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-npc/chiefguard_amar.png" title="Chiefguard Amar" alt="Chiefguard Amar"></td>
								<td>Chiefguard Amar</td>
								<td>377 / 176</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-npc/discipling_monk.png" title="Discipling Monk" alt="Discipling Monk"></td>
								<td>Discipling Monk</td>
								<td>133 / 462</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-npc/jeweler_nara.png" title="Jeweler Nara" alt="Jeweler Nara"></td>
								<td>Jeweler Nara</td>
								<td>127 / 552</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-npc/mahomet.png" title="Mahomet" alt="Mahomet"></td>
								<td>Mahomet</td>
								<td>380 / 231</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-npc/memory_maiden.png" title="Memory Maiden" alt="Memory Maiden"></td>
								<td>Memory Maiden</td>
								<td>127 / 514</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-npc/moriya.png" title="Moriya" alt="Moriya"></td>
								<td>Moriya</td>
								<td>114 / 503</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-npc/sacrificial_priest_saranu.png" title="Sacrificial Priest Saranu" alt="Sacrificial Priest Saranu"></td>
								<td>Sacrificial Priest Saranu</td>
								<td>164 / 540</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/shambala/shambala-npc/weapon_man_vibvan.png" title="Weapon Man Vibvan" alt="Weapon Man Vibvan"></td>
								<td>Weapon Man Vibvan</td>
								<td>164 / 485</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<br>
		<!-- div row for NPCs in Shambala end -->


	</div>
	<!-- Container for Shambala end -->
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