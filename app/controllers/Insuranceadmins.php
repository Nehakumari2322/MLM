<?php

class Insuranceadmins extends Controller{
    public function __construct(){
        $this->insuranceModel = $this->model('Insurance');
        $todaysDate = null;
    }

    public function logmein(){
        $data = $this->insuranceModel->getAllUser();
        $this->view('insurance/viewpage',$data);
    }

    public function navform(){
        if(isset($_POST['logo'])){
            $this->view('common/admindashboard');
        }
        else if(isset($_POST['home'])){
            $data = $this->insuranceModel->getAllUser();
            $this->view('insurance/viewpage',$data);
        }
    }

    public function updateuserrequest(){
        $totalcount = trim($_POST['totalcount']);
        for ($count=0; $count<=$totalcount; $count++)
        { 
            if(isset($_POST['update'.$count])){
                $adata['message']= null;
                $id = trim($_POST['id'.$count]);
                $status =  trim($_POST['status'.$count]);
                $lastUpdatedTs = $this->getCurrentTs();
                $lastUpdatedBy = $_SESSION['userid'];
                $Id = $this->insuranceModel->updateStatus($id,$status,$lastUpdatedTs,$lastUpdatedBy);
                if($Id != null){
                    $adata['message'] = "Status is updated Successfully !!!!";
                }
                $data = $this->insuranceModel->getAllUser();
                $this->view('insurance/viewpage',$data,$adata);
            }
          
        }
    }

}