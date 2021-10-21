<?php
class Inquire extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Inquire()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Inquire'); 
        
    }
}