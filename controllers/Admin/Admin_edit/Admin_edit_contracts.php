<?php
class Admin_edit_contracts extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_edit_contracts()
    {

        //pass view name
        $this->view->renderAdmin('Admin_edit_contracts');
    }
}
