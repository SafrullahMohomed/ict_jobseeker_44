//function to load the jobseeker data
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
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Admin/Manage_jobseeker/get_jobseeker_data");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")


    xhr.onload = function () {

        if (xhr.status == 200) {
            const jobseeker_data1 = xhr.responseText; //ajax response data
            const jobseeker_data2 = JSON.parse(jobseeker_data1); //convert the response data to js object

            let jobseeker_data = JSON.parse(jobseeker_data2.data); //convert the data array into js object

            var jobseeker_tbody = ``; //variable for table body

            if (jobseeker_data.length > 0) {
                for (let i = 0; i < jobseeker_data.length; i++) {
                    jobseeker_tbody += ` <tr>
                        <td>${jobseeker_data[i].User_ID}</td>
                        <td>${jobseeker_data[i].Jobseeker_NIC}</td>
                        <td>${jobseeker_data[i].Email}</td>
                        <td>${jobseeker_data[i].First_name}&nbsp${jobseeker_data[i].Last_name}</td>
                        <td>${jobseeker_data[i].Phone_number}</td>
                        <td id="action">
                            <div class="icon">
                                <i title="View post" onclick="view_counselling(${jobseeker_data[i].User_ID})" class="fa fa-eye" aria-hidden="true"></i>
                                <i title="Edit post" onclick="edit_counselling(${jobseeker_data[i].User_ID})" class="fa fa-pencil" aria-hidden="true"></i>
                                <i title="Delete post" onclick="delete_counselling(${jobseeker_data[i].User_ID})" class="fa fa-trash-o" aria-hidden="true"></i>
                            </div>
                        </td>

                    </tr>`
                }
            } else {
                jobseeker_tbody += `<tr> No matching data is found</tr>`;
            }


            document.getElementById("jobseeker_tbody").innerHTML = jobseeker_tbody;
            document.getElementById("pagination-link").innerHTML = jobseeker_data2.pagination;
            document.getElementById("total-data").innerHTML = jobseeker_data2.total_data;
            // document.getElementById("page_no").innerHTML = jobseeker_data2.page_no;

        }


    }
    for (var pair of form_data.entries()) {
        console.log(pair);
    }
    xhr.send(urlparam);
}


ajaxload();


// dashboard navigation

const toggle_right = document.querySelector(".fa-chevron-circle-right");
document.querySelector(".toggle-dashboard-right").classList.add("display-none");
toggle_right.addEventListener("click", () => {
    // console.log("I am clicked");
    if (document.querySelector(".left-division").classList.contains("display-none")) {
        document.querySelector(".left-division").classList.remove("display-none");
        document.querySelector(".toggle-dashboard-right").classList.add("display-none");
        document.querySelector(".toggle-dashboard-left").classList.remove("display-none");

    }
});

const toggle_left = document.querySelector(".fa-chevron-circle-left");
toggle_left.addEventListener("click", () => {
    // console.log("I am clicked");
    if (!document.querySelector(".left-division").classList.contains("display-none")) {
        document.querySelector(".left-division").classList.add("display-none");
        document.querySelector(".toggle-dashboard-left").classList.add("display-none");
        document.querySelector(".toggle-dashboard-right").classList.remove("display-none");

    }
});


const add_jobseeker = document.getElementById("add-button");

add_jobseeker.addEventListener("click", function () {
    location.href = "http://localhost/ict_jobseeker_44/Admin/Admin_add_counselling"
});
