<?php
class Contracts_main_page extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Contracts_main_page()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Contracts_main_page'); 
        
    }
}