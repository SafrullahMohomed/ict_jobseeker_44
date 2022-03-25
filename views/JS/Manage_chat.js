// alert("Sandaruwan");

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
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Admin/Manage_chat/get_message_data");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
  
  
    xhr.onload = function () {
  
        if (xhr.status == 200) {
            const message_data1 = xhr.responseText; //ajax response data
          //   console.log(message_data1);
            const message_data2 = JSON.parse(message_data1); //convert the response data to js object
  
            let message_data = JSON.parse(message_data2.data); //convert the data array into js object
  
            
  
                var message_data_list = ``; //variable for list
  
                if (message_data.length > 0) {
                    for (let i = 0; i < message_data.length; i++) {
  
                      message_data_list += ` 
                        <div class="MsgRow">
                          <div class="InquiryFrom">
                                ${message_data[i].Inquiry_from} 
                          </div>
                          <div class="Inquiry">
                                ${message_data[i].Inquiry}
                          </div>
                          <div class="InquiryStatus">
                                ${message_data[i].Inquiry_status}
                          </div>
                        </div>
                         `
                        
                    }
  
  
  
                } 
                else 
                {
                    message_data_list += ` No matching data is found `;
                }
  
  
                document.getElementById("chat-messages").innerHTML = message_data_list;
                document.getElementById("pagination-link").innerHTML = message_data2.pagination;
                document.getElementById("total-data").innerHTML = message_data2.total_data;
                // document.getElementById("page_no").innerHTML = message_data2.page_no;
  
          }
  
  
        }
        for (var pair of form_data.entries()) {
            console.log(pair);
        }
        xhr.send(urlparam);
    }
  
  
  
  ajaxload();