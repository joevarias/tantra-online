<?php

echo "
	<div>
		<header class='myaccount-header'>Change Password</header>
		<p>Change your password</p>
		<hr>
	</div>
	<div>

		<!-- Form for save profile Start -->
		<form method='POST' id='form-changepassword'>

			<!-- each row div has 2 - 6 col respectively-->
			<div class='row'>
				<div class='col-lg-3 col-md-3 col-sm-4'>
					<label class='myaccount-label-user' for='profile_currentpassword'>Current Password</label>
				</div>
				<div class='col-lg-7 col-md-9 col-sm-8'>
					<input class='form-control' type='password' name='profile_currentpassword' id='profile_currentpassword' onkeyup='submitUpdatePwd(event)'>
					<span id='err-profile_currentpassword'></span>
				</div>
			</div>
			<div class='row'>
				<div class='col-lg-3 col-md-3 col-sm-4'>
					<label class='myaccount-label-user' for='profile_newpassword'>New Password</label>
				</div>
				<div class='col-lg-7 col-md-9 col-sm-8'>
					<input class='form-control' type='password' name='profile_newpassword' id='profile_newpassword' onkeyup='submitUpdatePwd(event)'>
					<span id='err-profile_newpassword'></span>
				</div>
			</div>
			<div class='row'>
				<div class='col-lg-3 col-md-3 col-sm-4'>
					<label class='myaccount-label-user' for='profile_confirmpassword'>Confirm Password</label>
				</div>
				<div class='col-lg-7 col-md-9 col-sm-8'>
					<input class='form-control' type='password' name='profile_confirmpassword' id='profile_confirmpassword' onkeyup='submitUpdatePwd(event)'>
					<span id='err-profile_confirmpassword'></span>
				</div>
			</div>
			<div class='row'>
				<div class='col-lg-3 col-md-3 col-sm-4'>
				</div>
				<div class='col-lg-7 col-md-9 col-sm-8'>
					<a class='btn btn-primary btn-change-password' id='btn_savepwrd' href='#' onclick='event.preventDefault();updatePwd()'>Save</a>
				</div>
			</div>
		</form>

		<!-- Form for save profile End -->
	</div>
	";


?>