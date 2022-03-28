// alert("Welcome")
function validateForm() {
    var fname=document.myForm.fname.value;  
   
   console.log(fname) 
    var brief_intro
    /*validate first name*/
    if (fname == "") {
      
      document.getElementById("fname_error").innerHTML="First name must be filled out";
   
      return false;
    }
    /*validate last name*/
    var lname=document.myForm.lname.value;  
    if (lname == "") {
      
        document.getElementById("lname_error").innerHTML="Last name must be filled out";
     
        return false;
      }

      /*validate email*/
      var email=document.myForm.email.value;  
      var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    
      if (!email.match(validRegex) ){ 
          document.getElementById("email_error").innerHTML="Please enter a valid e-mail address";
    
      return false;  
      } 
      // alert("SandaruwanGamage");
      // Validate_dropdownbutton();

      /*validate age*/
    var age=document.myForm.age.value;  
    if (age == "") {
      
        document.getElementById("age_error").innerHTML="Age must be filled out";
     
        return false;
      }
  
     /*validate phone number*/
     var phone_number=document.myForm.phone_number.value;
     if(isNaN(phone_number) ||phone_number.length !=10) {
         document.getElementById("phonenumber_error").innerHTML="Enter valid phone number";
        
         return false;
       }
  
       /*validate place of residence*/
      var address=document.myForm.address.value; 
      // console.log(address) 
      if (address == "") {
        
          document.getElementById("address_error").innerHTML="Place of residence must be filled out";
        
            return false;
          }
         
      /*validate about me*/
      var brief_description=document.myForm.brief_description.value; 
      
      if (brief_description == "") {
        
          document.getElementById("brief_description_error").innerHTML="Enter a brief description about your self";
        
            return false;
          }
         
      /*validate experience*/
      var experience=document.myForm.experience.value; 
  
      if (experience == "") 
      {
        
          document.getElementById("experience_error").innerHTML="Enter Your Overall Professional Experience";
        
            return false;
      }

       /*validate skills*/
       var skills=document.myForm.skills.value; 
 
       if (skills == "") 
       {
         
           document.getElementById("skills_error").innerHTML="Enter Your Skills briefly";
         
             return false;
       }

       /*validate education*/
       var education=document.myForm.education.value; 

       if (education == "") 
       {
         
           document.getElementById("education_error").innerHTML="Enter Your Educational Qualifications";
         
             return false;
       }

    /*validation for linkedIn url*/
    var linkedin_url=document.myForm.linkedin_url.value;
    var validlinkedin_Url= /(^((https?:\/\/)?((www|\w\w)\.)?)linkedin\.com\/)((([\w]{2,3})?)|([^\/]+\/(([\w|\d-&#?=])+\/?){1,}))$/gmi;
    //console.log(linkedin_url);
    if (!linkedin_url.match(validlinkedin_Url) ){
       
        document.getElementById("linkedin_url_error").innerHTML="Please enter a valid linkedIn link";
        return false;
    }
  
   
    /*validation for fburl*/
    var url=document.myForm.fb_url.value;
    //console.log(url);
    if(!(/^(https?:\/\/)?((w{3}\.)?)facebook.com\/.*/i.test(url))) {
        document.getElementById("fb_url_error").innerHTML="Please enter a valid facebook link";
        return false;
    }
    
  
    /*validation for twitter url*/
  var twitter_url=document.myForm.twitter_url.value;
    var validtwitter_Url=/(https:\/\/twitter.com\/(?![a-zA-Z0-9_]+\/)([a-zA-Z0-9_]+))/;
  
    if (!twitter_url.match(validtwitter_Url) ){
       
        document.getElementById("twitter_url_error").innerHTML="Please enter a valid twitter link";
        return false;
    }	

     /*validation for web url*/
  var web_url=document.myForm.web_url.value;
    var validweb_Url=/^((https?|ftp|smtp):\/\/)?(www.)?[a-z0-9]+\.[a-z]+(\/[a-zA-Z0-9#]+\/?)*$/;
  
    if (!web_url.match(validweb_Url) ){
       
        document.getElementById("web_url_error").innerHTML="Please enter a valid web link";
        return false;
    }	
  }

  function Validate_dropdownbutton()
    {
      var e = document.getElementById("dropdownbutton");
      var strUser = e.options[e.selectedIndex].value;

      var strUser1 = e.options[e.selectedIndex].text;
      if(strUser==0)
      {
          document.getElementById("gender_error").innerHTML="Please select your gender";
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
  
  /*fuction to hide error msg*/
  function hideFormError(x) {
    
    x.innerHTML="";
  }
  /*change profile picture*/
  var loadFile = function (event) {
      var image = document.getElementById("output");
      image.src = URL.createObjectURL(event.target.files[0]);
    };

  // declaring html elements 
  // const profileDiv=document.querySelector('.row1');
  // const profilePicImg=document.querySelector('#output');
  // const profilePicFile=document.querySelector('#profile_pic');
  // const profileBtnUpload=document.querySelector('#ProfilePicBtnUpload');


  // profilePicFile.addEventListener('change',function()
  // {
  //   const choosedprofilePicFile=this.files[0];

  //   if(choosedprofilePicFile)
  //   {
  //       const ProfReader=new FileReader();
  //       ProfReader.addEventListener('load',function()
  //       {
  //         profilePicImg.setAttribute('src',ProfReader.result);
  //       }
  //       );
  //       ProfReader.readAsDataURL(choosedprofilePicFile);
  //   }
  // }
  // );