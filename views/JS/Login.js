function validateForm() 
{
    var email=document.myForm.email.value;  
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  
    if (!email.match(validRegex) )
    { 
        document.getElementById("email_error").innerHTML="Please enter a valid e-mail address";
  
    return false;  
    } 
}
/*fuction to hide error msg*/
function hideFormError(x) {
  
    x.innerHTML="";
  }