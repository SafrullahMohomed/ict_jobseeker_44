//function to load the contract data
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
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Admin/Manage_contracts/get_contract_data");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")


    xhr.onload = function () {

        if (xhr.status == 200) {
            const contract_data1 = xhr.responseText; //ajax response data
            console.log(contract_data1);
            const contract_data2 = JSON.parse(contract_data1); //convert the response data to js object

            let contract_data = JSON.parse(contract_data2.data); //convert the data array into js object


            var contract_tbody = ``; //variable for table body

            if (contract_data.length > 0) {
                for (let i = 0; i < contract_data.length; i++) {
                    contract_tbody += ` <tr>
                        <td>${contract_data[i].Contract_ID}</td>
                        <td>${contract_data[i].Contract_title}</td>
                        <td>${contract_data[i].First_name}&nbsp;${contract_data[i].Last_name}</td>
                        <td>${contract_data[i].Contract_category}</td>
                        <td>${contract_data[i].Contract_deadline}</td>
                        <td id="action">
                            <div class="icon">
                                <i title="View post" onclick="view_contract(${contract_data[i].Contract_ID})" class="fa fa-eye" aria-hidden="true"></i>
                                <i title="Edit post" onclick="edit_contract(${contract_data[i].Contract_ID})" class="fa fa-pencil" aria-hidden="true"></i>
                                <i title="Delete post" onclick="delete_contract(${contract_data[i].Contract_ID})" class="fa fa-trash-o" aria-hidden="true"></i>
                            </div>
                        </td>

                    </tr>`
                }
            } else {
                contract_tbody += `<tr> No matching data is found</tr>`;
            }


            document.getElementById("contract_tbody").innerHTML = contract_tbody;
            document.getElementById("pagination-link").innerHTML = contract_data2.pagination;
            document.getElementById("total-data").innerHTML = contract_data2.total_data;
            // document.getElementById("page_no").innerHTML = contract_data2.page_no;

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


const add_contract = document.getElementById("add-button");

add_contract.addEventListener("click", function (){
    // location.href =
});

http://localhost/ict_jobseeker_44/Contracts/View_contract/View_contractjs/9

    function view_contract(Contract_ID) {
        location.href = "http://localhost/ict_jobseeker_44/Contracts/View_contract/View_contractjs/" + Contract_ID;
        ;
    }

function edit_contract(Contract_ID) {
    location.href = "http://localhost/ict_jobseeker_44/Counsellor/Counsellor_account?User=" + Contract_ID;

}

function delete_contract(Contract_ID) {
    let value = confirm("Are you sure, you want to delete this account");
    if (value == true) {
        location.href = "http://localhost/ict_jobseeker_44/Admin/Manage_counselling/delete_counsellor_data?User=" + Contract_ID;
    }
}