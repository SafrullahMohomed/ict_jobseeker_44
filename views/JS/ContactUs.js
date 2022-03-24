
// alert("GGSS");
function validateForm() 
{
    alert("GGSS");
    var name=document.myForm.name.value;
    console.log(name);

    /*validate first name*/
    if (name == "") 
    {
      
        document.getElementById("name_error").innerHTML="Name must be filled out";
     
        return false;
    }

     /*validate email*/
     var email=document.myForm.email.value;  
     var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

   
     if (!email.match(validRegex) )
     { 
         document.getElementById("email_error").innerHTML="Please enter a valid e-mail address";
   
         return false;  
     } 

     /*validate inquiry or message*/
    if (message == "") 
    {
      
        document.getElementById("message_error").innerHTML="Inquiry Or Message must be filled out";
     
        return false;
    }
}

 /*fuction to hide error msg*/

 function hideFormError(x) {
 
 x.innerHTML="";
 }

 
  /*fuction to hide error msg*/
  function hideFormError(x) {
    
    x.innerHTML="";
  }