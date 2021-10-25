<?php
class Manage_cp extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Manage_cp()
    {

        //pass view name
        $this->view->render('Manage_cp');
    }
}
