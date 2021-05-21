$(document).ready(() =>{
  
	$("#for_uname").blur(() => {
		let uname = $("#for_uname").val();

		$.post("controllers/validation_username.php", {"uname":uname}, (data)=>{
			// alert(data);
			if (data == 1) {
				$("#err-uname").css("color", "red");
				$("#err-uname").html("Username Field is required!(5 to 10 characters)");
			}
			else if(data == 2) {
				$("#err-uname").css("color", "red");
				$("#err-uname").html("Username must have 5 to 10 characters only!");
			}
			else if(data == 3) {
				$("#err-uname").css("color", "green");
				$("#err-uname").html("Username is available!");
			}
			else if(data == 4) {
				$("#err-uname").css("color", "red");
				$("#err-uname").html("Username is already taken!");
			}
		});
	});


	$("#for_pword").blur(() => {
		let pword = $("#for_pword").val();
		let cpword = $("#for_cpword").val();

		$.post("controllers/validation_password.php", {"pword":pword, "cpword":cpword}, (data)=>{
			// alert(data);
			if (data == 1) {
				$("#err-pword").css("color", "red");
				$("#err-pword").html("Password cannot be empty!");
			}
			else if(data == 2) {
				$("#err-pword").css("color", "red");
				$("#err-pword").html("Password must have 5 to 20 characters!");
			}
			else {
				$("#err-pword").html("");
			}
		});
	});


	$("#for_cpword").blur(() => {
		let cpword = $("#for_cpword").val();
		let pword = $("#for_pword").val();

		$.post("controllers/validation_cpassword.php", {"cpword":cpword, "pword":pword}, (data)=>{
			// alert(data);
			if (data == 1) {
				$("#err-cpword").css("color", "red");
				$("#err-cpword").html("Please confirm Password!");
			}
			else if(data == 2) {
				$("#err-cpword").css("color", "red");
				$("#err-cpword").html("Confirm password must match the Password field!");
			}
			else {
				$("#err-cpword").html("");
				$("#err-pword").html("");
			}
		});
	});


	$("#for_fname").blur(() => {
		let fname = $("#for_fname").val();

		$.post("controllers/validation_firstname.php", {"fname":fname}, (data)=>{
			// alert(data);
			if (data == 1) {
				$("#err-fname").css("color", "red");
				$("#err-fname").html("First Name is required!");
			}
			else if(data == 2) {
				$("#err-fname").html("");
			}
		});
	});
	

	$("#for_lname").blur(() => {
		let lname = $("#for_lname").val();

		$.post("controllers/validation_lastname.php", {"lname":lname}, (data)=>{
			// alert(data);
			if (data == 1) {
				$("#err-lname").css("color", "red");
				$("#err-lname").html("Last Name is required!");
			}
			else {
				$("#err-lname").html("");
			}

		});
	});

	$("#for_email").blur(() => {
		let email = $("#for_email").val();

		$.post("controllers/validation_email.php", {"email":email}, (data)=>{
			// alert(data);
			if (data == 1) {
				$("#err-email").css("color", "red");
				$("#err-email").html("Email is required!");
			}
			else if(data == 2) {
				$("#err-email").css("color", "red");
				$("#err-email").html("Not a valid email!");
			}
			else if(data == 3) {
				$("#err-email").css("color", "red");
				$("#err-email").html("Email already exists!");
			}
			else{
				$("#err-email").html("");
			}
		});
	});

	// REGISTRATION Click validation

	$("#btn-reg").click(() => {
		let error_flag = 0;
		let uname = $("#for_uname").val();
		let pword = $("#for_pword").val();
		let cpword = $("#for_cpword").val();
		let fname = $("#for_fname").val();
		let lname = $("#for_lname").val();
		let email = $("#for_email").val();

		$.post("controllers/validation_all.php", {"uname":uname,"pword":pword,"cpword":cpword,"fname":fname,"lname":lname,"email":email}, (data)=> {

			if(data.includes("1") > 0) {
				$("#reg_error_message").css("color", "red");
				$("#reg_error_message").html("*Please fill the missing fields*");
				error_flag = 1;
			}

			if(data.includes("2u") > 0) {
				$("#err-uname").css("color", "red");
				$("#err-uname").html("Username must have 5 to 10 characters only!");
				error_flag = 1;

			}

			else if(data.includes("3u") > 0) {
				$("#err-uname").css("color", "green");
				$("#err-uname").html("Username is available!");
				
			}

			if(data.includes("4u") > 0) {
				$("#err-uname").css("color", "red");
				$("#err-uname").html("Username is already taken!");
				error_flag = 1;
			}


			if(data.includes("5p") > 0) {
				$("#err-pword").css("color", "red");
				$("#err-pword").html("Password must have 5 to 20 characters!");
				error_flag = 1;
			}

			if(data.includes("5z") > 0) {
				$("#err-pword").css("color", "red");
				$("#err-pword").html("Please create a password!");
				error_flag = 1;
			}

			if(data.includes("6c") > 0) {
				$("#err-cpword").css("color", "red");
				$("#err-cpword").html("Confirm password must match the Password field!");
				error_flag = 1;
			}

			if(data.includes("7c") > 0) {
				$("#err-cpword").html("");
				$("#err-pword").html("");
			}

			if(data.includes("7f") > 0) {
				$("#err-fname").css("color", "red");
				$("#err-fname").html("First Name is required!");
				error_flag = 1;
			}

			if(data.includes("7l") > 0) {
				$("#err-lname").css("color", "red");
				$("#err-lname").html("Last Name is required!");
				error_flag = 1;
			}


			if(data.includes("8e") > 0) {
				$("#err-email").css("color", "red");
				$("#err-email").html("Not a valid email!");
				error_flag = 1;
			}

			if(data.includes("9em") > 0) {
				$("#err-email").css("color", "red");
				$("#err-email").html("Email already exists!");
				error_flag = 1;
			}

			if (error_flag == 0) {
				$("#reg_error_message").html("");

				$.post("controllers/process_register.php", {"uname":uname, "pword":pword, "fname":fname, "lname":lname, "email":email}, (data)=>{
					if (data == "Success!") {
 						let username = $("#for_uname").val();
						let password = $("#for_pword").val();
						$("#log_uname").val(username);
						$("#log_pword").val(password);
						$("#btn_login").click();
					}
					else {
						// console.log(data);
						// alert(data);
						$("#error_message").html("data");
					}
				});
			}
		});
	});

	// LOGIN START Validation

	$("#btn_login").click(()=>{
	
		let username = $("#log_uname").val();
		let password = $("#log_pword").val();

		let error_flag = 0;
		if (username == "") {
			$("#login_err1").css("color","red");
			$("#login_err1").html("Username is required!");
			error_flag = 1;
		}
		else {
			$("#login_err1").html("");
		}

		if (password == "") {
			$("#login_err2").css("color","red");
			$("#login_err2").html("Password is required!");
			error_flag = 1;
		}
		else {
			$("#login_err2").html("");
		}

		if(error_flag == 0){
			
			$.ajax({
				"url" : "controllers/process_login.php",
				"data" : {"username" : username,
						"password" : password},
				"type" : "POST",
				"success": (dataFromPHP) => {
					if(dataFromPHP != 0) {
						$("#login_error_message").html("");
						$("#form_login").submit();
						alert(dataFromPHP);
					}
					else{
						$("#login_error_message").css("color", "red");
						$("#login_error_message").html("Incorrect Username or Password combination");
						// console.log(dataFromPHP);
					}

				}
			});
			
		}
	});


	$("#btn_resetlogin").click(()=>{
		$("#login_err1").html("");
		$("#login_err2").html("");
		$("#login_error_message").html("");
	});

	$("#btn_resetreg").click(()=>{
		$("#err-uname").html("");
		$("#err-pword").html("");
		$("#err-cpword").html("");
		$("#err-fname").html("");
		$("#err-lname").html("");
		$("#err-email").html("");
		$("#reg_error_message").html("");
	});
});

