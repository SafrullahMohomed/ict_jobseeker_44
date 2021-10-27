<?php
class Admin_edit_counselling extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_edit_counselling()
    {

        //pass view name
        $this->view->renderAdmin('Admin_edit_counselling');
    }
}
