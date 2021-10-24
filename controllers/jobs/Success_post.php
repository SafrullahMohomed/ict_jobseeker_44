<?php
class Success_post extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function Success_post()
    {
      $info=[

       'mail_msg'=>'We have sent an email with a confirmation link to your email address. 
                    In order to complete the sign-up process, please click the confirmation link.',
       'active_msg'=>'Your account has been activated'

      ];

        //pass view name
       # $this->view ->render('Success_post'); 
       $this->view ->render2('Success_post',$info); 
        
    }
   /* function  Success_post($info=[]){
      $this->view ->render2('Success_post',$info); 
    }*/



}