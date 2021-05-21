	<!-- Nav Bar Start -->
		<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
		  <a class="navbar-brand" href="index.php"><img src="assets/images/neo-oriental-fantasy.png"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
		  	<div>
			    <ul class="navbar-nav">

			    	<!-- Game link with dropdown-->
			      <li class="nav-item dropdown active">
			        <a class="nav-link dropdown-toggle"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Game<span class="sr-only">(current)</span>
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="story.php">The Story</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="eight_tribes.php">The Eight Tribes</a>
						<a class="dropdown-item" href="maps.php">Maps</a>
						<a class="dropdown-item" href="gallery.php">Gallery</a>
					</div>
			      </li>
			      	<!-- end of Game link -->

			      	<!-- Forums link with dropdown start -->
			      <li class="nav-item">
			        <a class="nav-link" href="https://joevarias.net/tantraforum" target="_blank">Forums
			        </a>
			        <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Announcement</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Server Updates</a>
					</div> -->
					<!-- end Forums link -->
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="ranking.php">Ranking</a>
			      </li>
			      
			      <li class="nav-item">
			        <a class="nav-link" href="mall.php">Mall</a>
			      </li>

				  <li class="nav-item">
	    	 		<?php
	    	 		if (isset($_SESSION['total_itemcount']) && $_SESSION['total_itemcount']>0) {
		    	 		
		    	 		echo "<a class='nav-link' href='cart.php' id='cart_navbar'><i class='fas fa-shopping-cart'></i>Cart <span class='badge badge-primary'>" . $_SESSION['total_itemcount'] . "</span>"."</a>";
	    	 		}
	    	 		else {
	    	 			echo "<a class='nav-link' href='cart.php' id='cart_navbar'>Cart <i class='fas fa-shopping-cart'></i></a>";
	    	 		}
	    	 		?>
		    	   </li>
		    	   <li>
		    	   	<?php
	    	 		if (isset($_SESSION['uid'])) {
		    	 		
		    	 		echo "<a class='nav-link' href='https://www.paypal.com/donate?hosted_button_id=C5D3YK53DVKLJ'>
							<img src='https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif' title='PayPal - The safer, easier way to pay online!' alt='Donate with PayPal button'/></img>
							</a>";
	    	 		}
	    	 		else {
	    	 			echo "<a class='nav-link' href='#' onclick='event.preventDefault();btnModalLogin()'>
							<img src='https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif' title='PayPal - The safer, easier way to pay online!' alt='Donate with PayPal button'/></img>
							</a>";
	    	 		}
	    	 		?>
		    	   </li>
		    	   <li class="nav-item">
			        
			      </li>

			    </ul>
		    </div>
		    <div class="dropdown-divider-userinfo"><hr></div>
		    <div class="ml-auto">
		    	 <ul class="navbar-nav">
		    	 	<li class="nav-item">
		    	 		
		    	 	</li>
		    	 	
			    	 	<li class="nav-item text-center">
			    	 		<?php
			    	 		if (isset($_SESSION['uid'])) {
				    	 		echo '<span class="nav-link">Welcome '. $_SESSION['firstname'] . '!&nbsp<small><a class="d-inline" type="button" href="myaccount.php">[Edit profile]</a></small></span>';
			    	 		}
			    	 		else {
			    	 			echo '<a class="nav-link" type="button" data-toggle="modal" data-target="#login-modal" id="nav-linkbtn-login">Login</a>';
			    	 		}
			    	 		?>
			    	 	</li>

					<li class="nav-item">
		    	 		<?php
		    	 		if (isset($_SESSION['uid'])) {
			    	 		echo '<a class="nav-link" type="button" href="controllers/process_logout.php">[Logout]</a>';
		    	 		}
		    	 		else{
		    	 			echo '<a class="nav-link" type="button" data-toggle="modal" data-target="#register-modal" id="nav-linkbtn-reg">Create Account</a>';
		    	 		}
		    	 		?>
		    	 		
		    	 	</li>
				 </ul>
		    </div>


		  </div>

		</nav>

