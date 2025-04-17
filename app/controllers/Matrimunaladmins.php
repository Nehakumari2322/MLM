<?php

class MatrimunalAdmins extends Controller{
    public function __construct() {
        // echo 'Agents construct';
         $this->MatrimunalAdminModel = $this->model('MatrimunalAdmin');
         $todaysDate = null;
    }

    public function logmein(){
        $data = $this->MatrimunalAdminModel->getAllRegisterUser();
        $this->view('matrimunal/admin/registeruser',$data);
    }

    public function navform(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['logo'])){
                $this->view('common/admindashboard');
            }
            else if(isset($_POST['home'])){
                $data = $this->MatrimunalAdminModel->getAllRegisterUser();
                $this->view('matrimunal/admin/registeruser',$data);
            }
        }
    }
 
}
?>