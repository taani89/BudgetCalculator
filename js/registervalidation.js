// JavaScript Document
jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value);
    }, "type the correct answer -_-");

// validate contact form
$(function() {
    $('#register').validate({
        rules: {
            fname: {
                required: true,
                minlength: 3
            },
			lname: {
                required: true,
                minlength: 4
            },
			gender: {
                required: true,
            },
			age: {
                required: true,
                minlength: 2
            },
			dob: {
                required: true,
				date: true
            },
			address:{
                required: true,
                minlength: 5
            },
			address2:{
                required: true,
                minlength: 5
            },
			zip: {
                required: true,
                minlength: 5
            },
			zip2: {
                required: true,
                minlength: 5
            },
			town: {
                required: true,
                minlength: 2
            },
			town2: {
                required: true,
                minlength: 2
            },
			city: {
                required: true,
                minlength: 2
            },
			city2: {
                required: true,
                minlength: 2
            },
			state: {
                required: true,
                minlength: 2
            },
			state2: {
                required: true,
                minlength: 2
            },
			country: {
                required: true,
                minlength: 2
            },
			country2: {
                required: true,
                minlength: 2
            },
			mobile: {
                required: true,
                minlength: 5
            },
			universityName: {
                required: true,
                minlength: 2
            },
			matricNo: {
                required: true,
                minlength: 5
            },
			programCode: {
                required: true,
                minlength: 3
            },
			programName: {
                required: true,
                minlength: 10
            },
			faculty: {
                required: true,
                minlength: 2
            },
			cSem: {
                required: true,
                minlength: 1
            },
			totalSem: {
                required: true,
                minlength: 1
            },
			totalYear: {
                required: true,
                minlength: 1
            },
			financial: {
                required: true,
                minlength: 2
            },
			othersF: {
                required: true,
                minlength: 2
            },
			 username: {
                required: true,
                minlength: 5
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                password: true,
				minlength: 6
            },
            answer: {
                required: true,
                answercheck: true
            }
        },
        messages: {
            fname: {
                required: "Please enter your first name",
                minlength: "Your first name must consist of at least 3 characters"
            },
			lname: {
                required: "Please enter your last name",
                minlength: "Your last name must consist of at least 4 characters"
            },
			gender: {
                required: "Please choose your Gender"
            },
			age: {
                required: "Please state your valid age in the field",
                minlength: "Your age must be around 2 digits of number,aren't you?"
            },
			dob: {
                required: "Please pick your valid date of birth",
            },
			address:{
                required: "Please enter your HOMETOWN valid email address",
                minlength: "Your address must consist of at least 5 characters. That is the MINIMUM"
            },
			address2:{
                required: "Please enter your CURRENT hostel/rental valid email address",
                minlength: "Your address must consist of at least 5 characters. That is the MINIMUM"
            },
			zip: {
                required: "Please enter your HOMETOWN postal code",
                minlength: "Your postal code must consist of at least 5 characters. That is the MINIMUM"
            },
			zip2: {
                required: "Please enter your CURRENT hostel/rental postal code",
                minlength: "Your postal code must consist of at least 5 characters. That is the MINIMUM"
            },
			town: {
                required: "Please enter a town in which your  HOMETOWN is placed.",
                minlength: "Your town must consist of at least 2 characters. You can use town code"
            },
			town2: {
                required: "Please enter a town in which your  CURRENT hostel/rental is placed.",
                minlength: "Your town must consist of at least 2 characters. You can use town code"
            },
			city: {
                required: "Please enter a city in which your HOMETOWN is placed.",
                minlength: "Your city must consist of at least 2 characters. You can use city code"
            },
			city2: {
                required: "Please enter a city in which your  CURRENT hostel/rental is placed.",
                minlength: "Your city must consist of at least 2 characters. You can use city code"
            },
			state: {
                required: "Please enter a state in which your HOMETOWN is placed.",
                minlength: "Your state must consist of at least 2 characters. You can use state code"
            },
			state2: {
                required: "Please enter a state in which your  CURRENT hostel/rental is placed.",
                minlength: "Your state must consist of at least 2 characters. You can use state code"
            },
			country: {
                required: "Please enter a country in which your HOMETOWN is placed.",
                minlength: "Your country must consist of at least 2 characters. You can use country code"
            },
			country2: {
                required: "Please enter a country in which your  CURRENT hostel/rental is placed.",
                minlength: "Your country must consist of at least 2 characters. You can use country code"
            },
			mobile: {
                required: "Please enter your valid mobile phone number",
                minlength: "Your number must consist of at least minimum 5 characters"
            },
			universityName: {
                required: "Please enter your university name",
                minlength: "You can use university short name/code limit to 2 characters."
            },
			matricNo: {
                required: "Please enter your matric card number",
                minlength: "At least consist of 5 characters"
            },
			programCode: {
                required: "Please enter a valid program cde",
                minlength: "Minimum code must consist of at least 3 characters"
            },
			programName: {
                required: "Please enter a valid program name",
                minlength: "Program name must consist of at least 10 characters minimum!"
            },
			faculty: {
                required: "Please enter a valid faculty name",
                minlength: "You can use faculty code instead of name,must consist of at least 2 characters minimum!"
            },
			cSem: {
                required: "Please enter your current semester",
                minlength: "Minimum characters is 1"
            },
			totalSem: {
                required: "Please enter a total of semester for the whole program.",
                minlength: "Minimum characters is 1"
            },
			totalYear: {
                required: "Please enter total of years for the whole program",
                minlength: "Minimum characters is 1"
            },
			financial: {
                required: "Please state your financial resources such as PTPTN,MARA,etc",
                minlength: "Consists of at least 2 characters minimum,you can used code"
            },
			othersF: {
                required: "Other than financial support from PTPTN,MARA or etc, please state another types of resources you has",
                minlength: "Consists of at least 2 characters minimum,you can used code"
            },
			 username: {
                required: "This is required to identify yourself during login",
                minlength: "Your username must consists of at least 5 characters minimum."
            },
            password: {
                required: "You must enter a pssword for login details.",
				minlength: "Your password must contains at least 6 characters"
            },
            email: {
                required: "no email, no message, no registration"
				
            },
            answer: {
                required: "sorry, wrong answer!"
            }
        },
        submitHandler: function(form) {
            $(form).ajaxSubmit({
                type:"POST",
                data: $(form).serialize(),
                url:"process.php",
                success: function() {
                    $('#register :input').attr('disabled', 'disabled');
                    $('#register').fadeTo( "slow", 0.15, function() {
                        $(this).find(':input').attr('disabled', 'disabled');
                        $(this).find('label').css('cursor','default');
                        $('#success').fadeIn();
                    });
                },
                error: function() {
                    $('#register').fadeTo( "slow", 0.15, function() {
                        $('#error').fadeIn();
                    });
                }
            });
        }
    });
});