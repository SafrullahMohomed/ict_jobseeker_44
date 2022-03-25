// alert("GGSSGRAPH");

//get the jobs details to draw the graph count vs job category 
function get_job_category() {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/ict_jobseeker_44/Admin/Admin_home/get_job_category");
    xhr.onload = function () {
        const categoryData = JSON.parse(this.responseText);


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