<?php
class Companies extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Companies()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Companies'); 
        
    }
}