
// alert("GGSS");
function validateForm() 
{
    
    
    /*validate Learning Material Link*/
    var MaterialLink=document.myForm.MaterialLink.value;  
    if (MaterialLink == "")
    {
        
        document.getElementById("MaterialLink_error").innerHTML="Material link must be filled out";
     
        return false;
    }

    
    var validRegex=/^((https?|ftp|smtp):\/\/)?(www.)?[a-z0-9]+(\.[a-z]{2,}){1,3}(#?\/?[a-zA-Z0-9#]+)*\/?(\?[a-zA-Z0-9-_]+=[a-zA-Z0-9-%]+&?)?$/;
    if(MaterialLink)
    {
        if (!MaterialLink.match(validRegex) )
        {
           
            document.getElementById("MaterialLink_error").innerHTML="Please enter a valid Material link";
            return false;
        }
    }

    /*validate Learning Material Title*/
    var MaterialTitle=document.myForm.MaterialTitle.value;  
    if (MaterialTitle == "")
    {
      
        document.getElementById("MaterialTitle_error").innerHTML="Material Title must be filled out";
     
        return false;
    }
    checkButton();
}

/*fuction to hide error msg*/
function hideFormError(x) 
{
  
    x.innerHTML="";
} 

// validate the radio buttons
function checkButton() 
{    
    if(document.getElementById('Tutorials').checked) {   
        document.getElementById("disp").innerHTML   
            = document.getElementById("Tutorials").value   
            + " is selected";   
    }   
    else if(document.getElementById('Videos').checked) {   
        document.getElementById("disp").innerHTML   
            = document.getElementById("Videos").value   
            + " is selected";     
    }    
    else {   
        document.getElementById("error").innerHTML   
            = "You have not selected any category";   
    }   
  }

 

 // declaring html elements 
 const academyDiv=document.querySelector('.AcademyImgRow');
 const academyLogo=document.querySelector('#AcademyImg');
 const academyFile=document.querySelector('#AcademyFile');
 const academyBtnUpload=document.querySelector('#AcademyLogoBtnUpload');
//  const resourceBtnUpload=document.querySelector('#AcademyLogoBtnUpload');
 
 //if user hover on academy image div
//   alert("GGSS");
//  academyDiv.addEventListener('mouseenter',function()
//  {
    
//     academyBtnUpload.style.display="block";
//  }
//  );

//   //if user hover out academy image div
//  academyDiv.addEventListener('mouseleave',function()
//  {
//     academyBtnUpload.style.display="none";
//  }
//  );


  // declaring html elements 
  const resourceDiv=document.querySelector('.ResourceImgRow');
  const resourceLogo=document.querySelector('#ResourceImg');
  const resourceFile=document.querySelector('#ResourceFile');
  const resourceBtnUpload=document.querySelector('#ResourceLogoBtnUpload');
 //  const resourceBtnUpload=document.querySelector('#AcademyLogoBtnUpload');
  
  //if user hover on academy image div
 //  alert("GGSS");
//  resourceDiv.addEventListener('mouseenter',function()
//   {
     
//     resourceBtnUpload.style.display="block";
//   }
//   );
 
//    //if user hover out academy image div
//    resourceDiv.addEventListener('mouseleave',function()
//   {
//     resourceBtnUpload.style.display="none";
//   }
//   );


  academyFile.addEventListener('change',function()
  {
    const choosedAcademyFile=this.files[0];

    if(choosedAcademyFile)
    {
        const AcademyReader=new FileReader();
        AcademyReader.addEventListener('load',function()
        {
            academyLogo.setAttribute('src',AcademyReader.result);
        }
        );
        AcademyReader.readAsDataURL(choosedAcademyFile);
    }
  }
  );

  resourceFile.addEventListener('change',function()
  {
    const choosedResourceFile=this.files[0];

    if(choosedResourceFile)
    {
        const ResourceReader=new FileReader();
        ResourceReader.addEventListener('load',function()
        {
            resourceLogo.setAttribute('src',ResourceReader.result);
        }
        );
        ResourceReader.readAsDataURL(choosedResourceFile);
    }
  }
  );
 
 

