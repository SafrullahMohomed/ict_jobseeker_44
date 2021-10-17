function validateForm() {
    var name=document.myForm.name.value;  
    var Phone_number=document.myForm.Phone_number.value;
    var brief_intro
    /*validate name*/
    if (name == "") {
      
      document.getElementById("name_error").innerHTML="Name must be filled out";
   
      return false;
    }

    /*validate phone number*/
    if(isNaN(Phone_number) ||Phone_number.length !=10) {
        document.getElementById("phonenumber_error").innerHTML="Enter valid phone number";
       
        return false;
      }
    /*validate email*/
    var email=document.myForm.email.value;  
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if (!email.match(validRegex) ){ 
        document.getElementById("email_error").innerHTML="Please enter a valid e-mail address";

    return false;  
    } 
   
    /*validation for fburl*/
    var fb_url=document.myForm.fb_url.value;
    if(fb_url){
      if(!(/^(https?:\/\/)?((w{3}\.)?)facebook.com\/.*/i.test(fb_url))) {
        document.getElementById("fburl_error").innerHTML="Please enter a valid facebook link";
        return false;
    }
    }
   
    
    
    /*validation for linkedIn url*/
    
    var linkedin_url=document.myForm.linkedin_url.value;
    var validlinkedin_Url= /(^((https?:\/\/)?((www|\w\w)\.)?)linkedin\.com\/)((([\w]{2,3})?)|([^\/]+\/(([\w|\d-&#?=])+\/?){1,}))$/gmi;
   
    if(linkedin_url){
    if (!linkedin_url.match(validlinkedin_Url) ){
       
        document.getElementById("linkedin_url_error").innerHTML="Please enter a valid linkedIn link";
        return false;
    }}

    /*validation for twitter url*/
	var twitter_url=document.myForm.twitter_url.value;
    var validtwitter_Url=/(https:\/\/twitter.com\/(?![a-zA-Z0-9_]+\/)([a-zA-Z0-9_]+))/;
    if(twitter_url){
    if (!twitter_url.match(validtwitter_Url) ){
       
        document.getElementById("twitter_url_error").innerHTML="Please enter a valid twitter link";
        return false;
    }
  	}



}
/*fuction to hide error msg*/
function hideFormError(x) {
  
  x.innerHTML="";
}
/*change profile picture*/
var loadFile = function (event) {
    var image = document.getElementById("output");
    image.src = URL.createObjectURL(event.target.files[0]);
  };