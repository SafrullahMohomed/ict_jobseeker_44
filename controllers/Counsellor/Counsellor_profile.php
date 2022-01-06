<?php
if (empty(session_id())) session_start();

class Counsellor_profile extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Counsellor_profile()
    {


        //pass view name
        $this->view->renderCounsellor('Counsellor_profile');
    }

    function get_counsellor_data()
    {

        $User_ID = $_SESSION['User_ID'];
        $data = $this->model->get_counsellor_data_m($User_ID);
        echo json_encode($data);

    }


    function get_counsellor_data_admin($User_ID)
    {
        $data = $this->model->get_counsellor_data_m($User_ID);
        echo json_encode($data);
        $this->view->renderCounsellor('Counsellor_profile');



    }

}
