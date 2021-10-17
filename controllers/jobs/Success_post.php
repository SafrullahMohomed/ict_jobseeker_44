<?php
class Success_post extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Success_post()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Success_post'); 
        
    }
}