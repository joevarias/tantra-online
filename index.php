<?php session_start();?>
<?php 
 const TITLE = "Home";
?>
<?php require_once 'partials/header.php'; ?>
<?php require_once 'partials/navbar.php'; ?>
<?php

	$_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];

?>

	<!-- Main Start -->

	<main>
		<div class="bg-index">
		<div class="bg-index-img">
		<div class="bg-index-imgoverlay">
			<div class="container intro">
				<!-- Hero Logo -->
				<img src="assets/images/neo-oriental-fantasy.png" class="img-fluid hero-img">
			</div>

			<!-- Container for Intro -->
			<div class="container">
				<div class="container bg-document">
				<div class="bg-document-overlay">
					<!--==== Start row Intro Part - Hero Video Embed and About ====-->
					<div class="row mx-1 my-3">

						<!-- Hero Video Embed -->
						<div class="col-lg-6 col-md-12 col-sm-12">
							<div class="hero-vid embed-responsive embed-responsive-4by3 mx-auto">
								<iframe class="embed-responsive-item" width="1082" height="721" src="https://www.youtube.com/embed/8A2Jc5Q9cR4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>

						<!-- About -->
						<div class="col-lg-6 col-md-12 col-sm-12 text-center article-avatara">
							<h3>Tantra Online: Epics of Avatara</h3>
							<p>The journey begins here and the way is fraught with dangers and tribulations. Tantra is not your usual, run-of-the-mill Online Role Playing Game. With its crisp, cutting-edge 3D graphics, engrossing storyline and mind-blowing gameplay, Tantra is an enthralling cyber-gaming foray that will surely excite and captivate both hardcore gamers and newbies alike. Let your imagination ran wild as you set forth to vanquish evil and save mankind from impending doom.
							</p>
							<p>
							Eight noble and powerful heroes are at your disposal; each one possessing colossal skills and attributes. Customize their names and appearances for that added personal touch. Equip them with armors, accessories and weapons as you annihilate the monsters and bosses with ease. More than just eye-candy, the eight tribes of Tantra are swashbuckling warriors and defenders on a daring mission.</p>
							<p>The fate of Tantra is in your hands!</p>
							<a href="" type="button" class="btn btn-outline-primary">Get into the game now!</a>
						</div>
					</div>
					<!--** End Container row - Hero Video Embed and About **-->

					<hr>

					<!--==== Start row Intro part 2 ====-->
					<div class="row mx-1 mt-4">
						<div class="col-lg-7 col-md-12 col-sm-12 text-center">
							<h3 class="text-center">Prologue</h3>
					
							<p>Tantra name is a name that comes from the god of the ancient language means is a world where human and deity live together. It exists already started even before the he is the first living creatures in this world.</p>
							<p>
							There is no historical record of the relevant history the creation of this world. However, one thing is clear that This world is the world's choice of deity, and has become place of living for those who had not recovered from injured last war and also as a place MARA protection from Satan.
							</p>
							<p>
							In the southern high plains, there are Mandara The eight areas inhabited by eight tribes, and between each tribe inhabited the area that is four holy land.

							Deva tribes settling the east coast island. Tribe Garuda live in the southern region that has subtropical. Naga tribes living in the area of the archipelago Mandara south. Rakshasa tribes living in the region timbered tropical rain on the southern tip of the archipelago Mandara. Kimnara tribes living in desert areas in the Mandara western island. In the northwest island Mandara and the northeast desert region, there are The area where the loud and wild tribes live Ashura. Gandharva tribes living in high mountain areas north Mandara, and Yaksha tribe occupy territory Prairie the east, where Gandharva life.
							</p>
						</div>

						<!-- Carousel -->
						<div class="col-lg-5 col-md-12 col-sm-12">
							<div id="carouselExampleIndicators" class="carousel slide carouselwrap" data-ride="carousel">
							  <ol class="carousel-indicators">
							    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							  </ol>
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img class="d-block img-fluid" src="assets/images/carousel/garuda.jpg" alt="First slide">
							    </div>
							    <div class="carousel-item">
							      <img class="d-block img-fluid" src="assets/images/carousel/tantra-lady.jpg" alt="Second slide">
							    </div>
							    <div class="carousel-item">
							      <img class="d-block img-fluid" src="assets/images/carousel/yaksa.jpg" alt="Third slide">
							    </div>
							    <div class="carousel-item">
							      <img class="d-block img-fluid" src="assets/images/carousel/rakshasa2.jpg" alt="Fourth slide">
							    </div>
							  </div>
							  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
						</div>


						<!--** End row - Intro Part 2 and Carousel **-->

						<div class="container mt-1">
							<div class="social" id="followus">
								<h3 class="overlay-about follow"> Follow us! </h3>
								<ul class="social mx-auto my-0">
									<li>
										<a href="" class="social"><i class="fab fa-facebook-square fa-3x" id="facebook"></i></a>
									</li>
									<li>
										<a href="" class="social"><i class="fab fa-twitter-square fa-3x" id="twitter"></i></a>
									</li>
									<li>
										<a href="" class="social"><i class="fas fa-envelope fa-3x" id="email"></i></a>
									</li>
								</ul>
								
							</div>
						</div>

					</div>

				</div>
				</div>
			</div>
			<!--** End Container Intro **-->
		<br>
		</div>
		</div>
		</div>

<!-- Login and register modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



	</main>

	<!--** End Main  **-->

<?php require_once 'partials/footer.php'; ?>