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

//after click my job post then load a applied job seekers for relavent job
function loadAppliedJobseekers(){

  window.open("http://localhost/ict_jobseeker_44/Jobseeker/Search_jobseeker","_self");
}

//load company posted jobs
function my_jobs(){


  const xhr = new XMLHttpRequest();
 
    //establish connection
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Company/Company_account/load_company_jobs");
    

    let company = document.querySelector(".my_jobs_row_container");
    xhr.onload = function () {

        if (xhr.status == 200) {
            const company_data1 = xhr.responseText; //ajax response data
           
          const company_data2 = JSON.parse(company_data1); //convert the response data to js object
           console.log(company_data1)
            company.innerHTML = ``;
               
                if(company_data2 != null) {
       
                    for (var s of company_data2) {
                  
                      company.innerHTML += ` 
                      
                     

        
                      <div class="my_jobs_row" title = "click to view details of applied jobseekers" onclick="return loadAppliedJobseekers()">
                  <!-- <a href="<?php echo URL ?>Jobseeker/Search_jobseeker" style="text-decoration: none;"> -->
                         <div class="job_id">
                             <div class="job_id_text">
                                Job ID
                             </div>
                             <div class="job_id_data">
                                 ${s.Job_ID}
                             </div>
          
                         </div> 
                         <div class="job_title">
                              <div class="job_title_text">
                              Job Title
                              </div>
                              <div class="job_title_data">
                              ${s.Job_title}
                              </div>
          
                          </div> 
                          <div class="icon">
                             <a href="http://localhost/ict_jobseeker_44/Jobs/View_job/View_jobjs/${s.Job_ID}" style="text-decoration: none;">
                              <i title="View post" class="fa fa-eye"id="view"  aria-hidden="true"></i>
                              </a>
                              <a href="http://localhost/ict_jobseeker_44/jobs/Post_job" style="text-decoration: none;">
                              <i  title="Edit post" class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                              
                                <a href="http://localhost/ict_jobseeker_44/Company/Company_account/delete_job/${s.Job_ID}/${s.JobCategory_ID}" style="text-decoration: none;">
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