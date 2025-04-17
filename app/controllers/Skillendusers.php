<?php

class SkillEndUsers extends Controller{
    public function __construct() {
        // echo 'Agents construct';
         $this->SkillEndUser = $this->model('SkillEndUser');
         $todaysDate = null;
    }

    public function logmein(){
        $userId = $_SESSION['userid'];
        $data = $this->SkillEndUser->getAllCourses();
        $adata = $this->SkillEndUser->getAllFaclity();
        $this->view('skill/main',$data,$adata);
    }

    public function navbar(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['home'])){
                $data = $this->SkillEndUser->getAllCourses();
                $adata = $this->SkillEndUser->getAllFaclity();
                $this->view('skill/main',$data,$adata);
            }
            else if(isset($_POST['logo'])){
                $this->view('common/dashboard');
            }
            else if(isset($_POST['cart'])){
                $email =  $_SESSION['userid'];
                $userId = $this->SkillEndUser->getUserId($email);
                $data = $this->SkillEndUser->getCartCourses($userId->id);
                $this->view('skill/cart',$data);
            }
            else if(isset($_POST['dashboard'])){
                $email =  $_SESSION['userid'];
                $userId = $this->SkillEndUser->getUserId($email);
                $status = '70';
                $data = $this->SkillEndUser->getStudentPurchaseCourse($userId->id,$status);
                $this->view('skill/dashboard',$data);
            }

        }
    }

    public function launch(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            for ($count=0; $count<$totalcount; $count++){
                if(isset($_POST['launch'.$count])){
                    $course_id = trim($_POST['course_id'.$count]);
                    $data = $this->SkillEndUser->getLiveClassLink($course_id);
                    $this->view('skill/classlink',$data);
                }
            }
        }
    }

    public function buycourse(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            for ($count=0; $count<$totalcount; $count++){
                if(isset($_POST['buy'.$count])){
                    $course_id = trim($_POST['course_id'.$count]);
                    $email =  $_SESSION['userid'];
                    $price = trim($_POST['price'.$count]);
                    $userId = $this->SkillEndUser->getUserId($email);
                    $data['price']= $price;
                    $data['courseId'] = $course_id;
                    $data['userId'] = $userId->id;
                    $this->view('skill/payment',$data);
                  
                }
            }
        }
    }


    public function buyCourses(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            for ($count=0; $count<$totalcount; $count++){
                if(isset($_POST['buy'.$count])){
                $course_id = trim($_POST['course_id'.$count]);
                $data = $this->SkillEndUser->getCourseDetail($course_id);
                $adata = $this->SkillEndUser->getAllFaclity();
                $this->view('skill/coursesdetails',$data,$adata); 
                }
            }
        }
    }

    public function main(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $totalcount = trim($_POST['totalcount']);
            for ($count=0; $count<$totalcount; $count++){
                if(isset($_POST['enroll'.$count])){
                $course_id = trim($_POST['course_id'.$count]);
                $data = $this->SkillEndUser->getAllCourses();
                $adata = $this->SkillEndUser->getAllFaclity();
                $this->view('skill/addcourses',$data,$adata); 
                }
            }
        }
    }


    public function purchase(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $mdata['message'] = null;
            if(isset($_POST['home'])){
                $data = $this->SkillEndUser->getAllCourses();
                $adata = $this->SkillEndUser->getAllFaclity();
                $this->view('skill/addcourses',$data,$adata);
            }
            else if(isset($_POST['cart'])){
                $email =  $_SESSION['userid'];
                $courseId = trim($_POST['course_id']);
                $userId = $this->SkillEndUser->getUserId($email);
                $status = '50';
                $createdBy='user';
                $createdTs=$this->getCurrentTs();
                $lastUpdatedBy='user';
                $lastUpdatedTs=$this->getCurrentTs();
                $addIntoCart = $this->SkillEndUser->insertIntoCart($userId->id,$courseId,$status,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                if($addIntoCart != null){
                    $mdata['message'] = "Course is Added to Cart !!" ;
                }
                $data = $this->SkillEndUser->getCourseDetail($courseId);
                $adata = $this->SkillEndUser->getAllFaclity();
                $this->view('skill/coursesdetails',$data,$adata,$mdata); 

            }
            else if(isset($_POST['pay'])){
                $email =  $_SESSION['userid'];
                $courseId = trim($_POST['course_id']);
                $price = trim($_POST['price']);
                $userId = $this->SkillEndUser->getUserId($email);
                $data['price']= $price;
                $data['courseId'] = $courseId;
                $data['userId'] = $userId->id;
                $this->view('skill/payment',$data);
            }
             
        }
    }

    public function paymentofcourse(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $mdata['message'] = null;
            if(isset($_POST['pay'])){
                $courseId = trim($_POST['courseId']);
                $userId = trim($_POST['userId']);
                $transactionId = trim($_POST['upi_transaction_id']);
                $price = trim($_POST['price']);
                $status = '60';//payment done
                $createdBy='user';
                $createdTs=$this->getCurrentTs();
                $lastUpdatedBy='user';
                $lastUpdatedTs=$this->getCurrentTs();
                $order = $this->SkillEndUser->insertOrderPayment($courseId,$userId,$transactionId,$price,$status,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy);
                if($order != null){
                    $mdata['message'] = "Payment is Done Successfully !!" ; 
                }
                $data = $this->SkillEndUser->getCourseDetail($courseId);
                $adata = $this->SkillEndUser->getAllFaclity();
                $this->view('skill/coursesdetails',$data,$adata,$mdata); 
            }
        }
    }


    public function createUserSession($user){
        session_start();
         // Taking current system Time
         $_SESSION['start'] = time(); 
  
         // Destroying session after 1 minute
         $_SESSION['expire'] = $_SESSION['start'] + (1 * 240) ; 
       // echo " in session: userid is ". $user;
       $_SESSION['loggedin'] = "YES";
       $_SESSION['userid'] = $user;
    //    echo"user".$_SESSION['userid'];
       $data = $this->eCommerceEndUser->cartcount($user);
    //    print_r($data);
       $_SESSION['cart'] = $data->$count;
       return $user;
    }
    
    public function logout(){

        unset($_SESSION['userid']);
        unset($_SESSION['loggedin']);
        unset($_SESSION['cart']);
        session_destroy();
        // redirect('users/login');
    }
 
}
?>