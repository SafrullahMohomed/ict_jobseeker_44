


function companyData(User_ID){


var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Company/Company_profile/company_data/"+User_ID);
    
    xhr.onload = function () {
        let detail = document.querySelector(".detail");
        
       s = JSON.parse(this.response);
  
    
     detail.innerHTML = "";


    
        
         detail.innerHTML += `  
          
         <div class="main_details">
            <div class="picture">
            <img src='<?php echo URL ?>views/images/Company_profile/company_logo1.jfif' >
               
            </div>  
            <div class="main_details_text">
               <div class="name">
               ${s.Company_name}
               </div>
               <div class="address">
               ${s.Address}
               </div>
               <div class="phone_number">
               ${s.Phone_number}
               </div>
               <div class="no_of_contracts">
               ${s.Company_posted_job_count} job post
               </div>
               
            </div>  
         </div> 
       
         <div class="description">
         ${s.Description}
         </div>
         <div class="description_vedio">
          <video  controls id="vedioid">
            <source src='<?php echo URL ?>views/video/description_vedio1.mp4' type="video/mp4">
          
            Your browser does not support the video tag.
          </video>
           </div>
         <div class="sub_parts">
      <div class="email">
          <div class="email_text">
            Email
          </div>
          <div class="email_data">
            <a href=" ${s.Email}">  ${s.Email} </a>
          </div>
         
      </div>
      <div class="website">
          <div class="website_text">
              Web site
          </div>
          <div class="website_data">
            <a href=" ${s.Company_website}">  ${s.Company_website}  </a> 
          </div>
        
      </div>
      <div class="social_media">
          <div class="social_media_text">Social media</div>
          <div class="social_media_links">
          <a href="${s.Company_facebook}">   <i  class="fab fa-facebook-square"></i></a> 
          <a href="${s.Company_LinkedIn}">   <i  class="fab fa-linkedin"></i></a>
            <a  href="${s.Company_twitter}"><i  class="fab fa-twitter-square"></i></a>
           </div>
        
      </div>
      

         </div>
          
         `;
        
    };
    xhr.send();
  
    return false;



}