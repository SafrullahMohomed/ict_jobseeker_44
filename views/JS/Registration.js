function validateForm() {
    var fname=document.myForm.fname.value;  
   
    var brief_intro
    /validate first name/
    if (fname == "") {
      
      document.getElementById("fname_error").innerHTML="First name must be filled out";
   
      return false;
    }
    /validate last name/
    var lname=document.myForm.lname.value;  
    if (lname == "") {

        document.getElementById("lname_error").innerHTML="Last name must be filled out";
     
        return false;
      }
      /*validate email*/
      var email=document.myForm.email.value;  
      var validRegex = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/;
    
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
      document.getElementById("password_error").innerHTML =" password must be between 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter";
      return false;
    }
    var confirmPassword=document.myForm.confirmPassword.value; 
    if(confirmPassword!=password){
      document.getElementById("confirmPassword_error").innerHTML =" password Password does not matched" ;
      return false;
    }
   
 	
  }
  /*fuction to hide error msg*/
  function hideFormError(x) {
  
  x.innerHTML="";
  }