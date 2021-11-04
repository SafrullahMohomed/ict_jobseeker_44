<?php
class JobSeekerAcc extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function JobSeekerAcc()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('JobSeekerAcc'); 
        
    }
    function insert_data()
    {
        if(isset($_POST['submit']))  
        {
            $profile_pic  =$_POST["profile_pic"];
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $gender=$_POST['gender'];
            $age=$_POST['age'];
            $phone_number=$_POST['phone_number'];
            $address=$_POST['address'];
            $brief_description=$_POST['brief_description'];
            $linkedin_url=$_POST['linkedin_url'];
            $fb_url=$_POST['fb_url'];
            $twitter_url=$_POST['twitter_url'];
            $web_url=$_POST['web_url'];
        } 
        $this->model->run_insert_query($phone_number, $address, $brief_description,$email);
    }

}