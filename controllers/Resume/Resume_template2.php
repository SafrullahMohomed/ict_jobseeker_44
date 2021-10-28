<?php
class Resume_template2 extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Resume_template2()
    {

        //pass view name
        $this->view->renderResume('Resume_template2');
    }
}
