<?php
class Admin_add_lm extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_add_lm()
    {

        //pass view name
        $this->view->renderAdmin('Admin_add_lm');
    }
}
