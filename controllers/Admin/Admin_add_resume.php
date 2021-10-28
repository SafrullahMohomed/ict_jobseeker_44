<?php
class Admin_add_resume extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_add_resume()
    {

        //pass view name
        $this->view->renderAdmin('Admin_add_resume');
    }
}
