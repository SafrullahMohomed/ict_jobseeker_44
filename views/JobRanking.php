<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "CSS/JobRanking.css" ?>
    </style>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    <script  src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script defer src="<?php echo URL ?>views/JS/JobRankingGraph.js"></script>
    <title>JobRanking</title>
</head>

<body onload="ajaxloadTotal()">
    <div class="header_div">
        <?php include 'Header.php' ?>
    </div>
    <div class="MainContainer">

        <!-- seach part -->
        <div class="jobcategory-search-part">
            <!-- theme image starts here -->
            <div class="theme-image">
                <img src='<?php echo URL ?>views/images/LearningMaterials/hometheme.jpg' >
            </div>
            <!-- theme image ends here -->
            
            <div class="jobcategory-search-box">
                <div class="search-your-keywords">
                    <input type="text" name="JobcategoryName" placeholder="Search Job Categories" onkeyup="ajaxload(this.value);">
                </div>
            </div>

        </div>
        <!-- search part ends here -->

    <div class="flex-container">
        <div class="Table" id="Table">
            <table>
                <tr>
                    <th colspan="4" id="topic">Career Role Rankings According To Vacancies</th>
                </tr>
                <tr id="columnTopic">
                    <th>Job category</th>
                    <th>Vacancies</th>
                    <th>Rank</th>
                    <th>%</th>
                </tr>

                <tbody id="job_category_tbody">


                </tbody>

                <!-- <tr>
                    <td>Software Engineer</td>
                    <td>1365</td>
                    <td>1</td>
                    <td>23.67%</td>
                </tr>
                <tr>
                    <td>Business Analyst</td>
                    <td>986</td>
                    <td>2</td>
                    <td>19.65%</td>
                </tr>
                <tr>
                    <td>Quality Assuarance</td>
                    <td>643</td>
                    <td>3</td>
                    <td>13.30%</td>
                </tr>
                <tr>
                    <td>Quality Assuarance</td>
                    <td>542</td>
                    <td>4</td>
                    <td>8.72%</td>
                </tr>
                <tr>
                    <td>Java Developer</td>
                    <td>476</td>
                    <td>5</td>
                    <td>7.65%</td>
                </tr>
                <tr>
                    <td>Senior Software Engineer</td>
                    <td>424</td>
                    <td>6</td>
                    <td>5.43%</td>
                </tr>
                <tr>
                    <td>Full Stack Developer</td>
                    <td>387</td>
                    <td>7</td>
                    <td>4.68%</td>
                </tr>
                <tr>
                    <td>Junior Software Engineer</td>
                    <td>286</td>
                    <td>8</td>
                    <td>3.34%</td>
                </tr>
                <tr>
                    <td>Software Architecturer</td>
                    <td>123</td>
                    <td>9</td>
                    <td>1.87%</td>
                </tr>
                <tr>
                    <td>Tech Lead</td>
                    <td>74</td>
                    <td>10</td>
                    <td>0.67%</td>
                </tr> -->
            </table>
        </div>

         <!--        graph devision starts here-->
        <div class="Graph">
             <!--        job category graph starts here -->
             <div class="job_categories">
                <canvas id="job_category_chart" width="400" height="400"></canvas>
                <!-- <canvas id="myChart" width="400" height="400"></canvas>
                        <script>
                            var ctx = document.getElementById("myChart");
                        var myChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: ['OK', 'WARNING', 'CRITICAL', 'UNKNOWN'],
                            datasets: [{
                            label: '# of Tomatoes',
                            data: [12, 19, 3, 5],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.5)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)'
                            ],
                            borderWidth: 1
                            }]
                        },
                        options: {
                            //cutoutPercentage: 40,
                            responsive: false,

                        }
                        });
                        </script> -->
            </div>
        </div>
    </div>
        <!-- load more button -->
        <div id="pagination-link">

        </div>



        


    </div>
    <?php include 'Footer.php' ?>
    <script src="<?php echo URL ?>views/JS/JobRanking.js"></script>
    <!-- <script src="<?php echo URL ?>views/JS/JobRankingGraph.js"></script> -->







</body>

</html>