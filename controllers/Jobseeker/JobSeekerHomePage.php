<?php
class JobSeekerHomePage extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function JobSeekerHomePage()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('JobSeekerHomePage'); 
        
    }
}