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
    // function insert_bid()
    // {
    //     if(isset($_POST['submit']))  
    //     {
    //         $bid  =$_POST['bid'];
    //         $proposal=$_POST['proposal'];
    //     } 
    //     $this->model->run_insert_bid($bid, $proposal);
    //     // var_dump($_POST);
        
    // }
    //insert bidr data into database (user and dobid table)
    function insert_bid()
    {
       

        //pass view name
       
        $this->view->Bid= $this->model->run_insert_bid();
        
        // $this->view ->render('View_contract'); 


        $data = [];
        $result = $this->model->select_data_table();
        $data['result'] = $result;
    //   print_r($result);

        $this->view->render2('BidContract2', $data);
        
    }
}