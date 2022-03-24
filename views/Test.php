
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>hi</p>
<?php
$URL = "http://localhost/ict_jobseeker_44/";
 if (0){   echo '<a href="'; echo $URL.'Admin/Admin_home">Admin Home</a>
                    <a href="'; echo $URL.'Login/logout">Logout</a>';
                }else{
                    echo '<a href="'; echo $URL . $My_profile.'">My profile</a>
                    <a href="'; echo $URL. 'ChangePassword">Change password</a>
                    <a href="'; echo $URL. 'Login/logout">Logout</a>';
                }
                ?>

    if ($_SESSION['User_type'] == 'Admin44'){
    echo '<a href="{$Admin_home}">Admin Home</a>
    <a href="<?php echo URL ?>Login/logout">Logout</a>';
    }elseif ($_SESSION['User_type'] == 'Company' or 'Contract provider' or 'Jobseeker' or 'Counsellor'){
    echo '<a href="<?php echo URL . $My_profile. ?>">My profile</a>
    <a href="<?php echo URL ?>ChangePassword">Change password</a>
    <a href="<?php echo URL ?>Login/logout">Logout</a>';
    }
</body>
</html>