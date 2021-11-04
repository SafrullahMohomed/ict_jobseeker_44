<?php
class Bid extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Bid()
    {
        #$this->model->printSomething();
        
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Bid'); 
    }
    function insert_bid()
    {
        if(isset($_POST['submit']))  
        {
            $bid  =$_POST['bid'];
            $proposal=$_POST['proposal'];
            
        } 
        $this->model->run_insert_bid($bid, $proposal);
        // var_dump($_POST);
        
    }
}