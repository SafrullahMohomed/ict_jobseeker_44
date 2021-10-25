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
        $this->view->render('Admin_home');
    }
}
