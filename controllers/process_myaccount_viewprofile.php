<?php
session_start();

require_once 'connect.php';

$uid = mysqli_real_escape_string($conn, $_SESSION["uid"]);

$sql = "SELECT * FROM tbl_users WHERE id = '$uid'";

$result = mysqli_query($conn, $sql);

	while($row = mysqli_fetch_assoc($result)){
		$username = $row['username'];
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$uid = $row['id'];
		$email = $row['email'];
	}

echo "
	<div>
		<header class='myaccount-header'>My Profile</header>
		<p>Manage your account</p>
		<hr>
	</div>
	<div>

		<!-- Form for save profile Start -->
		<form method='POST' id='form-saveprofile'>

			<div class='row'>
				<div class='col-lg-2 col-md-3 col-sm-3'>
					<label class='myaccount-label-user col-form-label'>Username</label>
				</div>
				<div class='col-lg-7 col-md-9 col-sm-9'>
					<input class='form-control' placeholder='$username' readonly>
				</div>
			</div>
			<div class='row'>
				<div class='col-lg-2 col-md-3 col-sm-3'>
					<label class='myaccount-label-user col-form-label' for='profile_firstname'>First Name</label>
				</div>
				<div class='col-lg-7 col-md-9 col-sm-9'>
					<input class='form-control' type='' name='profile_firstname' id='profile_firstname' value='$firstname'>
				</div>
			</div>
			<div class='row'>
				<div class='col-lg-2 col-md-3 col-sm-3'>
					<label class='myaccount-label-user col-form-label' for='profile_lastname'>Last Name</label>
				</div>
				<div class='col-lg-7 col-md-9 col-sm-9'>
					<input class='form-control' type='' name='profile_lastname' id='profile_lastname' value='$lastname'>
				</div>
			</div>
			<div class='row'>
				<div class='col-lg-2 col-md-3 col-sm-3'>
					<label class='myaccount-label-user col-form-label' for='profile_email'>Email</label>
				</div>
				<div class='col-lg-7 col-md-9 col-sm-9'>
					<input class='form-control' type='' name='profile_email' id='profile_email' value='$email'>
					<span id='err-update-email'></span>
				</div>
			</div>
			<div class='row'>
				<div class='col-lg-2 col-md-3 col-sm-3'>
				</div>
				<div class='col-lg-7 col-md-9 col-sm-9'>
					<!-- adding href='javascript:' (empty) allows anchor to be tab focused -->
					<a class='btn btn-primary btn-save-profile' href='#' onclick='event.preventDefault();saveProfile()'>Save</a>
				</div>
			</div>
		</form>

		<!-- Form for save profile End -->
	</div>
	";
mysqli_close($conn);
?>