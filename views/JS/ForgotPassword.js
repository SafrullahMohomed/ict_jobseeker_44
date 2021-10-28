function validateForm() 
{

    /*validate email*/
    var email=document.myForm.email.value;  
    if (email_error == "") {
      
        document.getElementById("email_error").innerHTML="Email must be filled out";
     
        return false;
      }
    
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

  
    if (!email.match(validRegex) ){ 
        document.getElementById("email_error").innerHTML="Please enter a valid e-mail address";
    }
}