<?php

class Demates extends Controller{
    public function __construct(){
        $this->DematModel = $this->model('Demate');
        $todaysDate = null;
    }

    public function logmein(){
        $this->view('demate/main');
    }

    public function main(){
        $data['message'] = null;
        if(isset($_POST['update']))
        {
            $email = $_SESSION['userid'];
            // echo"wesgfd".$email;
            $userId = $this->DematModel->getuserId($email);
            // echo"REgfd".$userId->id;
            $account_no =  trim($_POST['ac']);
            $id = $this->DematModel->updateAccount($account_no,$userId->id);
            if($id == true){
                $data['message']  = "Your Demat Account number is updated  !!" ;
            }
            $this->view('demate/main',$data);
        }
    }
}