<?php
class Admin_edit_counselling extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_edit_counselling()
    {

//        error_reporting(0);
        if ($_SESSION['User_type'] == 'Admin44') {
            $this->view->renderAdmin('Admin_edit_counselling');
        } else {
            $this->view->render('YouDontHavePermisson');
        }
    }
}
