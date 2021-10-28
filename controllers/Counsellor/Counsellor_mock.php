<?php
class Counsellor_mock extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Counsellor_mock()
    {

        //pass view name
        $this->view->renderCounsellor('Counsellor_mock');
    }
}
