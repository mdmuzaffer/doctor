$(document).ready(function(e){
	//code
	$("#myDoctor").click(function() {
	    var name = $.trim($("#name").val());
	    var url = $("#url").val();
	    var email = $("#email").val();
	    var address = $("#address").val();
	    var doctor = $("#cntactForm").val();
	    var phone = $("#phone").val();
	    var date = $("#date").val();
	    var time = $("#time").val();
	    var message = $("#message").val();
	    if(name ==""){
	    	$('.forMessage').html('Please fill the name');
	    	return false;
	    }
	    if(email ==""){
	    	$('.forMessage').html('Please fill the email address');
	    	return false;
	    }
	    if(address ==""){
	    	$('.forMessage').html('Please fill the address');
	    	return false;
	    }

	    if(message ==""){
	    	$('.forMessage').html('Please fill the message');
	    	return false;
	    }
	    if(doctor ==""){
	    	$('.forMessage').html('Please fill the doctor');
	    	return false;
	    }
	    if(phone ==""){
	    	$('.forMessage').html('Please fill the phone');
	    	return false;
	    }
	    if(date ==""){
	    	$('.forMessage').html('Please fill the date');
	    	return false;
	    }
     	$.ajax({
	        type: "POST",
	        url: url,
	        data: {app_name:name,app_email:email,app_address:address,doctor_id:doctor,app_phone:phone,app_date:date,app_time:time,app_message:message},
	        dataType: "html",
	        success: function(data){
	            $('.forMessage').html(data);
	        }
	    });
	});
});


$("#newsLetter").click(function(e){
	var newsurl = $("#newsurl").val();
	var newsemail = $('#newssubscribe').val();
	var email = $.trim(newsemail)
	if (email =="") {
		$(".newsMessage").html('Please fill the email address');
		return false;
	}else{
		$.ajax({
	        type: "POST",
	        url: newsurl,
	        data: {email:email},
	        dataType: "html",
	        success: function(data){
	            $('.newsMessage').html(data);
	        }
	    });
	}
});