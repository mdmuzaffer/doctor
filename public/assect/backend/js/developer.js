
$().ready(function() {
  //alert('Hello');
    // validate signup form on keyup and submit
    $("#doctorForm").validate({
        rules: {
            firstname: {
                required: true,
                minlength: 3
            },
            lastname: {
                required: true,
                minlength: 3
            },
            aboutme: {
                required: true,
                minlength: 10
            },
            county: {
                required: true,
                minlength: 2
            },
            bday: {
                required: true,
                minlength: 5
            },
            speciality: {
                required: true
            },
              email: {
                required: true,
                email: true
            },
              twitter: {
                required: true
            },
              mobile: {
                required: true,
                minlength: 10
            },
            address: {
                required: true,
                minlength: 2
            },
            message: {
                required: true,
                minlength: 10
            },
             doctor_time: {
                required: true
            },
        },
        messages: {                
            firstname: {
                required: "Please enter your first name !",
                minlength: "Your first name must consist of at least 3 characters long !"
            },
            lastname: {
                required: "Please enter yor last name !",
                minlength: "Your last name must consist of at least 3 characters long !"
            },
            aboutme: {
                required: "Please enter about your self !",
                minlength: "please enter about your self must consist of at least 10 characters long !"
            },
            country: {
                required: "Please enter a country !",
                minlength: "Your country must be at least 2 characters long !"
            },
            bday: {
                required: "Please enter your birth day !"
            },
           
           specility: {
                required: "Please provide a specility doctor!"
            },
            email: {
                required: "Please enter your email addres !",
                email   : "Please enter valid email address !"
            },
            twitter: {
                required: "Please provide a twitter ID !"
            },
            mobile: {
                required: "Please enter your mobile number !"
            },
            address: {
                required: "Please enter your address !"
            },
            message: {
                required: "Please enter your message !"
            },
            doctor_time: {
                required: "Please provide a doctor time !"
            },

        }
    });

});