<?php
class Contact_us extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Contact_us()
    {
        //pass view name
        $data = [
          /*'name' => trim($_POST['name']),
           'email' => trim($_POST['email']),
           'message' => trim($_POST['message']),*/
           'name_err' => '',
           'email_err' => '',
           'msg_err' => '',
           'controller'=>'Contact_us'
       ];
       $this->view ->render2('Contact_us',$data); 
        
    }

    public function InsertMessage()
    {
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
           'name' => trim($_POST['name']),
           'email' => trim($_POST['email']),
           'message' => trim($_POST['message']),
           'name_err' => '',
           'email_err' => '',
           'msg_err' => '',
           'controller'=>'Contact_us'
      ];
          //Validate name
          if(empty($data['name'])) 
          {    
            $data['name_err'] = "Please enter the your name";
        
          }

          //Validate email
          if(empty($data['email'])) 
          {
          
            $data['email_err'] = "Please enter your email";
          }

           //Validate message
           if(empty($data['message'])) 
           {
           
             $data['msg_err'] = "Please enter your inquiry or message";
           }

           
            if(empty($data['name_err']) && empty($data['email_err']) && empty($data['msg_err']))
             //Validated
            {
              $this->model->insert_msg_data($data);
            }
          
             
           


      }
    }
}