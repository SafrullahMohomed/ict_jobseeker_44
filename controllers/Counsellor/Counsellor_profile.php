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
        if (($_SESSION['User_type'] == 'Counsellor' and $_SESSION['User_ID'] == $_GET['User']) or $_SESSION['User_type'] == 'Admin44'){
            $data = $this->model->get_counsellor_data_m($_GET['User']);
//        print_r($data);
            //pass view name
            $this->view->renderCounsellor2('Counsellor_profile',$data);
        }
        else
        {
//            $this->view->render("YouDontHavePermission");
            echo "you dont have permission";
        }



    }

    function get_counsellor_data()
    {

//        if($_SESSION['User_type'] == 'Counsellor'){
//            $User_ID = $_SESSION['User_ID'];
//            $data = $this->model->get_counsellor_data_m($User_ID);
//            echo json_encode($data);
//        }


    }


    function get_counsellor_data_admin($User_ID)
    {
        $data = $this->model->get_counsellor_data_m($User_ID);
        echo json_encode($data);
        $this->view->renderCounsellor2('Counsellor_profile',$data);

    }

}
