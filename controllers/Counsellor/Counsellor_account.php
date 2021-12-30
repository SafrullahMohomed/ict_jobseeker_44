<?php
if (empty(session_id())) session_start();

class Counsellor_account extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Counsellor_account()
    {

        //pass view name
        $this->view->renderCounsellor('Counsellor_account');
    }

    function get_counsellor_data()
    {
        $User_ID = $_SESSION['User_ID'];
        $data = $this->model->get_counsellor_data_m($User_ID);
        echo json_encode($data);

    }

    function update_counsellor_data()
    {
        if(isset($_POST)){
//            print_r($_POST);

            echo $this->model->update_counsellor_data_m($_POST, $_SESSION['User_ID']);
        }
    }


}
