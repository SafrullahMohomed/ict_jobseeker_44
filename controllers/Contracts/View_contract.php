<?php
class View_contract extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function View_contract()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('View_contract'); 
      //   $data = [];
      //   $result = $this->model->select_data_table();
      //   $data['result'] = $result;
      // print_r($result);

      //   $this->view->render2('View_contract', $data);

        
    }

    //select data from database and load to view contract paage
    // function select_query_bid_contract_data()
    // {
  
       
    //     $bid=$this->model->select_query_bid_contract();
    //     echo("ABCS");
    //     echo json_encode(count($bid) == 0 ? null : $bid);
        
    //    // return $contract;

      
        
    //     //pass js file name to view in libs
    //   //  return $this->view ->view_contract('view_contract'); 
        
    // }

    
    // function View_bid_contract()
    // {
    //   //   $data = [];
    //   //   $result = $this->model->select_data_table();
    //   //   $data['result'] = $result;
    //   // print_r($result);

    //   //   $this->view->render2('View_contract', $data);

    // }

}