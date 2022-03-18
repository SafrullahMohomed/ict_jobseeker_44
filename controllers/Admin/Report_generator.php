<?php

class Report_generator extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function Report_generator()
    {
        if (isset($_POST['reportGen'])) {
//            changing format to support with the timestamp in mysqldatabase
            $from_date = $_POST['from-date'];
            $to_date = $_POST['to-date'];
            $from_date = explode("T", $from_date);
            $to_date = explode("T", $to_date);
            $from_date = $from_date[0] . " " . $from_date[1] . ":00";
            $to_date = $to_date[0] . " " . $to_date[1] . ":00";
            $_SESSION['from-date'] = $from_date;
            $_SESSION['to-date'] = $to_date;

            $data = $this->model->get_duration_data_m($from_date, $to_date);


        }

        $this->view->renderAdmin2('Report_generator', $data);


    }

    function get_report_pdf()
    {
        require('./TCPDF-main/tcpdf.php');
        ob_start();
        $data = $this->model->get_duration_data_m($_SESSION['from-date'], $_SESSION['to-date']);
        $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->AddPage('P', "A4");
        if (isset($_POST['CreateReport'])) {

            $content = '<h2>Report of the ICT Jobseeker</h2>
<h3>from ' . $_SESSION['from-date'] . ' to ' . $_SESSION['to-date'] . '</h3>
<div class="main_table">
    <table>
        <tr>
            <th>Name</th>
            <th>Total Amount</th>
        </tr>
        <tr>
            <td>Job Seeker</td>
            <td>' . $data['jobseekers'] . '</td>
        </tr>
        <tr>
            <td>Company</td>
            <td>' . $data['companies'] . '</td>
        </tr>
        <tr>
            <td>Contract provider</td>
            <td>' . $data['cproviders'] . '</td>
        </tr>
        <tr>
            <td>Counsellor</td>
            <td>' . $data['counsellors'] . '</td>
        </tr>
        <tr>
            <td>Contracts</td>
            <td>' . $data['contracts'] . '</td>
        </tr>
        <tr>
            <td>Jobs</td>
            <td>' . $data['jobs'] . '</td>
        </tr>
    </table>
</div>';


        }
//        print ($content);
        $pdf->writeHTML($content);
        $pdf->Output('IctJobseeker44Report.pdf', 'D');
    }
}