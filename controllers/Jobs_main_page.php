<?php
class Jobs_main_page extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Jobs_main_page()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Jobs_main_page'); 
        
    }
}