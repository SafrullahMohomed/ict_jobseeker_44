<?php
class table_test extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function table_test()
    {

        //pass view name
        $this->view->render('table_test');
    }
}

