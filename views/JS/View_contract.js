function contractProviderProfile(){
    
    window.open("http://localhost/ict_jobseeker_44/Contracts/Contract_provider_profile","_self");
}

function BidContract(){
    
    window.open("http://localhost/ict_jobseeker_44/Jobseeker/BidContract","_self");
}


      // /*load  bids*/
      // function BidLoad() {
      //   // alert("SSSSSS");
      //   var xhr = new XMLHttpRequest();
      //   xhr.open("POST", "http://localhost/ict_jobseeker_44/Contracts/View_contract/select_query_bid_contract_data");
        
      //   xhr.onload = function () {
      //     let Bid = document.querySelector(".bid_row");
         
      //     search = JSON.parse(this.response);
      //     // console.log(search)

        
      //     Bid.innerHTML = "";
   
      //     if (search!==null) {
           
      //       for (var s of search) {

            
      //       //     Bid.innerHTML += `   <div class="features_contract_row_contract">
      //       //   <div class="features_contract_row_contract_title">
      //       //   ${s.Contract_title}
      //       //   </div>
      //       //   <div class="features_contract_row_contract_description">
      //       //   ${s.Contract_description}
      //       //   </div>
      //       //   <div class="features_contract_row_contract_expiredate_and_avg_bid">
      //       //     <div class="features_contract_row_contract_expiredate_container">
      //       //       <div class="features_contract_row_contract_expiredate_container_expirson">
      //       //         Expires on
      //       //       </div>
      //       //     <div class="features_contract_row_contract_expiredate_container_expiredate">
      //       //     ${s.Contract_deadline}
      //       //     </div>
      //       //     </div>
      //       //     <div class="features_contract_row_contract_bid_container_avg_bid">
      //       //       <div class="features_contract_row_contract_bid_container_avg_bid_avg_text">
      //       //         Avg 
      //       //       </div>
      //       //       <div class="features_contract_row_contract_bid_container_avg_bid_currency_type">
      //       //   RS
      //       //       </div>
      //       //       <div class="features_contract_row_contract_bid_container_avg_bid_avg_no">
      //       //       ${s.Contract_bid_avg}
      //       //       </div>
      //       //       </div>
              
              
              
      //       //   </div>
              
                
      //       //   <div class="features_contract_row_contract_bid_container">
              
      //       //   <div class="features_contract_row_contract_bid_container_count_and_bid_button">
      //       //   <div class="features_contract_row_contract_bid_container_count">
      //       //   <div class="features_contract_row_contract_bid_container_count_no">
      //       //     No bids yet
      //       //   </div>
      //       //   <div class="features_contract_row_contract_bid_container_count_bid_text"></div>
      //       //   </div>
      //       //     <button class="features_contract_row_contract_bid_container_count_bid_button">
      //       //   Bid now
      //       //     </button>
      //       //   </div>
      //       //   </div>
              
      //       //     </div>`;
      //           Bid.innerHTML += `    <div class="bid_row">
      //               <div class="first">
      //                <div class="name">
      //                Maneesha Yohani
      //                </div>
      //                <div class="rs_price">
      //                <div class="rs">
      //                       Rs.
      //                   </div>
      //                   <div class="price">
      //                       ${s.Bid_value}
      //                   </div>  
      //                </div>
                     
      //               </div>
      //               <div class="second">
      //                   ${s.Bid_proposal}
      //               </div>
      //               </div>
              
      //        `;
      //       }
      //     } else {
      //       Contract.innerHTML = `<div class="product">
      //                        <button type = "button" class = "btn-cart" >
      //                            Add quatation
      //                              </button>
      //                             <h2 class="sm-title">Sorry,We don't have such a product,plaese requesrt a quatation <h2>
      //                           </div>`;
      //     }
      //   };
      //   xhr.send();
      //   return false;
      
      //   // console.log("hello");
      // }

      