<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Report of the ICT Jobseeker</h2>
<h3>from <?php echo $data['from_date']?> to <?php echo $data['to_date']?></h3>
<div class="main_table">
    <table>
        <tr>
            <th>Name</th>
            <th>Total Amount</th>
        </tr>
        <tr>
            <td>Job Seeker</td>
            <td><?php echo $data['jobseekers']?></td>
        </tr>
        <tr>
            <td>Company</td>
            <td><?php echo $data['companies']?></td>
        </tr>
        <tr>
            <td>Contract provider</td>
            <td><?php echo $data['cproviders']?></td>
        </tr>
        <tr>
            <td>Counsellor</td>
            <td><?php echo $data['counsellors']?></td>
        </tr>
        <tr>
            <td>Contracts</td>
            <td><?php echo $data['contracts']?></td>
        </tr>
        <tr>
            <td>Jobs</td>
            <td><?php echo $data['jobs']?></td>
        </tr>
    </table>
</div>
<div id="pdfCreater">
    <form method="post" action="http://localhost/ict_jobseeker_44/Admin/Report_generator/get_report_pdf">
        <button id="CreateReport" name="CreateReport" type="submit">Download PDF</button>
    </form>
</div>
<!--tc pdf usage-->
<?php

?>
</body>
</html>