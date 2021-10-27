function Bidnow(){
    window.open("");
    
    }
    /*after click on the category box*/
    function viewContract(){
       
        window.open("../View contract/view_contract.html","_self");
    
    
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
     
      function viewContract()
      {
        window.open("http://localhost/ict_jobseeker_44/Contracts/View_contract","_self");
      }


      /*load  contracts*/
      function contractLoad() {
        
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "http://localhost/ict_jobseeker_44//Contracts_main_page/select_post_contract_data");
        
        xhr.onload = function () {
          let Contract = document.querySelector(".features_contract_row");
         
          search = JSON.parse(this.response);
          //console.log(search[0][0])

        
          Contract.innerHTML = "";
   
          if (search!==null) {
           
            for (var s of search) {

            
              Contract.innerHTML += `   <div class="features_contract_row_contract">
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
            Contract.innerHTML = `<div class="product">
                             <button type = "button" class = "btn-cart" >
                                 Add quatation
                                   </button>
                                  <h2 class="sm-title">Sorry,We don't have such a product,plaese requesrt a quatation <h2>
                                </div>`;
          }
        };
        xhr.send();
        return false;
      
        // console.log("hello");
      }