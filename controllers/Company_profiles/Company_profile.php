<?php
class Company_profile extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

 function Company_profile()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Company_profile'); 
        
    }
}