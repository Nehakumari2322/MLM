<?php

class MatrimunalEndUsers extends Controller{
    public function __construct() {
        // echo 'Agents construct';
         $this->Matrimunal = $this->model('MatrimunalEndUser');
         $todaysDate = null;
    }

    public function logmein(){
        $this->view('matrimunal/main');
    }

    public function navform(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                if(isset($_POST['logo'])){
                    $this->view('common/dashboard');
                }
                else if(isset($_POST['homebtn'])){
                    $this->view('matrimunal/main');
                }
                else if(isset($_POST['dashboard'])){
                    $this->view('matrimunal/dashboard');
                }
                else if(isset($_POST['membershipbtn'])){
                    $this->view('matrimunal/membership');
                }
                else if(isset($_POST['profile'])){
                    $userId = $_SESSION['userid'];
                    $id1 = $this->Matrimunal->getuserId($userId);
                    $chechprofile = $this->Matrimunal->checkuserExits($id1->id);
                    $profile = $this->Matrimunal->getprofile($id1->id);
                    $_SESSION['profileId'] = $profile->profile_id;
                   
                    $profileExist = $this->Matrimunal->profileExits($profile->profile_id);
                    if($chechprofile->profile_id == null){
                        $this->view('matrimunal/no_profile');
                    }
                    else if($profileExist->profile_id == null){
                        $this->view('matrimunal/complete_profile');
                    }
                    else if($chechprofile->profile_id != null){
                        $id1 = $this->Matrimunal->getuserId($userId);
                        $data = $this->Matrimunal->getAllDetailOfUser($id1->id);
                        $this->view('matrimunal/second',$data);
                    }
                
                }
        
                else if(isset($_POST['registerbtn'])){
                    $data = $this->Matrimunal->getAllReligion();
                    $adata = $this->Matrimunal->getAllEductionType();
                    $mdata = $this->Matrimunal->getAllCountry();
                    $userId = $_SESSION['userid'];
                    $user = $this->Matrimunal->getuserId($userId);
                    $ndata['id'] = $user->id;
                    $this->view('matrimunal/register',$data,$adata,$mdata,$ndata);
                }
            }
    }

    public function takingtocompleteregister(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['registercomplete']))
            {
                $userId = $_SESSION['userid'];
                $user = $this->Matrimunal->getuserId($userId);
                $profile = $this->Matrimunal->getprofile($user->id);
                $_SESSION['profileId'] = $profile->profile_id;
                $rdata = $this->Matrimunal->getRegisterUserDetailsByProfile($profile->profile_id);
                $data = $this->Matrimunal->getAllCountry();
                $adata = $this->Matrimunal->getAllState();
                $mdata = $this->Matrimunal->getAllReligion();
                $ndata = $this->Matrimunal->getAllEductionType();

                $this->view('matrimunal/register_more_data',$data,$adata,$mdata,$ndata,$rdata);
            }
        }
    }
    public function takingtoregister(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // $ndata['message'] = null;
            if(isset($_POST['registernow'])){
                $data = $this->Matrimunal->getAllReligion();
                $adata = $this->Matrimunal->getAllEductionType();
                $mdata = $this->Matrimunal->getAllCountry();
                $userId = $_SESSION['userid'];
                $user = $this->Matrimunal->getuserId($userId);
                $ndata['id'] = $user->id;
                $this->view('matrimunal/register',$data,$adata,$mdata,$ndata);
            }
        }
    }

    public function userRegisteration(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $ndata['message'] = null;
            if(isset($_POST['registernow'])){
                $gender = trim($_POST['gender']);
                $first_name = trim($_POST['fname']);
                $last_name = trim($_POST['lname']);
                $number = trim($_POST['number']);
                $email = trim($_POST['email']);
                $password = trim( $_POST['password']);
                $date_of_birth = trim( $_POST['date']);
                $religion = trim( $_POST['religion']);
                $education = trim( $_POST['education']);
                $country = trim( $_POST['country']);
                $userid = trim($_POST['userid']);
                $created_ts = $this->getCurrentTs();
                $created_by = 'user';
                // echo"regdf".$country;
                $profile_id = 'PROF'.mt_rand(10000,99999).mt_rand(10,99);
            }
            $id = $this->Matrimunal->register($gender,$first_name,$last_name,$number,$email,$password,$date_of_birth,$religion,$education,$country,$created_ts,$created_by,$profile_id,$userid);
            // echo"fdvcsdfvc ccxzsaddfvvb vc".$id;

            $rdata = $this->Matrimunal->getRegisterUserDetails($id);
            $_SESSION['profileId'] = $rdata->profile_id;
            $data = $this->Matrimunal->getAllCountry();
            $adata = $this->Matrimunal->getAllState();
            $mdata = $this->Matrimunal->getAllReligion();
            $ndata = $this->Matrimunal->getAllEductionType();

            $this->view('matrimunal/register_more_data',$data,$adata,$mdata,$ndata,$rdata);
        }
    }

    public function searchpartner(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['submitbtn'])){
                $adata['message'] = null;
                $gender = trim($_POST['gender']);
                $age = trim($_POST['age']);
                $religion = trim($_POST['religion']);
                $Country = trim($_POST['Country']);
                $data = $this->Matrimunal->getPatner($gender,$age,$religion,$Country);
                // print_r($data);
                if(!$data){
                    $adata['message']="No Record found !! ";
                    // echo "WEfd". $adata['message'];
                }
                $this->view('matrimunal/result',$data,$adata);
            }
        }
    }

    public function taketoprofiledetail(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            for ($count=0; $count<$totalcount; $count++){
                if(isset($_POST['profile'.$count])){
                $profileid = trim($_POST['profileid'.$count]);
                $data = $this->Matrimunal->getpersonalDetails($profileid);
                    // print_r($data);
                $this->view('matrimunal/profile',$data);
                }
            }
        }
    }
    public function editprofile(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['edit'])){
                $profile_id = trim($_POST['profileId']);
                $userId = $_SESSION['userid'];
                $id1 = $this->Matrimunal->getuserId($userId);
                $data = $this->Matrimunal->getAllDetailOfUser($id1->id);
                $adata = $this->Matrimunal->getAllState();
                $mdata = $this->Matrimunal->getAllCountry();
                $this->view('matrimunal/edit_profile',$data,$adata,$mdata);
            }
        } 
    }

    public function updateprofile(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $adata['message'] = null;
            if(isset($_POST['UpdateProfile'])){
                $userId = $_SESSION['userid'];
                $profile_id = trim($_POST['profileId']);
               
                $maritalStatus = trim($_POST['maritalStatus']);
                $nationality = trim($_POST['natinality']);
                $State = trim( $_POST['State']);
                $height = trim( $_POST['height']);
                $weight = trim( $_POST['weight']);
                $BodyType = trim( $_POST['BodyType']);
                $familystatus = trim( $_POST['familystatus']);
                $Complexion = trim( $_POST['Complexion']);
                $Professional = trim( $_POST['Professional']);
                $last_updated_ts = $this->getCurrentTs();
                $last_updated_by = $_SESSION['userid'];
                $id1 = $this->Matrimunal->getuserId($userId);
                $data = $this->Matrimunal->getAllDetailOfUser($id1->id);
                $old_image = $data->image;
                $targetDir = "matrimunaluserimg/"; 
                $allowTypes = array('jpg','png','jpeg'); 
                $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
                $new_image = array_filter($_FILES['image']['name']); 
                // echo "old_image_name".$old_image;
               if(!empty($new_image)){ 
                   foreach($_FILES['image']['name'] as $key=>$val){ 
                         // File upload path 

                         $new_image = basename($_FILES['image']['name'][$key]); 
                        //  $targetFilePath = $targetDir . $new_image; 
                        $targetFilePath= "C:/xampp/htdocs/PerfectDream/public/matrimunaluserimg/".$new_image;
                        //  echo  "new_image_path".$targetFilePath;
                         $targetFilePath_test="C:/xampp/htdocs/PerfectDream/public/matrimunaluserimg/".$old_image;
                        //  echo  "old_image_path".$targetFilePath_test;
                         $image_data = file_get_contents($targetFilePath);
                        //  echo "image_data".$image_data;
                        $temp="temp.png";
                        $temp_new="tempnew.png";
                         if (rename(  $new_image,$temp)){
                            // echo "Successfully Renamed $new_image to $temp" ;
                        }
                         unlink($new_image);
                         if (rename(  $old_image,$temp_new)){
                            // echo "Successfully Renamed $old_image to $temp_new" ;
                        }
                         unlink($old_image);
                         if (rename(  $temp,$old_image)){
                            //  echo "Successfully Renamed $temp to $old_image" ;
                            }
                        
                         unlink($temp_new);
                        //  rename(  $temp_new,$new_image);
                         $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                        //  echo "hello".$fileType;
                        if(in_array($fileType, $allowTypes)){ 
                            // Upload file to server 
                            // $image_data = file_get_contents($new_image);
                            // $targetFilePath = $targetDir . $old_image; 
                            file_put_contents($targetFilePath_test, $image_data);
                            if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetFilePath)){ 
                                // Image db insert sql 
                                $insertValuesSQL .= "('".$new_image."', NOW()),"; 
                               
                                $Id = $this->Matrimunal->updateUserProfile($profile_id, $maritalStatus,$nationality,$Professional,$State,$height,$weight,$BodyType,$familystatus,$Complexion,$last_updated_ts,$last_updated_by,$new_image);
                                if ($Id != null){
                                    $adata['message']="Profile updated successfully !!";
                               }
                               else{
                                    $adata['message']="Failed to add data, please try again !!";
                               } 
                               
                           }
                       } 
                   } 
               }    
               $id1 = $this->Matrimunal->getuserId($userId);
               $data = $this->Matrimunal->getAllDetailOfUser($id1->id);
               $this->view('matrimunal/second',$data,$adata);

            }
        }
    }

    public function Completeprofile(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $rdata['message'] = null;
            if(isset($_POST['CompleteProfile'])){
                $profile_id = trim($_POST['profileId']);
                $profileFor = trim($_POST['profile']);
                $maritalStatus = trim($_POST['maritalStatus']);
                $livingInIndia = trim($_POST['livingInIndia']);
                $birthplace = trim($_POST['birthplace']);
                $nationality = trim($_POST['natinality']);
                $visastatus = trim( $_POST['visastatus']);
                $Professional = trim( $_POST['Professional']);
                $Income = trim( $_POST['Income']);
                $State = trim( $_POST['State']);
                $livwithFamily = trim( $_POST['Family']);
                $height = trim( $_POST['height']);
                $weight = trim( $_POST['weight']);
                $BodyType = trim( $_POST['BodyType']);
                $familystatus = trim( $_POST['familystatus']);
                $Complexion = trim( $_POST['Complexion']);
                $Diet = trim( $_POST['Diet']);
                $Drink = trim( $_POST['Drink']);
                $Smoke = trim( $_POST['Smoke']);
                $partnermaritalstatus = trim( $_POST['partnermaritalstatus']);
                $partnerreligion = trim($_POST['partnerreligion']);
                $partnereduction = trim($_POST['partnereduction']);
                $partnercountry = trim($_POST['partnercountry']);
                $partneragefrom = trim($_POST['partneragefrom']);
                $partnerageto = trim( $_POST['partnerageto']);
                $partnerdrink = trim( $_POST['partnerdrink']);
                $partnersmoke = trim( $_POST['partnersmoke']);
                $partnercitizen = trim( $_POST['partnercitizen']);
                $partnerdiet = trim( $_POST['partnerdiet']);
                // $image = trim( $_POST['image']);
                $created_ts = $this->getCurrentTs();
                $created_by = $_SESSION['userid'];
                $last_updated_ts = $this->getCurrentTs();
                $last_updated_by =$_SESSION['userid'];
                $targetDir = "matrimunaluserimg/"; 
                $allowTypes = array('jpg','png','jpeg'); 
                $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
                $image = array_filter($_FILES['image']['name']); 
               if(!empty($image)){ 
                   foreach($_FILES['image']['name'] as $key=>$val){ 
                        // File upload path 
                        $image = basename($_FILES['image']['name'][$key]); 
                        $targetFilePath = $targetDir . $image; 
                         
                        // Check whether file type is valid 
                        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
                        if(in_array($fileType, $allowTypes)){ 
                            // Upload file to server 
                            if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetFilePath)){ 
                                // Image db insert sql 
                                $insertValuesSQL .= "('".$image."', NOW()),"; 
                                $Id = $this->Matrimunal->completeUserProfile($profile_id, $profileFor, $maritalStatus, $livingInIndia,$birthplace,$nationality,$visastatus,$Professional,$Income,$State,$livwithFamily,$height,$weight,$BodyType,$familystatus,$Complexion,$Diet,$Drink,$Smoke,$partnermaritalstatus,$partnerreligion,$partnereduction,$partnercountry,$partneragefrom,$partnerageto,$partnerdrink,$partnersmoke,$partnercitizen,$partnerdiet,$created_ts,$created_by,$image,$last_updated_ts,$last_updated_by);
                               if ($Id != null){
                                    $rdata['message']="Profile completed successfully !!";
                               }
                               else{
                                    $rdata['message']="Failed to add data, please try again !!";
                               } 
                           }
                       } 
                   } 
               }
                $data = $this->Matrimunal->getAllReligion();
                $adata = $this->Matrimunal->getAllEductionType();
                $mdata = $this->Matrimunal->getAllCountry();
                $userId = $_SESSION['userid'];
                $id1 = $this->Matrimunal->getuserId($userId);
                $ndata['id'] = $id1->id;
                $this->view('matrimunal/register',$data,$adata,$mdata,$ndata,$rdata);
            }
        }
    }
}
?>