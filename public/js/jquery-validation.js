// Wait for the DOM to be ready
$(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"

  $("form[name='register']").validate({  //form name atribute must be register
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      fname: "required",  //this part of code will take atribute with name firstname and make it required
      lname: "required",
      sex: "required",
      ethnicity: "required",
      DOB: {
        required: true,
        date: true,
      },
      address: "required",
      postcode: "required",
      number: "required",
      email: {
        required: true,
        email: true //if you want to add multi options us it like that.
      },
      disability: "required",
      crime: "required",
      grading: "required",
      competitor: "required",
      injury: "required",
            
      /*password: {
        required: true,
        minlength: 5
      },
      password2 : {
      	required:true,
        minlength : 5,
        equalTo : "#password"
      }*/
    },

    // Specify validation error messages
    messages: {
      fname: "*Please enter your first name",
      lname: "*Please enter your last name",
      sex: "*Please select your gender",
      ethnicity: "*Please enter your ethnicity",
      DOB: "*Please enter a valid date",
      address: "*Please enter your address",
      postcode: "*Please enter your postcode",
      number: "*Please enter your contact number",
      email: "*Please enter your email address",
      disability: "*Please enter if you suffer from anything or not",
      crime: "*Please select an option",
      grading: "*Please select an option",
      competitor: "*Please select an option",
      injury:  "*Please read and accept the statement",
      
     
      
      /*password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"

      },
      password2: {
      	required: "Please confirm your password",
      	equalTo : "Your password do not match password you entered first",
      	minlength: "Your password must be at least 5 characters long"
      },*/

      
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid 
    submitHandler: function(form) { // <- pass 'form' argument in
        $(".submit").attr("disabled", true);
        form.submit(); //that will make users not able to press subimt button until everything what's defined is entered
    }
  });
});
