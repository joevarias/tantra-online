<?php session_start();?>
<?php 
 const TITLE = "Maps - Pamir Plains";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>

<div class="bg-maps-topborder">
</div>

<div class="bg-maps">
<br>
	<div class="container">

	<!-- Container for Pamir Plains start -->
	<div class="container bg-container-maps">
		<div class="map-img-caption">
			<h1>Pamir Plains</h1>
		</div>
		<div class="maps-hero-wrapper">
			<img class="img-fluid" src="assets/images/maps/pamir_plains/pamir_plains.jpg" title="Pamir Plains" alt="Pamir Plains">
		</div>

		<!-- div row for Monsters in Pamir Plains start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablemonster">
					<h2>Monsters in Pamir Plains</h2><span class="jumpbutton"> <a href="#tablenpc">(jump to NPCs)</a></span>
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
								<td><img class="lazyload" data-src="assets/images/maps/pamir_plains/pamir_plains-monsters/ban.png" title="Ban" alt="Ban"></td>
								<td>Ban</td>
								<td>50</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/pamir_plains/pamir_plains-monsters/ban_gosu.png" title="Ban Gosu" alt="Ban Gosu"></td>
								<td>Ban Gosu</td>
								<td>52</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/pamir_plains/pamir_plains-monsters/taiputa.png" title="Taiputa" alt="Taiputa"></td>
								<td>Taiputa (Boss)</td>
								<td>52</td>
							</tr>
							
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/pamir_plains/pamir_plains-monsters/sobariung.png" title="Sobariung" alt="Sobariung"></td>
								<td>Sobariung</td>
								<td>54</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/pamir_plains/pamir_plains-monsters/sobariung_gosu.png" title="Sobariung Gosu" alt="Sobariung Gosu"></td>
								<td>Sobariung Gosu</td>
								<td>56</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/pamir_plains/pamir_plains-monsters/purtika.png" title="Purtika" alt="Purtika"></td>
								<td>Purtika (Boss)</td>
								<td>56</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/pamir_plains/pamir_plains-monsters/kubasang.png" title="Kubasang" alt="Kubasang"></td>
								<td>Kubasang</td>
								<td>58</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/pamir_plains/pamir_plains-monsters/choniokusin.png" title="Choniokusin" alt="Choniokusin"></td>
								<td>Choniokusin</td>
								<td>60</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/pamir_plains/pamir_plains-monsters/puriyo.png" title="Puriyo" alt="Puriyo"></td>
								<td>Puriyo</td>
								<td>60</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/pamir_plains/pamir_plains-monsters/balastha_drbhika.png" title="Balastha Drbhika" alt="Balastha Drbhika"></td>
								<td>Balastha Drbhika</td>
								<td>62</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/pamir_plains/pamir_plains-monsters/balastha_tundela.png" title="Balastha Tundela" alt="Balastha Tundela"></td>
								<td>Balastha Tundela</td>
								<td>64</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/pamir_plains/pamir_plains-monsters/nuzagama.png" title="Nuzagama" alt="Nuzagama"></td>
								<td>Nuzagama (Boss)</td>
								<td>64</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/pamir_plains/pamir_plains-monsters/kyukrong.png" title="Kyukrong" alt="Kyukrong"></td>
								<td>Kyukrong</td>
								<td>66</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/pamir_plains/pamir_plains-monsters/kyukrong_gosu.png" title="Kyukrong Gosu" alt="Kyukrong Gosu"></td>
								<td>Kyukrong Gosu</td>
								<td>68</td>
							</tr>
							<tr>
								<td><img class="lazyload" data-src="assets/images/maps/pamir_plains/pamir_plains-monsters/shumitrama.png" title="Shumitrama" alt="Shumitrama"></td>
								<td>Shumitrama (Boss)</td>
								<td>68</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- div row for Monsters in Pamir Plains end -->

		<br>
		<br>

		<!-- div row for NPCs in Pamir Plains start -->
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="text-center maps-table-caption" id="tablenpc">
					<h2>NPCs in Pamir Plains</h2><span class="jumpbutton"> <a href="#tablemonster">(back to Monsters)</a></span>
				</div>
				<div>
					<a href="maps.php"><i class="fas fa-arrow-left"></i> back to Maps</a>
				</div>
				<br>
				<p class="nonpcfound">There is no NPC in Pamir Plains</p>
			</div>
		</div>
		<br>
		<!-- div row for NPCs in Pamir Plains end -->


	</div>
	<!-- Container for Pamir Plains end -->
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