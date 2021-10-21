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
      /validate email/
      var email=document.myForm.email.value;  
      var validRegex = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/;
    
      if (!email.match(validRegex) ){ 
          document.getElementById("email_error").innerHTML="Please enter a valid e-mail address";
    
      return false;  
      } 
 
 	
  }
  /fuction to hide error msg/
  function hideFormError(x) {
  
  x.innerHTML="";
  }