function validateForm() {
    var fname=document.myForm.fname.value;  
   
    var brief_intro

    /validate first name/

    /*validate first name*/

    if (fname == "") {
      
      document.getElementById("fname_error").innerHTML="First name must be filled out";
   
      return false;
    }

    // /validate last name/
    // var lname=document.myForm.lname.value;  
    // if (lname == "") {


    /*validate last name*/
    var lname=document.myForm.lname.value;  
    if (lname == "") {
      

        document.getElementById("lname_error").innerHTML="Last name must be filled out";
     
        return false;
      }

      /*validate email*/


      /validate email/

      var email=document.myForm.email.value;  
      var validRegex = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/;

      /*validate email*/
      var email=document.myForm.email.value;  
      var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    
      if (!email.match(validRegex) ){ 
          document.getElementById("email_error").innerHTML="Please enter a valid e-mail address";
    
      return false;  
      } 

      var password=document.myForm.password.value; 
      if(password==""){
        document.getElementById("password_error").innerHTML="Password must be filled out";
      }
      var passw=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
    if(!password.match(passw)) 
    { 
      document.getElementById("password_error").innerHTML ="A password must have at least 1 numeric digit, 1 uppercase, and 1 lowercase letter and be between 6 and 20 characters long.";
      return false;
    }
    var confirmPassword=document.myForm.confirmPassword.value; 
    if(confirmPassword!=password){
      document.getElementById("confirmPassword_error").innerHTML =" password Password does not matched" ;
      return false;
    }
   
 	
  }

  /*fuction to hide error msg*/


  /fuction to hide error msg/

  function hideFormError(x) {
  
  x.innerHTML="";
  }

  /*fuction to hide error msg*/
  function hideFormError(x) {
  
  x.innerHTML="";
  }

