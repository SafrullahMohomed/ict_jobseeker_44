<?php
class BidContract extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function BidContract()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('BidContract'); 
        
    }
}