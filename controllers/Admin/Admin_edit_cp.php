<?php
class Admin_edit_cp extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_edit_cp()
    {

        //pass view name
        $this->view->renderAdmin('Admin_edit_cp');
    }
}
