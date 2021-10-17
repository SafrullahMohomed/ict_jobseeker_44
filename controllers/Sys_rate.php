<?php
class Sys_rate extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Sys_rate()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Sys_rate'); 
        
    }
}