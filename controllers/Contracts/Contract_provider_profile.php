<?php
class Contract_provider_profile extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Contract_provider_profile()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Contract_provider_profile'); 
        
    }
}