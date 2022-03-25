//function for dashboard counts

//button for user year get function
const user_year_button = document.getElementById("user_year_but");

user_year_button.addEventListener("click", () => {
    location.href = "http://localhost/ict_jobseeker_44/Admin/Admin_home"
})

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
                        beginAtZero: true,
                        // userCallback: function(label, index, labels) {
                        //     // when the floored value is the same as the value we have a whole number
                        //     if (Math.floor(label) === label) {
                        //         return label;
                    }
                }
            }
        });


    }

    xhr.send();
}

get_contract_category();

//user count per month by selecting the year
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

        let jobseeker_data = new Array(12).fill(0);
        let counsellor_data = new Array(12).fill(0);
        let company_data = new Array(12).fill(0);
        let cprovider_data = new Array(12).fill(0);

        console.log('jobseeker');
        //create jobseeker month array
        for (let i = 0; i < jobseeker.length; i++) {
            jobseeker_data[(jobseeker[i].Month) - 1] = jobseeker[i].Count_Jobseeker;
        }
        console.log(jobseeker_data);

        //create counsellor month array
        for (let i = 0; i < counsellor.length; i++) {
            counsellor_data[(counsellor[i].Month) - 1] = counsellor[i].Count_Counsellor;

        }

        console.log(counsellor_data);

        //create company month array
        for (let i = 0; i < company.length; i++) {
            company_data[(company[i].Month) - 1] = company[i].Count_Company;

        }

        console.log(company_data);

        //create cprovider month array
        for (let i = 0; i < cprovider.length; i++) {
            cprovider_data[(cprovider[i].Month) - 1] = cprovider[i].Count_Cprovider;

        }

        console.log(cprovider_data);

        // console.log(jobseeker[0].Month);

        // console.log();
        // console.log('company');
        //
        // console.log(company);
        // console.log('counsellor');
        //
        // console.log(counsellor);
        // console.log('cprovider');
        //
        // console.log(cprovider);


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
        const ctx = document.getElementById('monthly-user-count').getContext('2d');

        const chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    'JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'
                ],
                datasets: [{
                    label: 'Jobseeker',
                    data: jobseeker_data,
                    borderWidth: 1,
                    barThickness: 10,
                    backgroundColor: 'rgba(255, 206, 86, 0.7)'
                },
                    {
                        label: 'Counsellor',
                        data: counsellor_data,
                        borderWidth: 1,
                        barThickness: 10,
                        backgroundColor: 'rgba(54, 162, 235, 0.7)'
                    },
                    {
                        label: 'Company',
                        data: company_data,
                        borderWidth: 1,
                        barThickness: 10,
                        backgroundColor: 'rgba(255, 99, 132, 0.7)'
                    },

                    {
                        label: 'ContractProvider',
                        data: cprovider_data,
                        borderWidth: 1,
                        barThickness: 10,
                        backgroundColor: 'rgba(153, 102, 255, 0.7)'
                    },


                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    }

    xhr.send();

}

get_monthly_user_registered();