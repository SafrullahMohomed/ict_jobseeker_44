<?php
class Resume_template3 extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Resume_template3()
    {

        //pass view name
        $this->view->renderResume('Resume_template3');
    }
}
