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

        //pass view name
        $this->view->renderCounsellor('Counsellor_profile_js');
    }

    function get_counsellor_data()
    {
        $User_ID = $_SESSION['User_ID'];
        $data = $this->model->get_counsellor_data_m($User_ID);
        echo json_encode($data);


    }

}
