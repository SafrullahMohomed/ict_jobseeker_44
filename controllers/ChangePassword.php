<?php
class ChangePassword extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function ChangePassword()
    {

        //pass view name
        $this->view->render('ChangePassword');
    }
}
