<?php
class Manage_lm extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Manage_lm()
    {

        //pass view name
        $this->view->renderAdmin('Manage_lm');
    }
}
