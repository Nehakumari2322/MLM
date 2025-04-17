<?php

class Insurances extends Controller{
    public function __construct(){
        $this->insuranceModel = $this->model('Insurance');
        $todaysDate = null;
    }

    public function logmein(){
        $this->view('insurance/requestform');
    }

    public function insertrequest(){
        
        if (isset($_POST['formsubmitbtn'])){

            $name =trim($_POST['name']);
            $number =trim($_POST['number']);
            $email =trim($_POST['email']);
            $nomineename =trim($_POST['nomineename']);
            $relation =trim($_POST['relation']);
            $age =trim($_POST['age']);
            $dob =trim($_POST['dob']);
            $dob_of_nominee =trim($_POST['dobnominee']);
            $policy_number =trim($_POST['policynumber']);
            $company_name =trim($_POST['companyname']);
            $company_plan =trim($_POST['companyplan']);
            $policytype =trim($_POST['policytype']);
            $qulifi =trim($_POST['qulifi']);
            $occu =trim($_POST['occu']);
            $monthly_income =trim($_POST['income']);
            $brand =trim($_POST['newbike']);
            $other = trim($_POST['otherOptionField']);
            $yearly = trim($_POST['yearly']);
            $term = trim($_POST['term']);
            $sum = trim($_POST['sum']);
            $createdTs =$this->getCurrentTs();
            $createdby = $_SESSION['userid'];
            $lastUpdatedTs =$this->getCurrentTs();
            $lastUpdatedby = $_SESSION['userid'];
            $status = 'New';
            // echo"1";
            $targetDir = "insurances/";
            $allowTypes = array('jpg', 'png', 'jpeg');
            $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
            $fileNames = array('rcbookfile', 'addressprooffile', 'idprofffile');
            if (!empty($_FILES)) {
                foreach ($fileNames as $fileKey) {
                    if (!empty($_FILES[$fileKey]['name'])) {
                        // File upload path
                        $fileName = basename($_FILES[$fileKey]['name']);
                        $targetFilePath = $targetDir . $fileName;

                        // Check whether file type is valid
                        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                        if (in_array($fileType, $allowTypes)) {
                            // Upload file to server
                            if (move_uploaded_file($_FILES[$fileKey]["tmp_name"], $targetFilePath)) {
                                // Image db insert sql
                                $insertValuesSQL .= "('".$fileName."', NOW()),";
                            } else {
                                $errorUpload .= $_FILES[$fileKey]['name'] . ' | ';
                            }
                        } else {
                            $errorUploadType .= $_FILES[$fileKey]['name'] . ' | ';
                        }
                    }
                }
            }

            // Inserting other information into the database
            if (!empty($insertValuesSQL)) {
                // Remove trailing comma
                $insertValuesSQL = rtrim($insertValuesSQL, ',');

                // Insert image info into the database
                $id = $this->insuranceModel->insertUserRequest($name, $number, $email, $nomineename, $relation, $age, $dob, $dob_of_nominee,$policytype,$qulifi,$occu, $monthly_income, $brand,$_FILES['rcbookfile']['name'], $_FILES['addressprooffile']['name'],$_FILES['idprofffile']['name'], $createdTs, $createdby,$lastUpdatedTs, $lastUpdatedby, $status,$other,$yearly,$term,$sum,$policy_number,$company_name,$company_plan);

                if ($id != null) {
                    $data['message'] = "Request submitted successfully !!";
                } else {
                    $data['message'] = "Failed to submit request, please try again !!";
                }
            }

            // If there were any errors, handle them
            if (!empty($errorUpload)) {
                $errorMsg .= 'Error uploading: ' . $errorUpload;
            }
            if (!empty($errorUploadType)) {
                $errorMsg .= 'Invalid file types: ' . $errorUploadType;
            }
            if (!empty($errorMsg)) {
                $data['message'] = $errorMsg;
            } 
       
        }     
            $this->view('insurance/requestform',$data);   
          
           
        } 
        }
    
   
