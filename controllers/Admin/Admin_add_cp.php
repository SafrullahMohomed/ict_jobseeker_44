<?php
class Admin_add_cp extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_add_cp()
    {
//        error_reporting(0);
        if ($_SESSION['User_type'] == 'Admin44') {
            $this->view->renderAdmin('Admin_add_cp');
        } else {
            $this->view->render('YouDontHavePermisson');
        }
    }
}
