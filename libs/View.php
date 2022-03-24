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
      public function render2($viewName, $data = []) {
   
       include 'views/'.$viewName. '.php';
}

   
    //when pass variable
    public function render3($viewName, $data)
    {

        require 'views/' . $viewName . '.php';
    }

    //when view file is inside a folder
    public function render4($viewName1, $viewName2)
    {

        require 'views/' . $viewName1 .'/'.$viewName2. '.php';
    }

    public function render5($viewName, $data1 = [],$data2 = []) {
   
        include 'views/'.$viewName. '.php';
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

//    passing with array
    public function renderAdmin2($viewName, $data = [])
    {
        require 'views/Admin/' . $viewName . '.php';
    }
    // admin add
    // public function renderAdminAdd($viewName)
    // {
    //     require 'views/Admin/Admin_add/' . $viewName . '.php';
    // }

    // admin edit
    // public function renderAdminEdit($viewName)
    // {
    //     require 'views/Admin/Admin_edit/' . $viewName . '.php';
    // }

    // counsellor
    public function renderCounsellor($viewName)
    {
        require 'views/Counsellor/' . $viewName . '.php';
    }

    public function renderCounsellor2($viewName, $data = [])
    {
        require 'views/Counsellor/' . $viewName . '.php';

    }


    // resume
    public function renderResume($viewName)
    {
        require 'views/Resume/' . $viewName . '.php';
    }


//     // test view
//     public function renderTest($viewName)
//     {
//         require 'views/Test/' . $viewName . '.php';
//     }
}
