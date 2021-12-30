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

    function Resume_form_data(){
        echo "I am inside the function";
        echo print_r($_POST);

    }
}