// when enter is pressed these functions will trigger submit

function submitFormLogin(e){
	if (e.keyCode == 13) {
		$("#btn_login").click();
	}
}

function submitFormReg(e){
	if (e.keyCode == 13) {
		$("#btn-reg").click();
	}
}

function showSessions(){
	$.ajax({
		url: "controllers/a_showsessions.php",
		method: "POST",
		data:{},
		dataType: "text",
		success: (data)=>{
			alert(data);

		}
	});
}


// for Product Categories view

function showByCategories(categoryId){
	$.ajax({
		url:"controllers/process_showitems_bycat.php",
		method:"POST",
		data:{
			"categoryId":categoryId
		},
		dataType:"text",
		success: function(data){
			$("#products").html(data);
		}
	});
}


// for Show All producs onclick
function showItemsAll(){
	$.ajax({
			url:"controllers/process_showitems_all.php",
			method:"POST",
			data:{},
			dataType:"text",
			success: function(data){
				$("#products").html(data);
			}

	});
}


// for Search product - onkeyup

$(document).ready(() =>{
	$("#product_search").keyup(function(){
	    let word = $(this).val();

	    if(word == ""){
	    	$("#products").html("<div class ='col-12'>Seach box is empty, please type a product or select category.</div>");
	    }
	    // console.log(word);

	    else {
	    // AJAX REQUEST
	        $.post("controllers/process_search_items.php", {"word":word}, function(data){
	        	$("#products").html(data);
	    }); 	
	    }
	});
});


