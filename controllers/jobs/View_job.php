<?php
class View_job extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function View_job()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('View_job'); 
        
    }
}