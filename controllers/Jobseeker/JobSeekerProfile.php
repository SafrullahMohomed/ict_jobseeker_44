<?php
class JobSeekerProfile extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function JobSeekerProfile()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('JobSeekerProfile'); 
        
    }
}