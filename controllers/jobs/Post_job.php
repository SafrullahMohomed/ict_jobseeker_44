<?php

class Post_job extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Post_job()
    {//when post a job flag=0 and when edit flag =1
        $data = [
            'flag'=>'0',
            'Company_name' => '',
            'Company_name_err' => '',
            'Job_Title_err' => '',
            'Job_Category_err' => '',
            'Email_err' => '', 
            'Deadline_err' => '',
            'Urgent_answer_err' => '',
            'Supply_Mock_Interviews_answer_err' => '',
            'Post_a_forum_answer_err' => '',
            'jobCategory'=>''
        ];
        

        //if there is a company name in company table then we take it and display job post form
        
        if(isset($_SESSION['User_ID']))
        {
        $Company_name=$this->model->getCompanyName($_SESSION['User_ID']);
        $data['Company_name']=$Company_name;
        }
        //load available ict job categories from database
        $jobCategory=$this->model->getJobCategory();
        $data['jobCategory']=$jobCategory;
        //pass view name
        $this->view ->render2('Jobs/Post_job',$data); 
        
    }

    //check validation before insert post job data
    function insert_post_job_data()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'Company_name' => trim($_POST['Company_name']),
                    'Job_Title' => trim($_POST['Job_Title']),
                    'Job_Category' => trim($_POST['Job_Category']),
                    'Brief_Description' => trim($_POST['Brief_Description']),
                    'Job_Type' => trim($_POST['Job_Type']),
                    'Sallary_Offered' => trim($_POST['Sallary_Offered']),
                    'City' => trim($_POST['City']),
                    'Phone_Number' => trim($_POST['Phone_Number']),
                    'Email' => trim($_POST['Email']),
                    'Deadline' => trim($_POST['Deadline']),
                    'Company_Logo' => '',
                    'Job_image' => trim($_POST['Job_image']),
                  //  'Urgent_answer' => trim($_POST['Urgent_answer']),
                    'Supply_Mock_Interviews_answer' => trim($_POST['Supply_Mock_Interviews_answer']), 
                    'Post_a_forum_answer' => '',
                   
            
                    'Company_name_err' => '',
                    'Job_Title_err' => '',
                    'Job_Category_err' => '',
                    'Email_err' => '', 
                    'Deadline_err' => '',
                    'Urgent_answer_err' => '',
                    'Supply_Mock_Interviews_answer_err' => '',
                    'Post_a_forum_answer_err' => ''
                    
                ];
               
                $_SESSION['Company_name'] = trim($_POST['Company_name']);
                $_SESSION['Job_Title'] = trim($_POST['Job_Title']);
                $_SESSION['Job_Category'] = trim($_POST['Job_Category']);
                $_SESSION['Brief_Description'] = trim($_POST['Brief_Description']);
                $_SESSION['Job_Type'] = trim($_POST['Job_Type']);
                $_SESSION['Sallary_Offered'] =trim($_POST['Sallary_Offered']);
                $_SESSION['City'] = trim($_POST['City']);
                $_SESSION['Phone_Number'] = trim($_POST['Phone_Number']);
                $_SESSION['Email'] = trim($_POST['Email']);
                $_SESSION['Deadline'] =trim($_POST['Deadline']);
                $_SESSION['Company_Logo'] ='';
                $_SESSION['Job_image'] = trim($_POST['Job_image']);
                $_SESSION[ 'Supply_Mock_Interviews_answer'] = trim($_POST['Supply_Mock_Interviews_answer']);
                $_SESSION[ 'Post_a_forum_answer'] = '';
                
    
                //Validate Company_name
                if(empty($data['Company_name'])) {
                    $data['Company_name_err'] = "Please enter the company name";
                
                }
                
                //Validate Job_Title
                if(empty($data['Job_Title'])) {
        
                    $data['Job_Title_err'] = "Please enter the job title";
                }
                //Validate Job_Category
                if(empty($data['Job_Category'])) {
                    $data['Job_Category_err'] = "Please select the job category";
                }
    
                //Validate user email
                if(empty($data['Email'])) {
                     $data['Email_err'] = "Please enter the email";
                }

                else {
                    $Email = $data['Email'];
                    // check if e-mail address is well-formed
                    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                        $data['Email_err']= "Invalid email format";
                     
                    }
                  }
                  if(empty($data['Deadline'])) {
                    $data['Deadline_err'] = "Please enter the Deadline";
                    }
                  /*  if(empty($data['Urgent_answer'])) {
                    $data['Urgent_answer_err'] = "Please select one";
                   }*/
                    if(empty($data['Supply_Mock_Interviews_answer'])) {
                        $data['Supply_Mock_Interviews_answer_err'] = "Please select one";
                }
                  /* if(empty($data['Post_a_forum_answer'])) {
                        $data['Post_a_forum_answer_err'] = "Please select one";
                 }*/
    
               
                //if there are no errors then insert data to database
                if(empty($data['Company_name_err']) && empty($data['Job_Title_err']) && empty($data['Email_err']) && empty($data['Job_Category_err']) && empty($data['Deadline_err'])&&empty($data['Supply_Mock_Interviews_answer_err'] ) ) 
                  
                {   $data1=$data;
                    $this->Post_job_main_page(0);
                    //after display post job main page and check free trail and then insert data to db
                   //$this->model->insert_query_post_job( $data);
                   //$this->view ->render('Jobs_main_page');  
                  
                }
                //if there is invalid data or empty data then render same page ith errors
                else{
                   
                    $this->view ->render2('Jobs/Post_job',$data);   
                }
       
       
        
        
    }
    else{
        echo "Invalid access";
    }


}
function insertData(){
    //after display post job main page and check free trail and then insert data to db
    $this->model->insert_query_post_job();
    $this->view ->render('Jobs_main_page'); 

}
function Post_job_main_page($flag)
    {  //get registration data
       $reg_date1=$this->model->get_reg_date()[0];
       $reg_date2= new DateTime($reg_date1);
      // $reg_date2= date('Y-m-d', strtotime($reg_date1));
      // print_r($reg_date2);
       
      date_default_timezone_set("Asia/Colombo");
      $now = new DateTime();
      // $now1= $now->format('Y-m-d');
     // print_r($now);
     // $diff=date_diff($now1,$reg_date2);
      $diff=date_diff($now,$reg_date2);

      $diff_y=$diff->{'y'};
      $diff_m=$diff->{'m'};
    
      $count1=$this->model->get_job_count();
     //Array ( [COUNT(Job_ID)] => 37 [0] => 37 )
      
      $count2= $count1['COUNT(Job_ID)'];
       //print_r($count2);
        //pass view name
    
        $data=[
            'diff_y'=>$diff_y,
            'diff_m'=>$diff_m,
            'count2'=>$count2,
            'flag'=>$flag
    
        ];
        print_r($data);
        $this->view ->render2('Jobs/Post_job_main_page',$data);
      // $this->view ->render6('Jobs/Post_job_main_page',$diff_y,$diff_m,$count2); 
        
    }
}