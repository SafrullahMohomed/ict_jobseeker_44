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
        if($_SESSION['User_type'] == 'Admin44'){
            $this->view->renderAdmin('Admin_home');
        }
        else{
            $this->view->render('YouDontHavePermisson');
        }



    }

    function get_job_category()
    {
        $results = $this->model->get_job_category_m();
        echo json_encode($results);
    }

    function get_counts()
    {
        $results = $this->model->get_counts_m();
            echo json_encode($results);


    }
}

