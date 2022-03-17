// const counsellor = document.getElementById("counsellor1");
//
// counsellor.addEventListener("click", function (){
//     location.href = "http://localhost/ict_jobseeker_44/Counsellor/Counsellor_profile_js";
//     console.log("I am clicked");
// });

//function to load the counsellor data
function counsellor_search(query = '', page_number = 1) {
    // e.preventDefault();

    //pass the page number and search query
    const form_data = new FormData();
    form_data.append('query', query);
    form_data.append('page', page_number);
    const urlparam = new URLSearchParams(form_data);


    //initialize connection
    const xhr = new XMLHttpRequest();

    //establish connection
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Counsellor/Counsellor_home_js/search_counsellor");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")

    xhr.onload = function () {

        if (xhr.status == 200) {
            const counsellor_data1 = xhr.responseText; //ajax response data
            const counsellor_data2 = JSON.parse(counsellor_data1); //convert the response data to js object

            let counsellor_data = JSON.parse(counsellor_data2.data); //convert the data array into js object

            console.log(counsellor_data);


            var counsellor_list = ``; //variable for table body

            if (counsellor_data.length > 0) {
                for (let i = 0; i < counsellor_data.length; i++) {

                    counsellor_list += `
            <div class="counsellor" onclick="show_profile(${counsellor_data[i].User_ID})">
                <div class="counsellor_profile"><img src="/ict_jobseeker_44/views/images/Counsellor/Counselling.png"
                                                 alt="profile image"></div>
                <div class="counsellor_name">${counsellor_data[i].First_name}&nbsp${counsellor_data[i].Last_name}</div>

                <div class="mi_provider">
                    <div class="mk_interview">Mock interviews</div>
                    <div class="tick">`;

                        if(counsellor_data[i].Counsellor_provide_mock_interviews == 'yes'){
                            counsellor_list += `<i class='fa fa-check-circle' style="font-size: 40px; color:green;"></i>`
                        }
                        else{
                            counsellor_list += `<i class="fa fa-times-circle" style="font-size:40px;color:red;"></i>`
                        }
                counsellor_list+=`
                        </div>
                </div>
            </div>

`

                }


            } else {
                counsellor_list += `  No
                matching
                data
                is
                found`;
            }

            document.getElementById("counsellors").innerHTML = counsellor_list;
            document.getElementById("pagination-link").innerHTML = counsellor_data2.pagination;
            document.getElementById("total-data").innerHTML = counsellor_data2.total_data;
            // document.getElementById("page_no").innerHTML = counsellor_data2.page_no;

        }

    }


// for (var pair of form_data.entries()) {
//     console.log(pair);
// }

    xhr.send(urlparam);
}

counsellor_search();

function show_profile(User_id){

    location.href = `http://localhost/ict_jobseeker_44/Counsellor/Counsellor_profile_js?User=${User_id}`;

}