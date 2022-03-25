<?php
class Manage_chat extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Manage_chat()
    {
//        error_reporting(0);
        if($_SESSION['User_type'] == 'Admin44'){
            $this->view->renderAdmin('Manage_chat');

        }
        else{
            echo "you don't have permission";
        }

        //pass view name
    }
}
