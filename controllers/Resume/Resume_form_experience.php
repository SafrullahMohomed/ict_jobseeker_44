<?php
class Resume_form_experience extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Resume_form_experience()
    {

        //pass view name
        $this->view->render('Resume_form_experience');
    }
}
