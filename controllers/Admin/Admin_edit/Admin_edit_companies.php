<?php
class Admin_edit_companies extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_edit_companies()
    {

        //pass view name
        $this->view->renderAdmin('Admin_edit_companies');
    }
}
