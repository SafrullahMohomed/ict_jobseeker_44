<?php
class Resume_form_contact extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Resume_form_contact()
    {


        //pass view name
        $this->view->renderResume('Resume_form_contact');

    }

    function Resume_form_data(){
        $mainObj_json = file_get_contents('php://input');
        $mainObj = json_decode($mainObj_json);
//        print_r($mainObj);

       echo $this->model->Resume_form_data_m($mainObj);

    }

    function get_resume_data(){
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

//        print_r($data);
        echo json_encode($data);

    }
}
