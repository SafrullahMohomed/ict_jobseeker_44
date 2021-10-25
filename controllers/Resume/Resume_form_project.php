<?php
class Resume_form_project extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Resume_form_project()
    {

        //pass view name
        $this->view->render('Resume_form_project');
    }
}
