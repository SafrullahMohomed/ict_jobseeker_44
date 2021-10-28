<?php
class Admin_edit_jobseeker extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_edit_jobseeker()
    {

        //pass view name
        $this->view->renderAdmin('Admin_edit_jobseeker');
    }
}
