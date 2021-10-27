function validateForm() {

 var contract_name=document.myForm.contract_name.value;  
   

/*validate first name*/
if (contract_name == "") {
  
  document.getElementById("contract_name_error").innerHTML="Project name must be filled out";

  return false;
}
/*validate description*/
var description=document.myForm.description.value;  
if (description.length<100 ) {
  
    document.getElementById("description_error").innerHTML="Project description must be filled with minimum 100 letters";
  
    return false;
  }

  /*validate description*/
var avg_bid=document.myForm.avg_bid.value;  
if (avg_bid=="") {
  
    document.getElementById("avg_bid_error").innerHTML="Please enter average bid price for your project";
  
    return false;
  }


}

/*fuction to hide error msg*/
function hideFormError(x) {
  
  x.innerHTML="";
  }