<?php
class Admin_edit_jobs extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_edit_jobs()
    {

        //pass view name
        $this->view->renderAdmin('Admin_edit_jobs');
    }
}
