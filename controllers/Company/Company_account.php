<?php
class Company_account extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Company_account()
    {
        $data = [
                    
          /*  'name' => trim($_POST['name']),
            'address' => trim($_POST['address']),
            'phone_number' => trim($_POST['Phone_number']),
            'email' => trim($_POST['email']),
            'url' => trim($_POST['url']),
            'fburl' => trim($_POST['fburl']),
            'linkedin_url' => trim($_POST['linkedin_url']),
            'twitter_url' => trim($_POST['twitter_url']),*/
    
            'name_err' => '',
            'address_err' => '',
            'phone_number_err' => '',
            'email_err' => '',
            'url_err' => '',
            'fburl_err' => '',
            'linkedin_url_err' => '',
            'twitter_url_err' => ''
        ];

        //pass view name
        $this->view ->render2('Company/Company_account',$data); 
        
    }
    public function UserValidation()
    {
        
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
           
                $data = [
                    
                    'name' => trim($_POST['name']),
                    'address' => trim($_POST['address']),
                    'phone_number' => trim($_POST['Phone_number']),
                    'brief_description' => trim($_POST['brief_description']),
                    'email' => trim($_POST['email']),
                    'url' => trim($_POST['url']),
                    'fburl' => trim($_POST['fburl']),
                    'linkedin_url' => trim($_POST['linkedin_url']),
                    'twitter_url' => trim($_POST['twitter_url']),
            
                    'name_err' => '',
                  //  'address_err' => '',
                    'phone_number_err' => '',
                    'email_err' => '',
                    'url_err' => '',
                    'fburl_err' => '',
                    'linkedin_url_err' => '',
                    'twitter_url_err' => ''
                ];
                
                //Validate user_name
                if(empty($data['name'])) {
                    $data['name_err'] = "Please enter the company name";
                
                }
               //Validate address
              // if(empty($data['address'])) {
              //  $data['address_err'] = "Please enter the address";
           // }
             //Validate phone_number
            if(empty($data['phone_number'])){
                $data['phone_number_err'] = "Please enter phone number";

            }

             if(!empty($data['phone_number'])){
                if(strlen($data['phone_number'])!=10) {
                    $data['phone_number_err'] = "Please enter valid phone number(ex:0775689775)";
                    
                }
             }
             
                //Validate user email
               // $email_regex = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
                if(empty($data['email'])) {
                    $data['email_err'] = "Please enter email";
                }
                elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                    $data['email_err'] = "Please enter valid email";
                }
            
               // validate fb url
               $fb_regex = "/^(https?:\/\/)?((w{3}\.)?)facebook.com\/.*/i";
               if(!empty($data['fburl'])&&!preg_match( $fb_regex,$data['fburl'])){
                $data['fburl_err'] = "Please enter valid facebook account link";
            }
                // validate linkedin url
                $linkedin_regex = "/(ftp|http|https):\/\/?((www|\w\w)\.)?linkedin.com(\w+:{0,1}\w*@)?(\S+)(:([0-9])+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/";
                if(!empty($data['linkedin_url'])&&!preg_match( $linkedin_regex,$data['linkedin_url'])){
                $data['linkedin_url_err'] = "Please enter valid linkedin account link";
            }

                // validate linkedin url
                $twitter_regex = "/(https:\/\/twitter.com\/(?![a-zA-Z0-9_]+\/)([a-zA-Z0-9_]+))/";
                if(!empty($data['twitter_url'])&&!preg_match( $twitter_regex,$data['twitter_url'])){
                $data['twitter_url_err'] = "Please enter valid twitter account link";
            }
            
                if(empty($data['name_err'])  && empty($data['email_err']) && 
                empty($data['phone_number_err']) && empty($data['fburl_err'])&& empty($data['linkedin_url_err'])&& empty($data['twitter_url_err'])  ) {
                
                    $this->model->insert_company_data($data);
                    


                }
                else{

                    $this->view ->render2('Company/Company_account',$data);  
                }








    }
    }

     //insert company data into database (user and company table)
    /* function insert_company_data($data)
     {
        
 
         //pass view name
        
         $this->view->company= $this->model->insert_query_company_data($data);
         
         $this->view ->render('Contract_provider_profile'); 
         
     }*/
}