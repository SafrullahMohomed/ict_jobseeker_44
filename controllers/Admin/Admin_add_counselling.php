<?php
class Admin_add_counselling extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_add_counselling()
    {

        //pass view name
        $this->view->renderAdmin('Admin_add_counselling');
    }
}
