<?php
class Post_job extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Post_job()
    {
        $data = [
            

            'Company_name_err' => '',
            'Job_Title_err' => '',
            'Job_Category_err' => '',
            'Email_err' => '', 
            'Deadline_err' => '',
            'Urgent_answer_err' => '',
            'Supply_Mock_Interviews_answer_err' => '',
            'Post_a_forum_answer_err' => ''
           
        ];

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
                    'Company_Logo' => trim($_POST['Company_Logo']),
                    'Job_image' => trim($_POST['Job_image']),
                  //  'Urgent_answer' => trim($_POST['Urgent_answer']),
                    'Supply_Mock_Interviews_answer' => trim($_POST['Supply_Mock_Interviews_answer']), 
                    'Post_a_forum_answer' => trim($_POST['Post_a_forum_answer']),
                   
            
                    'Company_name_err' => '',
                    'Job_Title_err' => '',
                    'Job_Category_err' => '',
                    'Email_err' => '', 
                    'Deadline_err' => '',
                    'Urgent_answer_err' => '',
                    'Supply_Mock_Interviews_answer_err' => '',
                    'Post_a_forum_answer_err' => ''
                    
                ];
               
      
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
                    if(empty($data['Post_a_forum_answer'])) {
                        $data['Post_a_forum_answer_err'] = "Please select one";
                 }
    
               
                //if there are no errors then insert data to database
                if(empty($data['Company_name_err']) && empty($data['Job_Title_err']) && empty($data['Email_err']) && empty($data['Job_Category_err']) && empty($data['Deadline_err'])&&empty($data['Supply_Mock_Interviews_answer_err'] ) &&empty($data['Post_a_forum_answer_err'] ) 
                  )
                {

                   $this->model->insert_query_post_job( $data);
                   $this->view ->render('Jobs_main_page');  
                  
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
}