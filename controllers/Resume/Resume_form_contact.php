<?php
class Resume_form_contact extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Resume_form_contact()
    {

        //pass view name
        $this->view->renderResume('Resume_form_contact');
    }
}
