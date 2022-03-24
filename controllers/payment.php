<?php

class payment extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function payment()
    {

        //pass view name
        $this->view->render('payment');
    }
}
