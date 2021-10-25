<?php
class Resume_home extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Resume_home()
    {

        //pass view name
        $this->view->render('Resume_home');
    }
}
