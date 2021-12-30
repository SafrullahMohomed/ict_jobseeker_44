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

    //select data from database and load to view contract page
    function select_query_bid_contract_data()
    {
  
       
        $bid=$this->model->select_query_bid_contract();
       
        
    }
    function View_contractjs($Contract_ID)
    {
      $data=[
        'Contract_ID'=>$Contract_ID
       ];
     
        //pass view name with contrac id
        $this->view ->render2('View_contract',$data); 

        
    // }

    
    // function View_bid_contract()
    // {
    //   //   $data = [];
    //   //   $result = $this->model->select_data_table();
    //   //   $data['result'] = $result;
    //   // print_r($result);

    //   //   $this->view->render2('View_contract', $data);

    // }

    function view_clicked_contract(){
      $Contract_ID=$_POST['Contract_ID'];
     
     
      $Contract=$this->model->select_Contract_data($Contract_ID);
     
      echo json_encode(count( $Contract) == 0 ? null :  $Contract);
      return $Contract;


    }
     //function for xhr req
     function view_clicked_contract2($Contract_ID){
     

      $Contract=$this->model->select_Contract_data($Contract_ID);
     
      echo json_encode(count( $Contract) == 0 ? null : $Contract);
      return $Contract;

    }

}