<?php
class ForgotPassword extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function ForgotPassword()
    {
        #$this->model->printSomething();
        
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('ForgotPassword'); 
        
    }
}