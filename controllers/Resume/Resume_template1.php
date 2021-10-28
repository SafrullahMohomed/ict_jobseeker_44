<?php
class Resume_template1 extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Resume_template1()
    {

        //pass view name
        $this->view->renderResume('Resume_template1');
    }
}
