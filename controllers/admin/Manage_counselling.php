<?php
class Manage_counselling extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Manage_counselling()
    {

        //pass view name
        $this->view->render('Manage_counselling');
    }
}
