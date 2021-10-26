<?php
class ApplyContracts extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function ApplyContracts()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('ApplyContracts'); 
        
    }
}