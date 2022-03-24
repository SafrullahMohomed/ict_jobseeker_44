
  function successPost(){
    window.open("http://localhost/ict_jobseeker_44/Jobs/Success_post","_self");
  }

  /*fuction to hide error msg*/
function hideFormError(x) {
  x.innerHTML="";
  }
//if user edit company name then change value of html input

  function passCompanyName(new_company_name){
   var n= new_company_name;
    document.getElementById("Companyname").value=n;
    console.log(document.getElementById("Companyname").value);
  }

  //show alert to user to give warrning about company name changes
  
  function companyNameWarning(){
    
confirm("Your company profile company name also changes as above mentioned company name.If you want to change it click on the user icon in the top right corner then go to my profile and edit");
  }