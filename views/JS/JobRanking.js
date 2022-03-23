// alert("GGSS");
//function to load the job category data
function ajaxload(query = '', page_number = 1) 
{
    // e.preventDefault();

    //pass the page number and search query
    const form_data = new FormData();
    form_data.append('query', query);
    form_data.append('page', page_number);
    const urlparam = new URLSearchParams(form_data);


    //initialize connection
    const xhr = new XMLHttpRequest();

    //establish connection
    xhr.open("POST", "http://localhost/ict_jobseeker_44/JobRanking/get_job_category_data");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")


    xhr.onload = function () {

        if (xhr.status == 200) {
            const job_category_data1 = xhr.responseText; //ajax response data
            // console.log(job_category_data1);
            const job_category_data2 = JSON.parse(job_category_data1); //convert the response data to js object
            // console.log(job_category_data2);
            let job_category_data = JSON.parse(job_category_data2.data); //convert the data array into js object


                var job_category_tbody = ``; //variable for table body

                if (job_category_data.length > 0) {
                    for (let i = 0; i < job_category_data.length; i++) {
                        job_category_tbody += ` <tr>
                        <td>${job_category_data[i].JobCategory_name}</td>
                        <td>${job_category_data[i].JobCategory_count}</td>
                        <td>${job_category_data[i].JobCategory_ID}</td>
                        <td>${job_category_data[i].Counsellor_provide_mock_interviews}</td>
                    </tr>`
                    }
                } else {
                    job_category_tbody += `<tr> No matching data is found</tr>`;
                }


                document.getElementById("job_category_tbody").innerHTML = job_category_tbody;
                document.getElementById("pagination-link").innerHTML = job_category_data2.pagination;
                // document.getElementById("total-data").innerHTML = job_category_data2.total_data;
                // document.getElementById("page_no").innerHTML = counsellor_data2.page_no;

            }


        }
        for (var pair of form_data.entries()) {
            console.log(pair);
        }
        xhr.send(urlparam);
}



ajaxload();