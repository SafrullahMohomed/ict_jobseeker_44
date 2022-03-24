//function for dashboard counts

function get_counts() {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Admin/Admin_home/get_counts");
    xhr.onload = function () {
        const categoryData = JSON.parse(this.responseText);
        // console.log(categoryData);

        document.getElementById("jobseeker-count").innerHTML = categoryData.jobseekers;
        document.getElementById("job-count").innerHTML = categoryData.jobs;
        document.getElementById("company-count").innerHTML = categoryData.companies;
        document.getElementById("contract-count").innerHTML = categoryData.contracts;
        document.getElementById("cp-count").innerHTML = categoryData.cproviders;
        document.getElementById("counsellor-count").innerHTML = categoryData.counsellors;


        }
    xhr.send();
    }

get_counts();


//get the jobs details to draw the graph job category vs count
function get_job_category() {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Admin/Admin_home/get_job_category");
    xhr.onload = function () {
        const categoryData = JSON.parse(this.responseText);
        // console.log(categoryData);

        let jobCat = [];
        let jobCount = [];
        for (i = 0; i < categoryData.length; i++) {
            jobCat.push(categoryData[i].JobCategory_name)
            jobCount.push(categoryData[i].JobCategory_count)
        }

        //    chart.js graph code

        const ctx = document.getElementById('job_category_chart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: jobCat,
                datasets: [{
                    label: 'Job categories',
                    data: jobCount,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)'

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });


    }

    xhr.send();
}

get_job_category();

//get the contracts details to draw the graph contract category vs count
function get_contract_category() {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Admin/Admin_home/get_contract_category");
    xhr.onload = function () {
        const categoryData = JSON.parse(this.responseText);
        // console.log(this.responseText);
        // console.log(categoryData);


        let contractCat = [];
        let contractCount = [];
        for (i = 0; i < categoryData.length; i++) {
            contractCat.push(categoryData[i].Contract_category)
            contractCount.push(categoryData[i].contractCount)
        }

        //    chart.js graph code

        const ctx = document.getElementById('contract_category_chart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: contractCat,
                datasets: [{
                    label: 'contract categories',
                    data: contractCount,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)'

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });


    }

    xhr.send();
}

get_contract_category();


//user increment per month by selecting the year
function get_monthly_user_registered() {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Admin/Admin_home/get_monthly_user_registered");
    xhr.onload = function () {
        const categoryData = JSON.parse(this.responseText);
        console.log(categoryData);
        console.log(this.responseText);

        let jobseeker = categoryData.Jobseeker;
        let counsellor = categoryData.Counsellor;
        let company = categoryData.Company;
        let cprovider = categoryData.Contract_provider;

        console.log('jobseeker');
        console.log(jobseeker);
        console.log('company');

        console.log(company);
        console.log('counsellor');

        console.log(counsellor);
        console.log('cprovider');

        console.log(cprovider);
        // console.log(`jobseeker ${jobseeker} \n counsellor ${counsellor} \n company ${company} \n cprovider${cprovider}`)

    //     let jobCat = [];
    //     let jobCount = [];
    //     for (i = 0; i < categoryData.length; i++) {
    //         jobCat.push(categoryData[i].JobCategory_name)
    //         jobCount.push(categoryData[i].JobCategory_count)
    //     }
    //
    //     //    chart.js graph code
    //
    //     const ctx = document.getElementById('job_category_chart').getContext('2d');
    //     const myChart = new Chart(ctx, {
    //         type: 'line',
    //         data: {
    //             labels: jobCat,
    //             datasets: [{
    //                 label: 'Job categories',
    //                 data: jobCount,
    //                 backgroundColor: [
    //                     'rgba(255, 99, 132, 0.2)'
    //
    //                 ],
    //                 borderColor: [
    //                     'rgba(255, 99, 132, 1)'
    //                 ],
    //                 borderWidth: 2
    //             }]
    //         },
    //         options: {
    //             scales: {
    //                 y: {
    //                     beginAtZero: true
    //                 }
    //             }
    //         }
    //     });
    //
    //
    }

    xhr.send();
}

get_monthly_user_registered();