function validateForm() 
{
    /*validate first name*/
    var fname=document.myForm.fname.value;  
    if (fname == "")
    {
      
        document.getElementById("fname_error").innerHTML="First name must be filled out";
     
        return false;
    }

    /*validate last name*/
    var lname=document.myForm.lname.value;  
    if (lname == "") 
    {
      
        document.getElementById("lname_error").innerHTML="Last name must be filled out";
     
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

    /*validate confirm_email*/
    var confirm_email=document.myForm.confirm_email.value;  
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (!confirm_email.match(validRegex) )
    { 
        document.getElementById("confirm_email_error").innerHTML="Please enter a valid e-mail address";
  
        return false;  
    } 
    var confirm_email=document.myForm.confirm_email.value; 
    if(confirm_email!=email){
      document.getElementById("confirm_email_error").innerHTML ="Email does not matched" ;
      return false;
    }

    /*validate phone number*/
    var phonenumber=document.myForm.phonenumber.value;
    if (phonenumber == "")
    {
      
        document.getElementById("phonenumber_error").innerHTML="Phone number must be filled out";
     
        return false;
    }
    if(isNaN(phonenumber) ||phonenumber.length !=10)
    {
        document.getElementById("phonenumber_error").innerHTML="Enter valid phone number";
       
        return false;
    }
    /*validate residence*/
    var residence=document.myForm.residence.value;  
    if (residence == "")
    {
      
        document.getElementById("residence_error").innerHTML="Recidence must be filled out";
     
        return false;
    }

    /*validation for linkedIn link*/
    var LinkedInlink=document.myForm.LinkedInlink.value;
    var validLinkedInlink= /(^((https?:\/\/)?((www|\w\w)\.)?)linkedin\.com\/)((([\w]{2,3})?)|([^\/]+\/(([\w|\d-&#?=])+\/?){1,}))$/gmi;
   
    if(LinkedInlink){
    if (!LinkedInlink.match(validLinkedInlink) ){
       
        document.getElementById("LinkedInlink_error").innerHTML="Please enter a valid linkedIn link";
        return false;
    }}

     /*validation for fb link*/
     var Facebooklink=document.myForm.Facebooklink.value;
     if(Facebooklink){
       if(!(/^(https?:\/\/)?((w{3}\.)?)facebook.com\/.*/i.test(Facebooklink))) {
         document.getElementById("Facebooklink_error").innerHTML="Please enter a valid facebook link";
         return false;
     }
     }

    /*validation for twitter link*/
	var Twitterlink=document.myForm.Twitterlink.value;
    var validTwitterlink=/(https:\/\/twitter.com\/(?![a-zA-Z0-9_]+\/)([a-zA-Z0-9_]+))/;
    if(Twitterlink){
    if (!Twitterlink.match(validTwitterlink) ){
       
        document.getElementById("Twitterlink_error").innerHTML="Please enter a valid twitter link";
        return false;
    }
  	}

    /*validation for twitter link*/
    var websitelink=document.myForm.websitelink.value;
    var validwebsitelink =/^(http(s?):\/\/)?(www\.)+[a-zA-Z0-9\.\-\_]+(\.[a-zA-Z]{2,3})+(\/[a-zA-Z0-9\_\-\s\.\/\?\%\#\&\=]*)?$/;
    if(websitelink){
        if (!websitelink.match(validwebsitelink) ){
           
            document.getElementById("websitelink_error").innerHTML="Please enter a valid twitter link";
            return false;
        }
    }

}
/*fuction to hide error msg*/
function hideFormError(x) {
  
    x.innerHTML="";
} 