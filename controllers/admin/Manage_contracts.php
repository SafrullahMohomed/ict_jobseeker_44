<?php
class Manage_contracts extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Manage_contracts()
    {

        //pass view name
        $this->view->render('Manage_contracts');
    }
}
