<?php
class Manage_jobseeker extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Manage_jobseeker()
    {

        //pass view name
        $this->view->render('Manage_jobseeker');
    }
}
