<?php
class Contract_provider_profile extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Contract_provider_profile()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('Contract_provider/Contract_provider_profile'); 
        
    }

    //window open from contract_veiw.js file 
    function Cp_profilejs($User_ID)
    {
      $data=[
        'User_ID'=>$User_ID
       ];
       
      
        //pass view name
        $this->view ->render2('Contract_provider/Contract_provider_profile',$data); 
        
    }

    
    //select contract provider profile data
    function cp_data($User_ID){

      $cp=$this->model->select_cp_data($User_ID);     
      echo json_encode(count($cp) == 0 ? null : $cp);
      return $cp;


     }

     //insert cp rate data to database
     function cp_rate_data(){
  
      $count=$_POST['count'];
      $review= $_POST['review'];
      $User_ID_CP=$_POST['User_ID_CP'];
         if(isset($_SESSION['User_ID'])&& ($_SESSION['User_type']=="Jobseeker" )){
           $this->model->insert_cp_review_data($User_ID_CP,$count,$review);
           echo("Successfully added your rate and review.Thank you");
         }
       else{
        echo("Before rate the system you should login as a Jobseeker");
       
         }
      
   
       }

       //request cp rate and review data from data base
       function  req_cp_rate_data($User_ID){
        $review=$this->model->select_cp_rate_data($User_ID);
        
        echo json_encode(count( $review) == 0 ? null :  $review);
        return $review;
       }
}