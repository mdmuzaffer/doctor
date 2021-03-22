$(document).ready(function(e){
	//code
});

function doctorStatus(id){
	var base_url = "http://localhost/doctor/";
	$.ajax({
         type: "POST",
         url: base_url + "admin/doctorStatus", 
         data: {doctor_id: id},
         dataType: "text",  
         cache:false,
         success: function(data){
                $('.doctorStatus').html(data);
                setTimeout('location.reload()', 5000);
              }
          });
     return false;
}
