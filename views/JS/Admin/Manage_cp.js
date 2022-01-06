//function to load the cprovider data
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
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Admin/Manage_cp/get_cprovider_data");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")


    xhr.onload = function () {

        if (xhr.status == 200) {
            const cprovider_data1 = xhr.responseText; //ajax response data
            const cprovider_data2 = JSON.parse(cprovider_data1); //convert the response data to js object

            let cprovider_data = JSON.parse(cprovider_data2.data); //convert the data array into js object


                var cprovider_tbody = ``; //variable for table body

                if (cprovider_data.length > 0) {
                    for (let i = 0; i < cprovider_data.length; i++) {
                        cprovider_tbody += ` <tr>
                        <td>${cprovider_data[i].User_ID}</td>
                        <td>${cprovider_data[i].Email}</td>
                        <td>${cprovider_data[i].First_name}&nbsp${cprovider_data[i].Last_name}</td>
                        <td>${cprovider_data[i].Contract_count}</td>
                        <td>${cprovider_data[i].Phone_number}</td>
                        <td id="action">
                            <div class="icon">
                                <i title="View post" onclick="view_counselling(${cprovider_data[i].User_ID})" class="fa fa-eye" aria-hidden="true"></i>
                                <i title="Edit post" onclick="edit_counselling(${cprovider_data[i].User_ID})" class="fa fa-pencil" aria-hidden="true"></i>
                                <i title="Delete post" onclick="delete_counselling(${cprovider_data[i].User_ID})" class="fa fa-trash-o" aria-hidden="true"></i>
                            </div>
                        </td>

                    </tr>`
                    }
                } else {
                    cprovider_tbody += `<tr> No matching data is found</tr>`;
                }


                document.getElementById("cprovider_tbody").innerHTML = cprovider_tbody;
                document.getElementById("pagination-link").innerHTML = cprovider_data2.pagination;
                document.getElementById("total-data").innerHTML = cprovider_data2.total_data;
                // document.getElementById("page_no").innerHTML = cprovider_data2.page_no;

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


const add_cprovider = document.getElementById("add-button");

add_cprovider.addEventListener("click", function (){
    location.href = "http://localhost/ict_jobseeker_44/Admin/Admin_add_counselling"
});
