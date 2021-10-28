<?php
class Admin_add_jobs extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_add_jobs()
    {

        //pass view name
        $this->view->renderAdmin('Admin_add_jobs');
    }
}