<!-- Login Modal Start -->

<!-- Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal-title" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header card-header text-center">
        <h4 class="modal-title w-100" id="login-modal-title">Login</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" id="form_login">
         	<div class="container-fluid">
	           <div class="form-group row">
	              <label class="col-3 col-form-label" for="log_uname">Username</label>
	              <div class="col-9">
	                 <input class="form-control" type="text" id="log_uname" name ="log_uname" onkeyup="submitFormLogin(event)">
	                 <span id="login_err1"></span>
	              </div>
	           </div>

         	   <div class="form-group row">
	              <label class="col-3 col-form-label" for="log_pword">Password</label>
	            	<div class="col-9">
	                 <input class="form-control" type="password" id="log_pword" name="log_pword" onkeyup="submitFormLogin(event)">
	                 <span id="login_err2"></span>
               		</div>
           		</div>
           <span id="login_error_message"></span>
           <span><input class="btn btn-warning btn-sm" type="reset" value="Clear Input" id="btn_resetlogin"></span>
           </div>
        </form>
      </div>
      <div class="modal-footer">
      	<p class="modal-noacct-yet-label">Dont have account yet?</p>
      	<button type="button" class="btn btn-success mr-auto px-4" onclick="btnModalRegister()">Register!</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary px-3" id="btn_login">Login</button>
      </div>
    </div>
  </div>
</div>

<!-- End of Login Modal -->


<!-- Register Modal Start -->

<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="register-modal-title" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header card-header text-center">
        <h4 class="modal-title w-100" id="register-modal-title">Create your Tantra Online Account</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form method="POST" id="form-reg">
			<div class="container-fluid">
	           <div class="form-group row">
	              <label class="col-3 col-form-label" for="for_uname">Username</label>
	              <div class="col-9">
	                 <input class="form-control" type="text" name="reg-uname" id="for_uname" onkeyup="submitFormReg(event)">
	                 <span id="err-uname"></span>
	              </div>
	            
	           </div>
	           <div class="form-group row">
	              <label class="col-3 col-form-label" for="for_pword">Password</label>
	              <div class="col-9">
	                 <input class="form-control" type="password" name="reg-pword" id="for_pword" onkeyup="submitFormReg(event)">
	                 <span id="err-pword"></span>
	              </div>
	           </div>
	           <div class="form-group row">
	              <label class="col-3 col-form-label" for="for_cpword"> Confirm PW</label>
	              <div class="col-9">
	                 <input class="form-control" type="password" name="reg-cpword" id="for_cpword" onkeyup="submitFormReg(event)">
	                 <span id="err-cpword"></span>
	              </div>
	           </div>
	           <div class="form-group row">
	              <label class="col-3 col-form-label" for="for_fname">First Name</label>
	              <div class="col-9">
	                 <input class="form-control" type="text" name="reg-fname" id="for_fname" onkeyup="submitFormReg(event)">
	                 <span id="err-fname"></span>
	              </div>
	           </div>
	           <div class="form-group row">
	              <label class="col-3 col-form-label" for="for_lname">Last Name</label>
	              <div class="col-9">
	                 <input class="form-control" type="text" name="reg-lname" id="for_lname" onkeyup="submitFormReg(event)">
	                 <span id="err-lname"></span>
	              </div>
	           </div>
	           <div class="form-group row">
	              <label class="col-3 col-form-label" for="for_email">Email</label>
	              <div class="col-9">
	                 <input class="form-control" type="email" name="reg-email" id="for_email" onkeyup="submitFormReg(event)">
	                 <span id="err-email"></span>
	              </div>
	           </div>
	           <span id="reg_error_message"></span>
	           <p><input class="btn btn-warning btn-sm" type="reset" value="Clear Input" id="btn_resetreg"></p>
	        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" id="btn-reg">&nbspRegister!&nbsp</button>
      </div>
    </div>
  </div>
</div>

<!-- End of Register Modal -->

	<!-- Nav Bar End -->