function validateForm() 
{
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
  if(confirmPassword==""){
    document.getElementById("password_error").innerHTML="Password must be confirmed";
  }
  if(confirmPassword!=password){
    document.getElementById("confirmPassword_error").innerHTML =" password Password does not matched" ;
    return false;
  }
 
}
/*fuction to hide error msg*/
function hideFormError(x) 
{
x.innerHTML="";
}
  
  