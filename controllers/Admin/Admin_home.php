<?php
if (empty(session_id())) session_start();

class Admin_home extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_home()
    {
        error_reporting(0);
        if ($_SESSION['User_type'] == 'Admin44') {
            $this->view->renderAdmin('Admin_home');
        } else {
            $this->view->render('YouDontHavePermisson');
        }


    }

//    get the job category counts
    function get_job_category()
    {
        
        $results = $this->model->get_job_category_m();
        echo json_encode($results);
    }

//    get the contract category counts
    function get_contract_category()
    {
        $results = $this->model->get_contract_category_m();
        echo json_encode($results);
    }

//    get the user registered count in each month
    function get_monthly_user_registered()
    {
        $results = $this->model->get_monthly_user_registered_m();
        echo json_encode($results);
    }

//    get the total user
    function get_counts()
    {
        $results = $this->model->get_counts_m();
        echo json_encode($results);

    }


}

