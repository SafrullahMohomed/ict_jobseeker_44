<?php
class Admin_add_lm extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function Admin_add_lm()
    {
//        error_reporting(0);
        if ($_SESSION['User_type'] == 'Admin44') {
            $data = [
                'learning_material_link_err' => '',
                'learning_material_title_err' => '',
                // 'controller'=>'ChangePassword'
            ];

            //pass view name
            $this->view->renderAdmin('Admin_add_lm');
        } else {
            $this->view->render('YouDontHavePermisson');
        }

    }
    public function AddLearningMaterials()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'MaterialLink' => trim($_POST['MaterialLink']),
                'MaterialTitle' => trim($_POST['MaterialTitle']),
                'MaterialCategory'=>$_POST['MaterialCategory'],
                'AcademyFile'=>$_FILES['AcademyFile']['name'],
                'AcademyTmpName'=>$_FILES['AcademyFile']['tmp_name'],
                'ResourceFile'=>$_FILES['ResourceFile']['name'],
                'ResourceTmpName'=>$_FILES['ResourceFile']['tmp_name'],
                'learning_material_link_err' => '',
                'learning_material_title_err' => '',
            ];
            $AcademyFileUploadTo='views/images/LearningMaterials/';
            $ResourceFileUploadTo='views/images/LearningMaterials/';
            move_uploaded_file($data['AcademyTmpName'],$AcademyFileUploadTo . $data['AcademyFile']);
            move_uploaded_file($data['ResourceTmpName'],$ResourceFileUploadTo . $data['ResourceFile']);
            
        if(empty($data['MaterialLink'])) 
        {
          $data['learning_material_link_err'] = "Please enter the Material Link";
        }
        if(empty($data['MaterialTitle'])) 
        {
          $data['learning_material_title_err'] = "Please enter the Material Title";
        }

        //Make sure errors are empty
        if(empty($data['learning_material_link_err']) && empty($data['learning_material_title_err'])) 
        {
            $this->model->run_AddLearningMaterials($data);
        }
    }

}
}
