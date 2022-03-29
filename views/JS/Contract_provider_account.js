function validateForm() {
    var fname = document.myForm.fname.value;

    var brief_intro
    /*validate first name*/
    if (fname == "") {

        document.getElementById("fname_error").innerHTML = "First name must be filled out";

        return false;
    }
    /*validate last name*/
    var lname = document.myForm.lname.value;
    if (lname == "") {

        document.getElementById("lname_error").innerHTML = "Last name must be filled out";

        return false;
    }

    var address = document.myForm.address.value;
    console.log(address)
    if (address == "") {

        document.getElementById("address_error").innerHTML = "Address must be filled out";

        return false;
    }


    /*validate phone number*/
    var phone_number = document.myForm.phone_number.value;
    
    if (isNaN(phone_number) || phone_number.length != 10) {
        document.getElementById("phonenumber_error").innerHTML = "Enter valid phone number";

        return false;
    }

    /*validate NIC number*/
    var nic = document.myForm.nic.value;
    var cnic_no_regex = new RegExp('^[0-9+]{9}[vV|xX]$');
    var new_cnic_no_regex = new RegExp('^[0-9+]{12}$');

    if (!(nic.length == 10 && cnic_no_regex.test(nic)) && !(nic.length == 12 && new_cnic_no_regex.test(nic))) {
        document.getElementById("nic_error").innerHTML = "Enter valid NIC number";
        return false;
    }
    /*if (nic.length == 10 && cnic_no_regex.test(nic)) {
     return true;
  
    } else if (nic.length == 12 && new_cnic_no_regex.test(nic)) {
      return true;
    } 
    else {
      document.getElementById("nic_error").innerHTML="Enter valid NIC number";
      return false;
    }*/

    /*validate email*/

    var email = document.myForm.email.value;
    var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if (!email.match(validRegex)) {
        document.getElementById("email_error").innerHTML = "Please enter a valid e-mail address";

        return false;
    }

    /*validation for fburl*/
    var url = document.myForm.fb_url.value;
    console.log(url);
    if (!(/^(https?:\/\/)?((w{3}\.)?)facebook.com\/.*/i.test(url))) {
        document.getElementById("fb_url_error").innerHTML = "Please enter a valid facebook link";
        return false;
    }

    /*validation for linkedIn url*/
    var linkedin_url = document.myForm.linkedin_url.value;
    var validlinkedin_Url = /(^((https?:\/\/)?((www|\w\w)\.)?)linkedin\.com\/)((([\w]{2,3})?)|([^\/]+\/(([\w|\d-&#?=])+\/?){1,}))$/gmi;
    console.log(linkedin_url);
    if (!linkedin_url.match(validlinkedin_Url)) {

        document.getElementById("linkedin_url_error").innerHTML = "Please enter a valid linkedIn link";
        return false;
    }

    /*validation for twitter url*/
    var twitter_url = document.myForm.twitter_url.value;
    var validtwitter_Url = /(https:\/\/twitter.com\/(?![a-zA-Z0-9_]+\/)([a-zA-Z0-9_]+))/;

    if (!twitter_url.match(validtwitter_Url)) {

        document.getElementById("twitter_url_error").innerHTML = "Please enter a valid twitter link";
        return false;
    }
}

/*fuction to hide error msg*/
function hideFormError(x) {

    x.innerHTML = "";
}

/*change profile picture*/
var loadFile = function (event) {
    var image = document.getElementById("output");
    image.src = URL.createObjectURL(event.target.files[0]);
};

/*fuction to hide error msg*/
function hideFormError(x) {

    x.innerHTML = "";
}

/*change profile picture*/
var loadFile = function (event) {
    var image = document.getElementById("output");
    image.src = URL.createObjectURL(event.target.files[0]);
};


//after click my contract post then load a applied job seekers for relavent contracts
function loadAppliedJobseekers() {

    window.open("http://localhost/ict_jobseeker_44/Jobseeker/Search_jobseeker", "_self");
}

//load company posted jobs
function my_jobs(){

    const xhr = new XMLHttpRequest();
   
      //establish connection
      xhr.open("POST", "http://localhost/ict_jobseeker_44/Contract_provider/Contract_provider_account/load_cp_contracts");
      
  
      let company = document.querySelector(".my_jobs_row_container");
      xhr.onload = function () {
  
          if (xhr.status == 200) {
              const company_data1 = xhr.responseText; //ajax response data
             
            const company_data2 = JSON.parse(company_data1); //convert the response data to js object
           
              company.innerHTML = ``;
                 
                  if(company_data2 != null) {
         
                      for (var s of company_data2) {
                    
                        company.innerHTML += ` 
                        
                        <div class="my_jobs_row" title = "click to view details of applied jobseekers" onclick="return loadAppliedJobseekers()">
              <div class="job_id">
                   <div class="job_id_text">
                    Contract ID
                   </div>
                   <div class="job_id_data">
                      ${s.Contract_ID}
                   </div>

               </div> 

               <div class="job_title">
                    <div class="job_title_text">
                        Contract Title
                    </div>
                    <div class="job_title_data">
                    ${s.Contract_title}
                    </div>

              </div> 

            <div class="icon">
                <a href="http://localhost/ict_jobseeker_44/Contracts/View_contract/View_contractjs/${s.Contract_ID}" style="text-decoration: none;">
                <i title ="View post"class="fa fa-eye" id="view"  aria-hidden="true"></i>
                </a>
                <a href="http://localhost/ict_jobseeker_44/Contracts/Post_contract" style="text-decoration: none;">
                <i title ="Edit post" class="fa fa-pencil" aria-hidden="true"></i>
                </a>
            
               
                <a href="http://localhost/ict_jobseeker_44/Contract_provider/Contract_provider_account/delete_contract/${s.Contract_ID}/${s.Contractcatergory_ID }" style="text-decoration: none;">
                <i title ="Delete post" class="fa fa-trash-o"  id="delete" aria-hidden="true"></i>
                </a>
                
            </div>

        </div>
                        
                       `;
                      }
                    } 
  

              }
  
  
          }
        
          xhr.send();
  
          return false;
}