<?php
class ApplyJobs extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function ApplyJobs()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('ApplyJobs'); 
        
    }
}