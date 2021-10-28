<?php
class ResetPassword extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function ResetPassword()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('ResetPassword'); 
        
    }
}