// for Search product - on button click

function searchProduct(){
    let word = $("#product_search").val();

    if(word == ""){
    	$("#products").html("<div class ='col-12'>Seach box is empty, please type a product or select category.</div>");
    }

    else {
    // AJAX REQUEST
        $.post("controllers/process_search_items.php", {"word":word}, function(data){
        	$("#products").html(data);
    }); 	
    }

};


// function to trigger Add to Cart btn when enter is pressed

function addToCartEnter(e,id){
	if (e.keyCode == 13) {
		$("#btn_cart"+id).click();
	};
}


// add to cart !important: This must stay as function for add to cart click button to work on echoes
// must be outside document.ready

// add to cart - mall
function addToCart(id){
	let productId = id;
	let quantity = $('#quantity' + productId).val();

	if (quantity <= 0){
		alert("Please indicate quantity in numbers (1 or more).")
	}
	else{
		$.ajax({
			url: "controllers/process_addtocart.php",
			method: "POST",
			data:{
				"productId": productId,
				"quantity": quantity
			},
			dataType: "text",
			success: (data)=>{
				if (data){
					$('#cart_navbar').html(data);
					// insert string ')' into data from php
					let b = ")";
					let output = data.substring(0,40) + b + data.substring(40);
					$('.append-cart-change').html(output);

					alert("Item(s) have been added to your cart!");
				}
			}
		});
	}
}


// Update sub-total when changed - cart

function changeNoItems(id){
	let newcount = $("#quantity" + id).val();
	let price = parseFloat($("#price" + id).text());
	let newSubTotal = newcount * price;
	let grandTotal = 0;

	if (newcount <= 0){
		alert("Please indicate quantity in numbers (1 or more).")
	}

	else {

		$("#sub_total"+id).html(newSubTotal);

		$(".sub-total").each(function(){
			grandTotal += parseFloat($(this).text());
		});

		$("#grand_total").html(grandTotal);

		$.ajax({
				url: "controllers/process_updatecart.php",
				method: "POST",
				data:{
					"id": id,
					"newcount": newcount
				},
				dataType: "text",
				success: (data)=>{
					alert("Successfully updated your item");
					$("#cart_navbar").html(data);
				}
			});
	};
};


// function to click navbar Login and Register link

function btnModalLogin(){
	$("#nav-linkbtn-login").click();
}

function btnModalRegister(){
	$("#nav-linkbtn-reg").click();
}

// redirect to Mall

function loadMall(){
	window.location.href = "mall.php";
}

// redirect to Chechout
function loadCheckOut(){
	window.location.href = "checkout.php";
}

function removeFromCart(id){
	let ans = confirm("Remove from cart?");
	if (ans){
		$.ajax({
			url: "controllers/process_removefromcart.php",
			method: "POST",
			data: {"id": id},
			success: function(data){
				$('#cart_navbar').html(data);
				window.location.href = "cart.php";
			}

		});
	}
}

//submit order Checkout

function placeOrder(){
	let ans = confirm("Submit order?");
	if (ans){
		let paymentmethod = document.getElementById("payment_method").value;

		$.ajax({
			url:"controllers/process_checkout.php",
			method:"POST",
			data:{
				"paymentmethod":paymentmethod
			},
			success: function(data){
				alert(data);
				window.location.href = "cart.php";
			}
		});
	}
}

// clear email availability error - My Account

$(document).ready(() =>{
	$("#profile_email").blur(() => {
		$("#err-update-email").html("");
	});

	$("#profile_email").keyup(() => {
		$("#err-update-email").html("");
	});
});


// Save/Update profile - My Account

