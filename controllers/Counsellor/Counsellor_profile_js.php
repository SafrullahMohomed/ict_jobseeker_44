<?php
if (empty(session_id())) session_start();

class Counsellor_profile_js extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Counsellor_profile_js()
    {

            $data = $this->model->get_counsellor_data_m($_GET['User']);
//        print_r($data);
            //pass view name
            $this->view->renderCounsellor2('Counsellor_profile_js',$data);


    }

    function get_counsellor_data()
    {
//        $User_ID = $_SESSION['User_ID'];
//        $data = $this->model->get_counsellor_data_m($User_ID);
//        echo json_encode($data);

    }

    function get_counsellor_data_js($User_ID)
    {
//
//        $data = $this->model->get_counsellor_data_m($User_ID);
////        echo json_encode($data);
//        //pass view name
//        $this->view->renderCounsellor2('Counsellor_profile_js', $data);

    }

}
