// alert("GSSS");

//  /*load  contracts*/
//  function contractLoad() {
        
//     var xhr = new XMLHttpRequest();
//     xhr.open("POST", "http://localhost/ict_jobseeker_44/Contracts_main_page/select_post_contract_data");
    
//     xhr.onload = function () {
//       let Contract = document.querySelector(".features_contract_row");
     
//       search = JSON.parse(this.response);
//       //console.log(search[0][0])

    
//       Contract.innerHTML = "";

//       if (search!==null) {
       
//         for (var s of search) {

        
//           Contract.innerHTML += `   <div class="features_contract_row_contract">
//           <div class="features_contract_row_contract_title">
//           ${s.Contract_title}
//           </div>
//           <div class="features_contract_row_contract_description">
//           ${s.Contract_description}
//           </div>
//           <div class="features_contract_row_contract_expiredate_and_avg_bid">
//             <div class="features_contract_row_contract_expiredate_container">
//               <div class="features_contract_row_contract_expiredate_container_expirson">
//                 Expires on
//               </div>
//             <div class="features_contract_row_contract_expiredate_container_expiredate">
//             ${s.Contract_deadline}
//             </div>
//             </div>
//             <div class="features_contract_row_contract_bid_container_avg_bid">
//               <div class="features_contract_row_contract_bid_container_avg_bid_avg_text">
//                 Avg 
//               </div>
//               <div class="features_contract_row_contract_bid_container_avg_bid_currency_type">
//           RS
//               </div>
//               <div class="features_contract_row_contract_bid_container_avg_bid_avg_no">
//               ${s.Contract_bid_avg}
//               </div>
//               </div>
          
          
          
//           </div>
          
            
//           <div class="features_contract_row_contract_bid_container">
          
//           <div class="features_contract_row_contract_bid_container_count_and_bid_button">
//           <div class="features_contract_row_contract_bid_container_count">
//           <div class="features_contract_row_contract_bid_container_count_no">
//             No bids yet
//           </div>
//           <div class="features_contract_row_contract_bid_container_count_bid_text"></div>
//           </div>
//             <button class="features_contract_row_contract_bid_container_count_bid_button">
//           Bid now
//             </button>
//           </div>
//           </div>
          
//             </div>
       
          
//          `;
//         }
//       } else {
//         Contract.innerHTML = `<div class="product">
//                          <button type = "button" class = "btn-cart" >
//                              Add quatation
//                                </button>
//                               <h2 class="sm-title">Sorry,We don't have such a product,plaese requesrt a quatation <h2>
//                             </div>`;
//       }
//     };
//     xhr.send();
//     return false;
  
//     // console.log("hello");
//   }


// console.log("hello");
//function to load the learning materials data
function ajaxload(query = '', page_number = 1) {
  // e.preventDefault();
  
  //pass the page number and search query
  const form_data = new FormData();
  form_data.append('query', query);
  form_data.append('page', page_number);
  const urlparam = new URLSearchParams(form_data);


  //initialize connection
  const xhr = new XMLHttpRequest();

  //establish connection
  xhr.open("POST", "http://localhost/ict_jobseeker_44/LearningMaterials/get_resource_data");
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")


  xhr.onload = function () {

      if (xhr.status == 200) {
          const learningMaterials_data1 = xhr.responseText; //ajax response data
        //   console.log(learningMaterials_data1);
          const learningMaterials_data2 = JSON.parse(learningMaterials_data1); //convert the response data to js object

          let learningMaterials_data = JSON.parse(learningMaterials_data2.data); //convert the data array into js object

          

              var learningMaterials_list = ``; //variable for list

              if (learningMaterials_data.length > 0) {
                  for (let i = 0; i < learningMaterials_data.length; i++) {

                      learningMaterials_list += ` 
                      <div class="ResourceRow">
                        <div class="Academy">
                            <img src='views/images/LearningMaterials/${learningMaterials_data[i].Academy_logo}' >
                        </div>
                        <div class="Tutorial">
                            ${learningMaterials_data[i].LearningMaterial_title} - ${learningMaterials_data[i].LearningMaterial_category}
                        </div>
                        <div class="Lesson">
                            <img src='views/images/LearningMaterials/${learningMaterials_data[i].Resource_logo}' >
                        </div>
                      </div>
                       `
                      
                  }



              } 
              else 
              {
                learningMaterials_list += ` No matching data is found `;
              }


              document.getElementById("learning-materials").innerHTML = learningMaterials_list;
              document.getElementById("pagination-link").innerHTML = learningMaterials_data2.pagination;
              document.getElementById("total-data").innerHTML = learningMaterials_data2.total_data;
              // document.getElementById("page_no").innerHTML = learningMaterials_data2.page_no;

        }


      }
      for (var pair of form_data.entries()) {
          console.log(pair);
      }
      xhr.send(urlparam);
  }



ajaxload();



