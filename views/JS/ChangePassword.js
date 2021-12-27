// JS validation starts here
// alert("GGSS");
function validateForm() 
{
  // password regular expression starts here
  var passw=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;
  // password regular expression ends here

  // Current password validation starts here
  var CurrPassword=document.myForm.CurrPassword.value; 
  if(CurrPassword=="")
  {
    
    document.getElementById("curr_password_error").innerHTML="Current Password must be filled out";
    
  }
    
  if(!CurrPassword.match(passw)) 
  { 
    document.getElementById("curr_password_error").innerHTML ="A password must have at least 1 numeric digit, 1 uppercase, and 1 lowercase letter and be between 6 and 20 characters long.";
    return false;
  }
  // Current password validation ends here

  // New password validation starts here
  var NewPassword=document.myForm.NewPassword.value; 
  if(NewPassword=="")
  {
    document.getElementById("new_password_error").innerHTML="New Password must be filled out";
  }
  if(!NewPassword.match(passw)) 
  { 
    document.getElementById("new_password_error").innerHTML ="A password must have at least 1 numeric digit, 1 uppercase, and 1 lowercase letter and be between 6 and 20 characters long.";
    return false;
  }
  // New password validation ends here

  // Confirm password validation starts here
  var ConfirmPassword=document.myForm.ConfirmPassword.value; 
  if(ConfirmPassword=="")
  {
    document.getElementById("confirm_password_error").innerHTML="New Password must be confirmed";
  }
  if(!ConfirmPassword.match(passw)) 
  { 
    document.getElementById("confirm_password_error").innerHTML ="A password must have at least 1 numeric digit, 1 uppercase, and 1 lowercase letter and be between 6 and 20 characters long.";
    return false;
  }
  // Confirm password validation ends here

  // New password and Confirm password compairing starts here
  if(ConfirmPassword!=NewPassword){
    document.getElementById("confirmPassword_error").innerHTML ="Password does not match with new password" ;
    return false;
  }
  // New password and Confirm password compairing ends here

}
/*fuction to hide error msg*/
function hideFormError(x) 
{
x.innerHTML="";
}
// JS validation ends here
  