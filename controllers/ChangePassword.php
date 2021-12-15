<?php
class ChangePassword extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function ChangePassword()
    {
        $data = [
            'curr_password_err' => '',
            'new_password_err' => '',
            'confirm_password_err' => '',
            // 'controller'=>'ChangePassword'
          ];
        
        //pass view name
        $this->view->render2('ChangePassword',$data);
    }

    public function ChangingPassword()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'CurrPassword' => trim($_POST['CurrPassword']),
                'NewPassword' => trim($_POST['NewPassword']),
                'ConfirmPassword' => trim($_POST['ConfirmPassword']),
                'curr_password_err' => '',
                'new_password_err' => '',
                'confirm_password_err' => '',
                // 'controller'=>'ChangePassword'
              ];

            $_SESSION['CurrPassword'] = $data['CurrPassword'];
            $_SESSION['NewPassword'] = $data['NewPassword'];
            $_SESSION['CurrPassword'] = $data['CurrPassword'];

            //Validate current password
            if(empty($data['CurrPassword'])) 
            {
                $data['curr_password_err'] = "Please enter the current password";
            }
            elseif(strlen($data['CurrPassword']) < 6) 
            {
                $data['curr_password_err'] = "Please enter at least 6 characters";
            }

            //Validate new password
            if(empty($data['NewPassword'])) 
            {
                $data['new_password_err'] = "Please enter the new password";
            }
            elseif(strlen($data['NewPassword']) < 6) 
            {
                $data['new_password_err'] = "Please enter at least 6 characters";
            }

            //Validate Confirm password
            if(empty($data['ConfirmPassword'])) 
            {
                $data['confirm_password_err'] = "Please confirm the new password";
            }
            elseif($data['NewPassword'] != $data['ConfirmPassword']) 
            {
                $data['confirm_password_err'] = "Doesn't match with new password";
            }

            if(empty($data['curr_password_err']) && empty($data['new_password_err']) && empty($data['confirm_password_err']))
            {
                //Validated
                   
                //Hash new password
                $data['NewPassword'] = password_hash($data['NewPassword'], PASSWORD_DEFAULT);
                if($this->model->Verify_curr_password($data['CurrPassword']))
                {
                    $this->model->Update_password($data['NewPassword']);
                }
                //if current password is invalid then render ChangePassword
                else
                {
                    // $this->view ->render('ChangePassword');
                    echo "Current Password You Have Entered Is Invalid";
                }
            }
        }
    }
}
