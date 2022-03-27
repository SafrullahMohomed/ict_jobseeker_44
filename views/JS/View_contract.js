function contractProviderProfile(){
    
    window.open("http://localhost/ict_jobseeker_44/Contracts/Contract_provider_profile","_self");
}

function BidContract(){
    
    window.open("http://localhost/ict_jobseeker_44/Jobseeker/BidContract","_self");
   // window.open("http://localhost/ict_jobseeker_44/Contracts/View_contract/select_query_bid_contract_data","_self");


}
/*function when after clickme button for view contract provider details details*/
function functionViewCp(User_ID){

  window.open("http://localhost/ict_jobseeker_44/Contract_provider/Contract_provider_profile/Cp_profilejs/"+User_ID,"_self");
}

      /*load  bids*/
      function BidLoad() {
      

      var xhr = new XMLHttpRequest();
      
        xhr.open("POST", "http://localhost/ict_jobseeker_44/Contracts/View_contract/select_query_bid_contract_data");
       
        xhr.onload = function () {
          let Bid = document.querySelector(".bid_row");
         
        // search = JSON.parse(this.response);
         s =JSON.stringify(search);
       

        // search = JSON.parse(this.response);
         console.log(s);

        
          Bid.innerHTML = "";
   
          if (search!==null) {
           
            for (var s of search) {

            
                Bid.innerHTML += `    <div class="bid_row">
                    <div class="first">
                     <div class="name">
                     Maneesha Yohani
                     </div>
                     <div class="rs_price">
                     <div class="rs">
                            Rs.
                        </div>
                        <div class="price">
                            ${s.Bid_value}
                        </div>  
                     </div>
                     
                    </div>
                    <div class="second">
                        ${s.Bid_proposal}
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
      
      }

      