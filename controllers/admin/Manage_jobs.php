<?php
class Manage_jobs extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Manage_jobs()
    {

        //pass view name
        $this->view->render('Manage_jobs');
    }
}
