<?php
class Admin_edit_resume extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_edit_resume()
    {

        //pass view name
        $this->view->renderAdmin('Admin_edit_resume');
    }
}
