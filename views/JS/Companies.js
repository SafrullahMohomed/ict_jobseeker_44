/*after click on the company details box for view more details about company(company profile)*/

function loadCompanyProfile(){
 
    window.open("../company_profile/company_profile.html","_self");
 }

 /* function all_companies(){

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
        
   


 } */
//load job according to search
function ajaxload(query = '', page_number = 1) {
  

      //pass the page number and search query
      const form_data = new FormData();
      form_data.append('query', query);
      form_data.append('page', page_number);
      const urlparam = new URLSearchParams(form_data);
  
  
      //initialize connection
      const xhr = new XMLHttpRequest();
      
      //establish connection
      xhr.open("POST", "http://localhost/ict_jobseeker_44/Company/Companies/search_company");
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
  
      let company = document.querySelector(".company");
      xhr.onload = function () {
  
          if (xhr.status == 200) {
              const company_data1 = xhr.responseText; //ajax response data
             
            const company_data2 = JSON.parse(company_data1); //convert the response data to js object
            let  search = JSON.parse(company_data2.data); //convert the data array into js object 
  
              company.innerHTML = ``;
                 
                  if(search != null) {
         
                      for (var s of search) {
                    
                        company.innerHTML += ` 
                        
                        <div class="ResourceRow" onclick="company_data( ${s.User_ID})">
                        <div class="Academy">
                        <img src='<?php echo URL ?>views/images/Companies//2.jfif' > 
                        </div>
                        <div class="Tutorial">
                         ${s.Company_name}
                        </div>
                        <!-- <div class="Lesson">
                          <img src="js.png" alt="Lesson icon">
                        </div> -->
                      </div>
                        
                       `;
                      }
                    } else {
                                    
                    }
  
  
                //  document.getElementById("features_job").innerHTML = features_job1;
                  document.getElementById("pagination-link").innerHTML = company_data2.pagination;
                  document.getElementById("total-data").innerHTML = company_data2.total_data;
                  // document.getElementById("page_no").innerHTML = job_data2.page_no;
  
              }
  
  
          }
          for (var pair of form_data.entries()) {
              console.log(pair);
          }
          xhr.send(urlparam);
      }
  
  
  
  ajaxload();
  


 //for veiw relevent company details

 function company_data(User_ID){
  window.open("http://localhost/ict_jobseeker_44/Company/Company_profile/Company_profilejs/"+User_ID,"_self");
 }