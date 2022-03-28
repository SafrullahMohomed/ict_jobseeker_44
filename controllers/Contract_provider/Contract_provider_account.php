<?php
class Contract_provider_account extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Contract_provider_account()
    {
      $data = [
          'first_name' => '',
          'last_name' => '',
          'address' =>'',
          'phone_number' =>'',
          'brief_description' =>'',
          'url' =>'',
          'fburl' =>'',
          'linkedin_url' =>'',
          'twitter_url' =>'',
          'email'=>'',
          'nic'=>''
          
      ];

      if(isset($_SESSION['User_ID']))
      {
      $cp_data=$this->model->getCpData($_SESSION['User_ID']);

      $data['first_name']=$cp_data['First_name'];
      $data['last_name']=$cp_data['Last_name'];
      $data['address']=$cp_data['Address'];
      $data['phone_number']=$cp_data['Phone_number'];
      $data['brief_description']=$cp_data['Description'];
      $data['url']=$cp_data['Website_url'];
      $data['fburl']=$cp_data['Fb_url'];
      $data['linkedin_url']=$cp_data['Linkedin_url'];
      $data['twitter_url']=$cp_data['Twitter_url'];
      $data['email']=$cp_data['Email'];
      $data['nic']=$cp_data['ContractProvider_NIC'];
      
      
      }
    
     
        //pass view name
        $this->view ->render2('Contract_provider_account',$data); 
        
    }
  //insert contract provider data into database (user and contract provider table)
  function insert_cp_data()
  {
      //pass view name
     
     $this->model->insert_query_cp_data();
     $data['User_ID']=$_SESSION['User_ID'];
     $this->view ->render2('Contract_provider/Contract_provider_profile',$data); 
      
  }

  //load posted contracts of cp
  function load_cp_contracts(){
    //$User_ID=77;
  $User_ID=$_SESSION['User_ID'];
  $cp=$this->model->select_contracts($User_ID);
  echo json_encode(count($cp) == 0 ? null : $cp);
  return $cp;
  }

  //delete a contract after click on the delete icon
   function delete_contract($contract_ID){

    $this->model->delete_contract($contract_ID);
    $this->Contract_provider_account();

   }

}