<?php
class Login extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Login()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Login'); 
        
    }
}