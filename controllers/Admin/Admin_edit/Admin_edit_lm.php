<?php
class Admin_edit_lm extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_edit_lm()
    {

        //pass view name
        $this->view->renderAdmin('Admin_edit_lm');
    }
}
