<?php
class Manage_resume extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Manage_resume()
    {

        //pass view name
        $this->view->render('Manage_resume');
    }
}
