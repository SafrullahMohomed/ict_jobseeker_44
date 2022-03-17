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
        $GLOBALS['User'] = $_GET['User'];
        if (($_SESSION['User_type'] == 'Counsellor' and $_SESSION['User_ID'] == $_GET['User']) or $_SESSION['User_type'] == 'Admin44') {
            $data = $this->model->get_counsellor_data_m($_GET['User']);
//                print_r($data);
            //pass view name
            $this->view->renderCounsellor2('Counsellor_account', $data);

        } else {
            $this->view->render("YouDontHavePermission");
        }

    }

    function get_counsellor_data()
    {
////        $User_ID = 108;
//        $data = $this->model->get_counsellor_data_m($GLOBALS['User']);
//        echo json_encode($data);
////        echo $GLOBALS['User_Id'];
    }

    function update_counsellor_data()
    {
        if (isset($_POST)) {
//            print_r($_POST);

            $this->model->update_counsellor_data_m($_POST, $_POST['User_ID']);
        }
        header("Location:http://localhost/ict_jobseeker_44/Counsellor/Counsellor_profile?User=" . $_POST['User_ID']);
    }


}
