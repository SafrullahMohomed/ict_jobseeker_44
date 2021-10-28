<?php
class Admin_add_jobseeker extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_add_jobseeker()
    {

        //pass view name
        $this->view->renderAdmin('Admin_add_jobseeker');
    }
}
