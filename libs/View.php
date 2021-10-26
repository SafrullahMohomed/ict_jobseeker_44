<?php
class View
{
    function __construct()
    {
    }
    public function render($viewName)
    {
        require 'views/' . $viewName . '.php';
    }

    //when pass array objects
    public function render2($viewName, $data = [])
    {
        echo "lulakshi";
        require 'views/' . $viewName . '.php';
    }


    //when pass variable
    public function render3($viewName, $data)
    {

        require 'views/' . $viewName . '.php';
    }


    public function show_contract($viewName)
    {
        require 'views/JS/' . $viewName . '.js';
    }



    // render functions for admin, resume, counsellor which is inside a directory

    // admin
    public function renderAdmin($viewName)
    {
        require 'views/Admin/' . $viewName . '.php';
    }

    // counsellor
    public function renderCounsellor($viewName)
    {
        require 'views/Counsellor/' . $viewName . '.php';
    }

    // resume
    public function renderResume($viewName)
    {
        require 'views/Resume/' . $viewName . '.php';
    }
}
