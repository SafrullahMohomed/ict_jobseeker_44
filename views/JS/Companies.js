/*after click on the company details box for view more details about company(company profile)*/

function loadCompanyProfile(){
 
    window.open("../company_profile/company_profile.html","_self");
 }

 function all_companies(){

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Company/Companies/load_all_companies");
    
    xhr.onload = function () {
        let company = document.querySelector(".company");
        search= JSON.parse(this.response);
     
       company.innerHTML = "";
       if (search!==null) {
       
        for (var s of search) {
      
          company.innerHTML += `  
        
          
         <div class="ResourceRow" onclick="company_data( ${s.User_ID})">
        <div class="Academy">
        <img src='<?php echo URL ?>views/images/Companies//2.jfif' > 
        </div>
        <div class="Tutorial">
         ${s.company_name}
        </div>
        <!-- <div class="Lesson">
          <img src="js.png" alt="Lesson icon">
        </div> -->
      </div>

      
          
         `;
        }
      } else {
                      
      }
    };
    xhr.send();
    return false;
        
   


 }
 //for veiw relevent company details

 function company_data(User_ID){
  window.open("http://localhost/ict_jobseeker_44/Company/Company_profile/Company_profilejs/"+User_ID,"_self");
 }