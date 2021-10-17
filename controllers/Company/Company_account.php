<?php
class Company_account extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Company_account()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Company_account'); 
        
    }
}