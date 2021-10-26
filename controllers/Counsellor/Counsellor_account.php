<?php
class Counsellor_account extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Counsellor_account()
    {

        //pass view name
        $this->view->renderCounsellor('Counsellor_account');
    }
}
