//function to load the counsellor data
function ajaxload(query = '', page_number = 1) {
    // e.preventDefault();

    //for search bar
    const form_data = new FormData();
    form_data.append('query', query);
    form_data.append('page', page_number);
    const urlparam = new URLSearchParams(form_data);

    // console.log(form_data.values());
    //initialize connection
    const xhr = new XMLHttpRequest();

    //establish connection
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Admin/Manage_counselling/get_counsellor_data");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
    // xhr.onreadystatechange = function(){
    //     if (xhr.readyState == 4 && xhr.status == 200){
    //         console.log("success");
    //     }


    xhr.onload = function () {

        if (xhr.status == 200) {
            const counsellor_data1 = xhr.responseText;
            const counsellor_data2 = JSON.parse(counsellor_data1);
            // console.log(JSON.stringify(counsellor_data.data));
            // console.log(xhr.responseText);
            console.log(counsellor_data2.page_array);
            console.log(counsellor_data2.page_no);
            console.log(counsellor_data2.pagination_html);



            let counsellor_data = JSON.parse(counsellor_data2.data);
            // console.log(counsellor_data.length);
            console.log(counsellor_data[1].Email);

            // console.log(counsellor_data.data);

            var counsellor_tbody = ``;
            for (let i = 0; i < counsellor_data.length; i++) {
                counsellor_tbody += ` <tr>
                    <td>${counsellor_data[i].User_ID}</td>
                    <td>${counsellor_data[i].Email}</td>
                    <td>${counsellor_data[i].First_name}&nbsp${counsellor_data[i].Last_name}</td>
                    <td>${counsellor_data[i].Counsellor_provide_mock_interviews}</td>
                    <td>${counsellor_data[i].Phone_number}</td>
                    <td id="action">
                        <div class="icon">
                            <i title="View post" class="fa fa-eye" aria-hidden="true"></i>
                            <i title="Edit post" class="fa fa-pencil" aria-hidden="true"></i>
                            <i title="Delete post" class="fa fa-trash-o" aria-hidden="true"></i>
                        </div>
                    </td>

                </tr>`
            }

            document.getElementById("counsellor_tbody").innerHTML = counsellor_tbody;
            document.getElementById("pagination-link").innerHTML = counsellor_data2.pagination;
            document.getElementById("total-data").innerHTML = counsellor_data2.total_data;
            document.getElementById("page_no").innerHTML = counsellor_data2.page_no;

        }
        else{

        }



    }
    // for (var pair of form_data.entries()) {
    //     console.log(pair);
    // }

    xhr.send(urlparam);
    }

    ajaxload();


// dashboard navigation

const toggle_right = document.querySelector(".fa-chevron-circle-right");
document.querySelector(".toggle-dashboard-right").classList.add("display-none");
toggle_right.addEventListener("click", () => {
    console.log("I am clicked");
    if(document.querySelector(".left-division").classList.contains("display-none")){
        document.querySelector(".left-division").classList.remove("display-none");
        document.querySelector(".toggle-dashboard-right").classList.add("display-none");
        document.querySelector(".toggle-dashboard-left").classList.remove("display-none");

    }
});

const toggle_left = document.querySelector(".fa-chevron-circle-left");
toggle_left.addEventListener("click", () => {
    console.log("I am clicked");
    if(!document.querySelector(".left-division").classList.contains("display-none")){
        document.querySelector(".left-division").classList.add("display-none");
        document.querySelector(".toggle-dashboard-left").classList.add("display-none");
        document.querySelector(".toggle-dashboard-right").classList.remove("display-none");

    }
    console.log(document.querySelector(".left-division").classList)
});

// document.addEventListener("resize", () => {
//     if(window.innerWidth >= 780){
//         document.querySelector(".left-division").classList.remove("display-none");
//     }
// });
