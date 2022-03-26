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
}
