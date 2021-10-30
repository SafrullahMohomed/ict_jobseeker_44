<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        <?php include "CSS/JobRanking.css" ?>
    </style>
    <title>JobRanking</title>
</head>

<body>
    <div class="header_div">
        <?php include 'Header.php' ?>
    </div>
    <div class="MainContainer">
        <div class="Table">
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
                <tr>
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
                </tr>
            </table>
        </div>
        <div class="Graph">

        </div>
    </div>
    <?php include 'Footer.php' ?>
</body>

</html>