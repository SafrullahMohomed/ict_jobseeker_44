<?php
class Counsellor_home_js extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Counsellor_home_js()
    {

        //pass view name
        $this->view->renderCounsellor('Counsellor_home_js');
    }
}
