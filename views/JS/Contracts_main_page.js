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
        //s= toString(this.response)
       // console.log(s)
       // s = JSON.parse(s);
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
                   <a href="${s.Fb_url}">   <i  class="fab fa-facebook-square"></i></a> 
                   <a href="${s.Linkedin_url}">   <i  class="fab fa-linkedin"></i></a>
                     <a  href="${s.Twitter_url}"><i  class="fab fa-twitter-square"></i></a>
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
              <button id="clickme" onclick="functionViewCp(${s.User_ID})"> Click Here</button>
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
                           Budget (RS) :
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





     /*  //load  contracts
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
      } */

      //load job according to search
function ajaxload(query = '', page_number = 1) {


  if(query != '' ){
    document.getElementById("top_trending_categories_container").style.height='0';
    document.getElementById("top_trending_categories_container").style.visibility = "hidden";
    //document.getElementById("top_trending_categories_title").style.visibility = "hidden";
  //  document.getElementById("features_contract").style.marginTop = "0";
 
 }
  //pass the page number and search query
  const form_data = new FormData();
  form_data.append('query', query);
  form_data.append('page', page_number);
  const urlparam = new URLSearchParams(form_data);


  //initialize connection
  const xhr = new XMLHttpRequest();
 
  //establish connection
  xhr.open("POST", "http://localhost/ict_jobseeker_44/Contracts_main_page/search_Contracts");
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")

  let features_contract1 = document.querySelector(".features_contract_row");
  xhr.onload = function () {

      if (xhr.status == 200) {
        const contract_data1 = xhr.responseText; //ajax response data  
        const contract_data2 = JSON.parse(contract_data1); //convert the response data to js object
        let  search = JSON.parse(contract_data2.data); //convert the data array into js object
        let  category = JSON.parse(contract_data2.category); //convert the category array into js object
        //search = JSON.parse(this.response);
        console.log( search );
        let top_trending_categories_container = document.querySelector(".top_trending_categories_container");
       
        top_trending_categories_container.innerHTML= `
        ${(query == '' ) ?

                  `<div class="top_trending_categories_box_row">

                  <div class="top_trending_categories_box"><a href="javascript:ajaxload('${category[0][0]}');">${category[0][0]}</a></div>


                  <div class="top_trending_categories_box"><a href="javascript:ajaxload('${category[1][0]}');">${category[1][0]}</a></div>


                  <div class="top_trending_categories_box"><a href="javascript:ajaxload('${category[2][0]}');">${category[2][0]}</a></div>




                  </div>
                  <!-- <div class="top_trending_categories_box_arrows">
                  <i class="fa fa-chevron-left" ></i>
                  <i class="fa fa-chevron-right" ></i>
                  </div> -->

                  <div class="top_trending_categories_box_row">

                  <div class="top_trending_categories_box"><a href="javascript:ajaxload('${category[3][0]}');">${category[3][0]}</a></div>


                  <div class="top_trending_categories_box"><a href="javascript:ajaxload('${category[4][0]}');">${category[4][0]}</a></div>


                  <div class="top_trending_categories_box"><a href="javascript:ajaxload('${category[5][0]}');">${category[5][0]}</a></div>


                  </div>`

                          
                          :""}
                          
                          
                  `




        features_contract1.innerHTML = ``;
             
              if(search != null) {
     
                  for (var s of search) {
                
                   features_contract1.innerHTML += `  
                   <div class="features_contract_row_contract" onclick="contractView( ${s.Contract_ID})">
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
                    Budget
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
                                
                }


             // document.getElementById("features_contract").innerHTML = features_contract1;
              document.getElementById("pagination-link").innerHTML = contract_data2.pagination;
              document.getElementById("total-data").innerHTML = contract_data2.total_data;
              // document.getElementById("page_no").innerHTML = job_data2.page_no;

          }


      }
      for (var pair of form_data.entries()) {
          console.log(pair);
      }
      xhr.send(urlparam);
  }



ajaxload();