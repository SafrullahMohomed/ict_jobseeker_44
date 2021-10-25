function validateForm() 
{
    var email=document.myForm.email.value;  
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  
    if (!email.match(validRegex) )
    { 
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
}
/*fuction to hide error msg*/
function hideFormError(x) {
  
    x.innerHTML="";
  }