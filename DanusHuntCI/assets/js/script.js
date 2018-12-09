$(function() {
    $("#username_error_message").hide();
	$("#email_error_message").hide();
	$("#password_error_message").hide();
    $("#retype_password_error_message").hide();
    $("#hp_error_message").hide();
   
    
    var error_username = false;
    var error_email = false;
	var error_password = false;
    var error_retype_password = false;
    var error_hp = false;

    $("#form_username").focusout(function() {

		check_username();
		
    });

    $("#form_email").focusout(function() {

		check_email();
		
	});
    
    $("#form_password").focusout(function() {

		check_password();
		
	});

	$("#form_retype_password").focusout(function() {

		check_retype_password();
		
    });
    
    $("#form_hp").focusout(function() {

		check_hp();
		
    });

    function check_username() {
	
		var username_length = $("#form_username").val().length;
		
		if(username_length < 5 || username_length > 20) {
			$("#username_error_message").html("Harus di antara 5-20 karakter");
			$("#username_error_message").show();
			error_username = true;
		} else {
			$("#username_error_message").hide();
        }
    }
    
    
	function check_email() {

		var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
	
		if(pattern.test($("#form_email").val())) {
			$("#email_error_message").hide();
		} else {
			$("#email_error_message").html("Alamat email tidak valid");
			$("#email_error_message").show();
			error_email = true;
		}
	
    }
    
    function check_password() {
	
		var password_length = $("#form_password").val().length;
		
		if(password_length < 8) {
			$("#password_error_message").html("Minimal 8 karakter");
			$("#password_error_message").show();
			error_password = true;
		} else {
			$("#password_error_message").hide();
		}
	
    }
    
    function check_retype_password() {
	
		var password = $("#form_password").val();
		var retype_password = $("#form_retype_password").val();
		
		if(password !=  retype_password) {
			$("#retype_password_error_message").html("Password salah");
			$("#retype_password_error_message").show();
			error_retype_password = true;
		} else {
			$("#retype_password_error_message").hide();
		}
	
    }

    
    function check_hp() {
	
		var hp_length = $("#form_hp").val().length;
		
		if(hp_length != 12) {
			$("#hp_error_message").html("Nomor harus 12 digit");
			$("#hp_error_message").show();
			error_hp = true;
		} else {
			$("#hp_error_message").hide();
        }
    }

    
    // function check_hp() {
	
    //     var hp_length = $("#form_hp").val().length;
    //     var hp_num = $("#form_hp").val();
		
	// 	if(hp_length != 12 || !=hp_num.match(number)) {
	// 		$("#hp_error_message").html("Format nomor salah");
	// 		$("#hp_error_message").show();
	// 		error_hp = true;
	// 	} else {
	// 		$("#hp_error_message").hide();
    //     }
    // }

    $("#registration_form").submit(function() {
		error_username = false;
		error_password = false;
		error_retype_password = false;
        error_email = false;
        error_hp = false;
											
		check_username();
		check_password();
		check_retype_password();
        check_email();
        check_hp();
		
		if(error_username == false && error_password == false && error_retype_password == false && error_email == false && error_hp == false) {
			return true;
		} else {
			return false;	
		}

	});


});