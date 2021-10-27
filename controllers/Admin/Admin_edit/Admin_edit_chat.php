<?php
class Admin_edit_chat extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_edit_chat()
    {

        //pass view name
        $this->view->renderAdmin('Admin_edit_chat');
    }
}
