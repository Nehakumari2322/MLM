<?php

class SkillAdmins extends Controller{
    public function __construct() {
        // echo 'Agents construct';
         $this->SkillAdmin = $this->model('SkillAdmin');
         $todaysDate = null;
    }

    public function logmein(){
        $data = $this->SkillAdmin->getTeacher();
        $this->view('skill/addcourse',$data);
    }
    public function adminnavbar(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['logo'])){
                $this->view('common/admindashboard');
            }
            else if(isset($_POST['home'])){
                $data = $this->SkillAdmin->getTeacher();
                $this->view('skill/addcourse',$data);
            }
            else if(isset($_POST['trainer'])){
               
                $this->view('skill/trainer_details');
            }
            else if(isset($_POST['link'])){
                $data = $this->SkillAdmin->getAllCourse();
                $this->view('skill/addclasslink',$data);
            }
            else if(isset($_POST['seeStudent'])){
                $status = '60';
                $data = $this->SkillAdmin->getStudentMakePurchaseOfCourses($status);
                $this->view('skill/student_details',$data);
            }
            
        }
    }

    public function uploadlink(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $adata['message']  = null;
            if(isset($_POST['uploadlive'])){
                $courseId = trim($_POST['course_id']);
                $link = trim($_POST['link']);
                $status = trim($_POST['status']);
                $createTs =$this->getCurrentTs();
                $lastUpdateTs =$this->getCurrentTs();
                $created_by = 'Admin';
                $last_update_by = 'Admin';
                $id= $this->SkillAdmin->insertclassLink($courseId,$link,$status,$createTs,$lastUpdateTs,$created_by,$last_update_by);
                if($id != null){
                    $adata['message']  = "course link is uploaded Successfully !!" ; 
                }
                $data = $this->SkillAdmin->getAllCourse();
                $this->view('skill/addclasslink',$data,$adata);
            } 
        } 
    }

    public function approvecourse(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $adata['message'] = null;
            $totalcount = trim($_POST['totalcount']);
            for ($count=0; $count<$totalcount; $count++){
                if(isset($_POST['approve'.$count])){
                    $id = trim($_POST['id'.$count]);
                    $status = '70';
                    $lastUpdateTs =$this->getCurrentTs();
                    $lastUpdateBy = 'Admin';
                    $approve = $this->SkillAdmin->approveCourseForUser($id,$status,$lastUpdateTs,$lastUpdateBy);
                    if($approve == true){
                        $adata['message']  = "course is approved Successfully !!" ; 
                    }
                $status = '60';
                $data = $this->SkillAdmin->getStudentMakePurchaseOfCourses($status);
                $this->view('skill/student_details',$data,$adata);
                }
            }
        }
    }

    public function main(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $adata['message'] = null;
            // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['add_course'])){
                // $image = trim($_POST['image']);
                $course_name = trim($_POST['course']);
                $start_date = trim($_POST['start']);
                $end_date = trim($_POST['end']);
                $start_time = trim($_POST['starttime']);
                $end_time = trim($_POST['endtime']);
                $desc = ($_POST['desc']);
                $language = trim($_POST['language']);
                $teacher = trim($_POST['teacher']);
                $price = trim($_POST['price']);
                $batch = trim($_POST['batch']);
                $createTs =$this->getCurrentTs();
                $lastUpdateTs =$this->getCurrentTs();
                $created_by = 'Admin';
                $last_update_by = 'Admin';

                $targetDir = "courses/"; 
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
                                 $Course_id = $this->SkillAdmin->insertCourse($course_name,$image,$desc,$price,$language,$createTs,$lastUpdateTs,$created_by,$last_update_by);
                                 $batch_schedule_id = $this->SkillAdmin->insertbatchTime($start_time,$end_time);
                                 $btach_id = $this->SkillAdmin->insertbatch($Course_id,$batch_schedule_id,$teacher,$start_date,$end_date,$batch);
                                //  echo"wergf";
                                 if($Course_id != null){
                                    $adata['message']  = "course is added Successfully !!" ;
                                }
                                else{
                                     $adata['message']="Failed to add, please try again !!";
                                } 
                            }
                        } 
                    } 
                }
                $data = $this->SkillAdmin->getTeacher();
                $this->view('skill/addcourse',$data,$adata); 
            } 
            else if(isset($_POST['list'])){
                $data = $this->SkillAdmin->getCourseList();
                $this->view('skill/course_list',$data);
            }
        }
    }

    public function editCouseData(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $mdata['message'] = null;
            // $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['edit_course'])){
                $course_id = trim($_POST['course_id']);
                $batch_id = trim($_POST['batch_id']);
                $course_name = trim($_POST['course']);
                $start_date = trim($_POST['start']);
                $end_date = trim($_POST['end']);
                $start_time = trim($_POST['starttime']);
                $end_time = trim($_POST['endtime']);
                $desc = ($_POST['desc']);
                $language = trim($_POST['language']);
                $teacher = trim($_POST['teacher']);
                $price = trim($_POST['price']);
                $batch = trim($_POST['batch']);
                $lastUpdateTs =$this->getCurrentTs();
                $last_update_by = 'Admin';
                $Courseid = $this->SkillAdmin->updateCourse($course_name,$desc,$price,$language,$lastUpdateTs,$last_update_by,$course_id);
                $batch_schedule_id = $this->SkillAdmin->updatebatchTime($start_time,$end_time,$batch_id);
                $btach_id = $this->SkillAdmin->updatebatch($course_id,$batch_id,$teacher,$start_date,$end_date,$batch);
                //  echo"wergf";
                if($btach_id != null){
                    $mdata['message']  = "course is Updated Successfully !!" ;
                }
                else{
                     $mdata['message']="Failed to add, please try again !!";
                    } 
                    
                    
                $data = $this->SkillAdmin->getCourseDetails($course_id);
                $adata = $this->SkillAdmin->getTeacher();
                $this->view('skill/editcourse',$data,$adata,$mdata);
            }
           
        }

    }
    public function editcourselist(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            for ($count=0; $count<$totalcount; $count++){
                if(isset($_POST['approve'.$count])){
                    $course_id = trim($_POST['id'.$count]);
                    $data = $this->SkillAdmin->getCourseDetails($course_id);
                    $adata = $this->SkillAdmin->getTeacher();
                    $this->view('skill/editcourse',$data,$adata);
                }
            }
        }
    }

    public function addtrainerDetails(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data['message'] = null;
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['add_trainer'])){
                $trainer_name = trim($_POST['name']);
                $createdTs =$this->getCurrentTs();
                $createdBy = 'Admin';
                $targetDir = "trainer/"; 
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
                                 $id = $this->SkillAdmin->inserTrainerName($trainer_name,$image,$createdTs,$createdBy);
                                //  echo"wergf";
                                 if($id != null){
                                    $data['message']  = "trainer is added Successfully !!" ;
                                }
                                else{
                                     $data['message']="Failed to add, please try again !!";
                                } 
                            }
                        } 
                    } 
                }
                $this->view('skill/trainer_details',$data); 
            }
        }
    }
}
?>
