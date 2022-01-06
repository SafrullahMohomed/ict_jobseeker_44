<?php

class Admin_home extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_home()
    {

        //pass view name
        $this->view->renderAdmin('Admin_home');
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

