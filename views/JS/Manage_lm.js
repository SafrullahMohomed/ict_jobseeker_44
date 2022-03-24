// alert("Sa")

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
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Admin/Manage_lm/get_lm_data");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")


    xhr.onload = function () {

        if (xhr.status == 200) {
            const learningMaterialsData1 = xhr.responseText; //ajax response data
            const learningMaterialsData2 = JSON.parse(learningMaterialsData1); //convert the response data to js object

            let learningMaterialsData = JSON.parse(learningMaterialsData2.data); //convert the data array into js object


            var learningMaterials_tbody = ``; //variable for table body

            if (learningMaterialsData.length > 0) {
                for (let i = 0; i < learningMaterialsData.length; i++) {
                    learningMaterials_tbody += ` <tr>
                        <td>${learningMaterialsData[i].LearningMaterial_ID}</td>
                        <td>${learningMaterialsData[i].LearningMaterial_link}</td>
                        <td>${learningMaterialsData[i].LearningMaterial_category}</td>
                        <td>${learningMaterialsData[i].LearningMaterial_title}</td>
                        <td>${learningMaterialsData[i].Academy_logo}</td>
                        <td>${learningMaterialsData[i].Resource_logo}</td>
                        <td id="action">
                            <div class="icon">
                                <i title="View post" onclick="view_lm(${learningMaterialsData[i].LearningMaterial_ID})" class="fa fa-eye" aria-hidden="true"></i>
                                <i title="Edit post" onclick="edit_lm(${learningMaterialsData[i].LearningMaterial_ID})" class="fa fa-pencil" aria-hidden="true"></i>
                                <i title="Delete post" onclick="delete_lm(${learningMaterialsData[i].LearningMaterial_ID})" class="fa fa-trash-o" aria-hidden="true"></i>
                            </div>
                        </td>
                    </tr>`
                }
            } else {
                learningMaterials_tbody += `<tr> No matching data is found</tr>`;
            }


            document.getElementById("learningMaterials_tbody").innerHTML = learningMaterials_tbody;
            document.getElementById("pagination-link").innerHTML = learningMaterialsData2.pagination;
            document.getElementById("total-data").innerHTML = learningMaterialsData2.total_data;
            // document.getElementById("page_no").innerHTML = learningMaterialsData2.page_no;

        }


    }
    for (var pair of form_data.entries()) {
        console.log(pair);
    }
    xhr.send(urlparam);
}


ajaxload();