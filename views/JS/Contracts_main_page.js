let data={
  'Contract_ID':0
};


function Bidnow(){
    window.open("");
    
    }
    /*after click on the category box*/
    function viewContract(data){
   
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "http://localhost/ict_jobseeker_44/Contracts/View_contract/view_clicked_contract2/"+data);
      
      xhr.onload = function () {
        //job_detail_sub_container mean contract_detail_sub_container (I used same class name for both because of css )
          let job_detail_sub_container = document.querySelector(".job_detail_sub_container");
         
         s = JSON.parse(this.response);
         alert(s)
      
       job_detail_sub_container.innerHTML = "";
  
      
          
           job_detail_sub_container.innerHTML += `  
            
           <div class="job_detail_left">
           <div class="job_detail_title_and_apply_button">
               <div class="job_detail_title_and_company">
                   <div class="job_detail_title">
                   ${s.Contract_title}
                      
                   </div>
                   <div class="company">
                   ${s.First_name} ${s.Last_name}
                     
                   </div>
                   <div class="social_media_icons">
                       <i class="fab fa-facebook-square"></i>
                       <i class="fab fa-linkedin"></i>
                       <i class="fab fa-twitter-square"></i>
                   </div>
                   
   
               </div>
              
               <button onclick="BidContract()">Bid Now</button>
   
           </div>
           <div class="job_description_title">
               Contract Description
           </div>

           <div class="job_description_text">
              
           ${s.Contract_description}  

           </div>
           
           
           
           
       </div>
       <div class="job_detail_right">
           <div class="company_details">
              <!--
<div class="mock_interview">
                   We would like to supply mock interviews
               </div>
              --> 
              <p>
               Click here to veiw contract provider details</p> 
              <button id="clickme" onclick="contractProviderProfile()"> Click Here</button>
           </div>
           <div class="job_overview">
               <div class="job_overview_text">
                   Contract overview
               </div>
               <div class="application_deadline">
                   <div class="application_deadline_text">
                       contract deadline :
                   </div>
                   <div class="application_deadline_date">
                   ${s.Contract_deadline}  

                   </div>
                  
               </div>
               <div class="salary">
                       <div class="salary_text">
                           Avg Bid (RS) :
                       </div>
                       <div class="salary_number">
                       ${s.Contract_bid_avg}  
                       </div>
               </div>
              
              <div class="phone_number">
               <div class="phone_number_text">
                   Phone number :
               </div>
               <div class="phone_number_answer">
               ${s.Phone_number}  
               </div>
          </div>
          <div class="Email">
           <div class="Email_text">
                  E-mail :
           </div>
           <div class="Email_answer">
           ${s.Email}  
           </div>
      </div>

           </div>
           
       </div>
            
           `;
          
      };
      xhr.send();
    
      return false;
    
    }

   
    function loadmore() {
 
        var more_jobs = document.getElementById("more");
        var more_btn1 = document.getElementById("more1");//button
        var btnText = document.getElementById("loadmore_btn");

        btnText.style.display="none";
        more_jobs.style.display="inline";
        more_jobs.style.margin="0";
        //more_btn1.style.display="inline-block";
      
      }
      /*after click on the job detail box for view more details about job*/
     
     /* function viewContract()
      {
        window.open("http://localhost/ict_jobseeker_44/Contracts/View_contract","_self");
      }*/

 /*after click on the contract detail box for view more details about contract*/
 function contractView(Contract_ID)
 {
 
  data['Contract_ID']=Contract_ID;
   $.post("http://localhost/ict_jobseeker_44/Contracts/View_contract/view_clicked_contract",
  data,
   function(data,status){
  
   });

  //after load data from database then load a view job page
   window.open("http://localhost/ict_jobseeker_44/Contracts/View_contract/View_contractjs/"+Contract_ID,"_self");




  }





      /*load  contracts*/
      function contractLoad() {
        
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "http://localhost/ict_jobseeker_44/Contracts_main_page/select_post_contract_data");
        
        xhr.onload = function () {
          let Contract = document.querySelector(".features_contract_row");
         
          search = JSON.parse(this.response);
          
          
        
          Contract.innerHTML = "";
   
          if (search!==null) {
           
            for (var s of search) {

            
              Contract.innerHTML += `   <div class="features_contract_row_contract" onclick="contractView( ${s.Contract_ID})">
              <div class="features_contract_row_contract_title">
              ${s.Contract_title}
              </div>
              <div class="features_contract_row_contract_description">
              ${s.Contract_description}
              </div>
              <div class="features_contract_row_contract_expiredate_and_avg_bid">
                <div class="features_contract_row_contract_expiredate_container">
                  <div class="features_contract_row_contract_expiredate_container_expirson">
                    Expires on
                  </div>
                <div class="features_contract_row_contract_expiredate_container_expiredate">
                ${s.Contract_deadline}
                </div>
                </div>
                <div class="features_contract_row_contract_bid_container_avg_bid">
                  <div class="features_contract_row_contract_bid_container_avg_bid_avg_text">
                    Avg 
                  </div>
                  <div class="features_contract_row_contract_bid_container_avg_bid_currency_type">
              RS
                  </div>
                  <div class="features_contract_row_contract_bid_container_avg_bid_avg_no">
                  ${s.Contract_bid_avg}
                  </div>
                  </div>
              
              
              
              </div>
              
                
              <div class="features_contract_row_contract_bid_container">
              
              <div class="features_contract_row_contract_bid_container_count_and_bid_button">
              <div class="features_contract_row_contract_bid_container_count">
              <div class="features_contract_row_contract_bid_container_count_no">
                No bids yet
              </div>
              <div class="features_contract_row_contract_bid_container_count_bid_text"></div>
              </div>
                <button class="features_contract_row_contract_bid_container_count_bid_button">
              Bid now
                </button>
              </div>
              </div>
              
                </div>
           
              
             `;
            }
          } else {
            Contract.innerHTML = ``;
          }
        };
        xhr.send();
        return false;
      
        // console.log("hello");
      }