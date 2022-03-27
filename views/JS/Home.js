// counting parts for 
// window.onload = $(".posted-jobs-value").counterUp({delay:10, time:1000});
// window.onload = $(".companies-value").counterUp({delay:10, time:1000});
// window.onload = $(".jobseekers-value").counterUp({delay:10, time:1000});

function loadRateAndreview(){
   
    window.open("http://localhost/ict_jobseeker_44/Sys_rate","_self");
}

//to change the view of service boxes when hover
const service_box_resume = document.getElementById("create-resume");
const service_box_jobr = document.getElementById("job-rankings");
const service_box_lm = document.getElementById("learning-materials");
const service_box_counselling = document.getElementById("counselling-services");

//main boxes
const service_box_resume_main = document.getElementById("service-main-content-resume");
const service_box_jobr_main = document.getElementById("service-main-content-job-ranking");
const service_box_lm_main = document.getElementById("service-main-content-learning-materials");
const service_box_counselling_main = document.getElementById("service-main-content-counselling");

//box headers and texts
const service_resume_header = document.getElementById("create-resume-header");
const service_resume_text = document.getElementById("create-resume-text");
const service_jobr_header = document.getElementById("job-rankings-header");
const service_jobr_text = document.getElementById("job-rankings-text");
const service_lm_header = document.getElementById("learning-materials-header");
const service_lm_text = document.getElementById("learning-materials-text");
const service_counselling_header = document.getElementById("counselling-header");
const service_counselling_text = document.getElementById("counselling-text");

//default text for service boxes
const service_box_resume_default = document.getElementById("service-default-content-resume");
const service_box_jobr_default = document.getElementById("service-default-content-jobr");
const service_box_lm_default = document.getElementById("service-default-content-lm");
const service_box_counselling_default = document.getElementById("service-default-content-counselling");

//resume
service_box_resume_main.addEventListener("mouseover", ()=>{
    service_resume_header.innerHTML = `Create and manage create resume`;
    service_resume_text.innerHTML = `By clicking this section you can create a resume for free and can manage it as a jobseeker. we provide different templates to create your own resume`;
    service_box_resume_default.innerHTML = ``;

});

service_box_resume_main.addEventListener("mouseout", ()=>{
    service_resume_header.innerHTML = ``;
    service_resume_text.innerHTML = ``;
    service_box_resume_default.innerHTML = `Create and manage create resume`;

});

//job ranking
service_box_jobr_main.addEventListener("mouseover", ()=>{
    service_jobr_header.innerHTML = `Job Rankings`;
    service_jobr_text.innerHTML = `In this field you can explore job rankings according to posted jobs in our system.`;
    service_box_jobr_default.innerHTML = ``;

});

service_box_jobr_main.addEventListener("mouseout", ()=>{
    service_jobr_header.innerHTML = ``;
    service_jobr_text.innerHTML = ``;
    service_box_jobr_default.innerHTML = `Job Rankings`;

});
// Learning Materials
service_box_lm_main.addEventListener("mouseover", ()=>{
    service_lm_header.innerHTML = `Learning Materials`;
    service_lm_text.innerHTML = `We provide learning material's links which are recommended by the ICT community`;
    service_box_lm_default.innerHTML = ``;

});

service_box_lm_main.addEventListener("mouseout", ()=>{
    service_lm_header.innerHTML = ``;
    service_lm_text.innerHTML = ``;
    service_box_lm_default.innerHTML = `Learning Materials`;

});

//Counselling and mock interviews
service_box_counselling_main.addEventListener("mouseover", ()=>{
    service_counselling_header.innerHTML = `Counselling & Mock interviews`;
    service_counselling_text.innerHTML = `Before selecting a job you can consume a counselling service from our expertise and you can take mock interviews to get a better experience before facing an interview`;
    service_box_counselling_default.innerHTML = ``;

});

service_box_counselling_main.addEventListener("mouseout", ()=>{
    service_counselling_header.innerHTML = ``;
    service_counselling_text.innerHTML = ``;
    service_box_counselling_default.innerHTML = `Counselling & Mock interviews`;

});

//load job according to search
function ajaxload(query = '', page_number = 1) {
  
    if(query != '' ){
     
       document.getElementById("big_container").style.visibility = "hidden";
      
    
    }
        //pass the page number and search query
        const form_data = new FormData();
        form_data.append('query', query);
        form_data.append('page', page_number);
        const urlparam = new URLSearchParams(form_data);
    
    
        //initialize connection
        const xhr = new XMLHttpRequest();
        
        //establish connection
        xhr.open("POST", "http://localhost/ict_jobseeker_44/Jobs_main_page/search_job");
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
    
        let features_job1 = document.querySelector(".div_for_jobs");
        xhr.onload = function () {
    
            if (xhr.status == 200) {
                const job_data1 = xhr.responseText; //ajax response data
               
              const job_data2 = JSON.parse(job_data1); //convert the response data to js object
              let  search = JSON.parse(job_data2.data); //convert the data array into js object
             let  category = JSON.parse(job_data2.category); //convert the category array into js object
              //search = JSON.parse(this.response);
            
    
            
    
   
              features_job1.innerHTML = ``;
                   
                    if(search != null) {
           
                        for (var s of search) {
                      
                         features_job1.innerHTML += ` 
                          
                         <div class="features_job_row" onclick="jobView( ${s.Job_ID})">
                         <div class="features_job_row_picture">
                             <img src='<?php echo URL ?>views/images/Jobs_main_page/3.JFIF'>
                
                
                         </div>
                         <div class="features_job_row_job_and_company">
                             <div class="features_job_row_job">
                             ${s.Job_title}
                
                
                             </div>
                             <div class="features_job_row__company">
                             ${s.Company_name}
                             </div>
                         </div>
                         <div class="features_job_row_location">
                
                             <i class="fas fa-map-marker-alt"></i>
                
                             <div class="features_job_row_location_name">
                             ${s.Job_city}
                             </div>
                         </div>
                         <div class="features_job_row_job_type">
                             <i class="fas fa-clock"></i>
                             <div class="features_job_row_job_type_name">
                             ${s.Job_type}
                             </div>
                         </div>
                
                         
                            
                
                                 <div class="features_job_row_deadline_date_container">
                                     <div>Expires on </div>
                                     <div class="features_job_row_deadline_date">
                                     ${s.Job_deadline}
                                     </div>
                                 </div>
                
                
                
                       
                
                     </div>
                          
                         `;
                        }
                      } else {
                                      
                      }
    
    
                  //  document.getElementById("features_job").innerHTML = features_job1;
                    document.getElementById("pagination-link").innerHTML = job_data2.pagination;
                    document.getElementById("total-data").innerHTML = job_data2.total_data;
                    // document.getElementById("page_no").innerHTML = job_data2.page_no;
    
                }
    
    
            }
            for (var pair of form_data.entries()) {
                console.log(pair);
            }
            xhr.send(urlparam);
        }
