<?php
class Admin_add_cp extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_add_cp()
    {

        //pass view name
        $this->view->renderAdmin('Admin_add_cp');
    }
}
