<?php
class Mail_info extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Mail_info()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Mail_info'); 
        
    }
}