function saveProfile(){
	let firstname = document.getElementById("profile_firstname").value;
	let lastname = document.getElementById("profile_lastname").value;
	let email = document.getElementById("profile_email").value;
	let ans = confirm("Submit changes?");

	if (ans){
		$.ajax({
			url : "controllers/process_myaccount_saveprofile.php",
			method : "POST",
			data : {
				"firstname" : firstname,
				"lastname" : lastname,
				"email" : email
			},
			success : function(dataFromPHP){
				if (dataFromPHP == 'blank') {
					$("#err-update-email").css("color", "red");
					$("#err-update-email").html("Email is required!");
				}
				else if(dataFromPHP == 'invalid') {
					$("#err-update-email").css("color", "red");
					$("#err-update-email").html("Not a valid email!");
				}
				else if(dataFromPHP == 'exists') {
					$("#err-update-email").css("color", "red");
					$("#err-update-email").html("Email already exists!");
				}
				else if(dataFromPHP == 'Success!') {
					$("#err-update-email").html("");
					alert('User info successfully updated!');
					window.location.href = "myaccount.php";
				}

				else {
					alert('Error! ' + dataFromPHP);
				}
			}
		});
	}
}


// view Profile - My Account
function viewProfileCat(){
	let anchorVal = document.getElementById("anchor_profileCatMyAccount").innerHTML;
	if (anchorVal = "Profile"){
		$.ajax({
			url : "controllers/process_myaccount_viewprofile.php",
			method : "GET",
			data : {},
			success : function(dataFromPHP){
				document.getElementById("ajax-form-section").innerHTML = dataFromPHP;
				
			}
		});
	}
}


// view Change Password - My Account

function viewChangePwdCat(){
	let anchorVal = document.getElementById("anchor_pwCatMyAccount").innerHTML;
	if (anchorVal = "Change Password"){
		$.ajax({
			url : "controllers/process_myaccount_viewchangepwd.php",
			method : "GET",
			data : {},
			success : function(dataFromPHP){
				document.getElementById("ajax-form-section").innerHTML = dataFromPHP;
				
			}
		});
	}
}


// process update Password and validation - My Account

function updatePwd(){
	let currentpword = $("#profile_currentpassword").val();
	let newpword = $("#profile_newpassword").val();
	let cpword = $("#profile_confirmpassword").val();
	let error_flag = 0;

	$.ajax({
		url : "controllers/process_myaccount_changepwd.php",
		method : "POST",
		data : {
				"currentpword" : currentpword,
				"newpword" : newpword,
				"cpword" : cpword
		},
		success : function(dataFromPHP){

			if(dataFromPHP.includes("5z") > 0) {
				$("#err-profile_newpassword").css("color", "red");
				$("#err-profile_newpassword").html("Please create a password!");
				
			}

			if(dataFromPHP.includes("5p") > 0) {
				$("#err-profile_newpassword").css("color", "red");
				$("#err-profile_newpassword").html("Password must have 5 to 20 characters!");
				
			}

			if(dataFromPHP.includes("3d") > 0) {
				$("#err-profile_newpassword").html("");
				
			}


			if(dataFromPHP.includes("6c") > 0) {
				$("#err-profile_confirmpassword").css("color", "red");
				$("#err-profile_confirmpassword").html("Confirm password must match the New Password field!");
				
			}

			if(dataFromPHP.includes("1a") > 0) {
				$("#err-profile_currentpassword").css("color", "red");
				$("#err-profile_currentpassword").html("Incorrect password.");
				
			}

			if(dataFromPHP.includes("7c") > 0) {
				$("#err-profile_confirmpassword").html("");
				$("#err-profile_newpassword").html("");
				$("#err-profile_currentpassword").html("");
				$("#profile_confirmpassword").val("");
				$("#profile_newpassword").val("");
				$("#profile_currentpassword").val("");
		
				alert("Password changed successfully!");
			}
		}
	});

}

// event listener, submit when 'enter' is pressed - update pw - my account

function submitUpdatePwd(e){
	if (e.keyCode == 13) {
		$("#btn_savepwrd").click();
	}
}


// ranking result

function rankingBySelect(){
	let g = document.getElementById("selectgod");
	let optionbygod = g.value;
	let t = document.getElementById("selecttribe");
	let optionbytribe = t.value;

	$.ajax({
		url : "controllers/process_ranking.php",
		method : "POST",
		data : {
			"optionbygod" : optionbygod,
			"optionbytribe" : optionbytribe
		},
		success : function(dataFromPHP){
			document.getElementById("ranking_result").innerHTML = dataFromPHP;
		}
	});
}
