<?php
class Search_jobseeker extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Search_jobseeker()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Search_jobseeker'); 
        
    }
}