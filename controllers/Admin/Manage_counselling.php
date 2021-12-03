<?php

class Manage_counselling extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Manage_counselling()
    {
        $data = [];
        $result = $this->model->select_data_table();
        $data['result'] = $result;


        $this->view->renderAdmin2('Manage_counselling', $data);

    }

//    to get the counsellor data
    function get_counsellor_data()
    {
//        $counsellordata = $this->model->select_data_table();
////        print "<pre>";
////        print_r($counsellordata);
////        print "</pre>";
//
////       json_encode(count($counsellordata) == 0 ? null: $counsellordata);
//
//        $this->view->renderAdmin2('Manage_counselling', $counsellordata);

    }
}
