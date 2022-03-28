<?php
class Resume_template extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Resume_template()
    {
//        get data from model
        $data = $this->model->get_resume_data_m();

        $resume = $data['resume'];

        $experience2a = $data['experience2a'];
        $experience2b = $data['experience2b'];
        $experience2c = $data['experience2c'];

        $education3a = $data['education3a'];
        $education3b = $data['education3b'];
        $education3c = $data['education3c'];

        $project5a = $data['project5a'];
        $project5b = $data['project5b'];
        $project5c = $data['project5c'];

//        print_r($resume);
////        echo $resume['First_name'];
//        echo "<br><br>";
//
////
//        print_r($experience2a);
//        echo "<br><br>";
////
//        print_r($experience2b);
//        echo "<br><br>";
//
//        print_r($experience2c);
//        echo "<br><br>";
//
//
//
//        print_r($education3a);
//        echo "<br><br>";
//
//        print_r($education3b);
//        echo "<br><br>";
//
//        print_r($education3c);
//        echo "<br><br>";
////
////
////
//        print_r($project5a);
//        echo "<br><br>";
//
//        print_r($project5b);
//        echo "<br><br>";
//
//        print_r($project5c);
//        echo "<br><br>";
        //pass view name
        $this->view->renderResume2('Resume_template1', $data);
    }
}
