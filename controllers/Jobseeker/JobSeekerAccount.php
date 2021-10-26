<?php
class JobSeekerAccount extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function JobSeekerAccount()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('JobSeekerAccount'); 
        
    }
}