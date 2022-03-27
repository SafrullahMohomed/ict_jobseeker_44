// alert("GGSSGRAPH");


// window.onload= function exampleFunction(){

    
    
// const ctx = document.getElementById('job_category_chart').getContext('2d');
// const myChart = new Chart(ctx, {
//     type: 'doughnut',
//     data: {
//         labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
//         datasets: [{
//             label: '# of Votes',
//             data: [12, 19, 3, 5, 2, 3],
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 'rgba(255, 206, 86, 0.2)',
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(153, 102, 255, 0.2)',
//                 'rgba(255, 159, 64, 0.2)'
//             ],
//             borderColor: [
//                 'rgba(255, 99, 132, 1)',
//                 'rgba(54, 162, 235, 1)',
//                 'rgba(255, 206, 86, 1)',
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(255, 159, 64, 1)'
//             ],
//             borderWidth: 1
//         }]
//     },
//     options: {
//         scales: {
//             y: {
//                 beginAtZero: true
//             }
//         }
//     }
// });
// }

//get the jobs details to draw the graph count vs job category 
function get_job_category() {
    // alert("GGSSGRAPH");
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/ict_jobseeker_44/JobRanking/get_jobCategoryGraph");
    xhr.onload = function () {
        // alert(this.response);
        const job_category_data = JSON.parse(this.responseText);
        
        let total = 0;
        if (job_category_data.length > 0) {
            for (let i = 0; i < job_category_data.length; i++) {
                total += parseInt(job_category_data[i].JobCategory_count)
            }
        }
       
        let jobCat = [];
        let jobCount = [];
        for (i = 0; i < job_category_data.length; i++) {
            jobCat.push(job_category_data[i].JobCategory_name)
            jobCount.push(((job_category_data[i].JobCategory_count) *100/ total).toFixed(2))
            // jobCount.push(job_category_data[i].JobCategory_count)
        }

        //    chart.js graph code

        const ctx = document.getElementById('job_category_chart').getContext('2d');
        const job_category_chart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: jobCat,
                datasets: [{
                    label: 'Job categories',
                    data: jobCount,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.5)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgb(255, 99, 132)', 
                        'rgb(255, 159, 64)', 
                        'rgb(255, 205, 86)', 
                        'rgb(75, 192, 192)', 
                        'rgb(54, 162, 235)', 
                    ],
                    borderColor: [
                        // 'rgba(54, 162, 235, 1)',
                        'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: false,
                
            }
        });


    }

    xhr.send();
}

get_job_category();