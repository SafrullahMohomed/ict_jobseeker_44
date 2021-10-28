<?php
class Admin_add_contracts extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_add_contracts()
    {

        //pass view name
        $this->view->renderAdmin('Admin_add_contracts');
    }
}
