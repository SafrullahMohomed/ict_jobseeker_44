
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