<?php
class Manage_chat extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Manage_chat()
    {

        //pass view name
        $this->view->render('Manage_chat');
    }
}
