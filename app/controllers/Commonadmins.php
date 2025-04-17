<?php

class Commonadmins extends Controller{
    public function __construct(){
        $this->common = $this->model('Common');
        $todaysDate = null;
    }

    public function logmein(){
        $this->view('commonadmin/dashboard');
    }

    public function agentsLogin(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data['message'] = null;
            if(isset($_POST['loginagent'])){
                $data = [
                    'userid' => trim($_POST['userid']),
                    'password' => trim($_POST['password'])
                ];
                $matched = $this->common->admin_login_verification($data);
                // echo "efsdv".$matched;
                if($matched == true && $data['userid'] !='admin'){

                    $this->createUserSession($data['userid']);
                    $this->view('commonadmin/home',$data);
                   
                        
                }else if($matched == true && $data['userid'] =='admin'){
                       
                }
                else{
                  
                    $data['message']= " Invalid Password  !! ";
                    $this->view('commonadmin/login',$data);
                   
                }
            }
        }
    }

    public function navigation(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['payment'])){
                $data = $this->common->getMembershipPayment();
                $this->view('commonadmin/memberpayment',$data);
            }
            else if(isset($_POST['tmember'])){
                $data = $this->common->getAllUserForAdmin();
                $this->view('commonadmin/showtotalmember',$data);
            }
            else if(isset($_POST['smember'])){
                $data = $this->common->getAllSuspendedUser();
                $this->view('commonadmin/showsuspendedmember',$data);
            }
        }
    }

    public function approvependingmember(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $adata['message'] = null;
            $totalcount = trim($_POST['totalcount']);
            for($count=0; $count<=$totalcount; $count++) {
                if(isset($_POST['suspend'.$count])){
                    // echo"suspend";
                    $Id = trim($_POST['id'.$count]);
                    $reasoncode = trim($_POST['reason'.$count]);
                    $lastCreateTs = $this->getCurrentTs();
                    $lastCreateby = 'admin';
                    $id = $this->common->suspendMember($Id,$reasoncode,$lastCreateTs,$lastCreateby);
                    if($id == true){
                        $adata['message']  = "Member is suspended !!" ;
                    }
                    $data = $this->common->getAllUserFOrAdmin();
                    $this->view('commonadmin/showtotalmember',$data,$adata);

                }
                else if(isset($_POST['change'.$count])){
                    // echo"change";
                    $Id = trim($_POST['id'.$count]);
                    $password = trim($_POST['password'.$count]);
                    $lastCreateTs = $this->getCurrentTs();
                    $lastCreateby = 'admin';
                    $id = $this->common->changePassword($Id,$password,$lastCreateTs,$lastCreateby);
                    if($id == true){
                        $adata['message']  = "Password is Changed Successfully !!" ;
                    }
                    $data = $this->common->getAllUserFOrAdmin();
                    $this->view('commonadmin/showtotalmember',$data,$adata);
                }
                else if(isset($_POST['kyc'.$count])){
                    $Id = trim($_POST['userid'.$count]);
                    $data = $this->common->getKYCDetails($Id);
                    $this->view('commonadmin/kycdetails',$data);

                }
            }
        }
    }

    public function approvemembershippayment(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $adata['message'] = null;
            $totalcount = trim($_POST['totalcount']);
            for($count=0; $count<=$totalcount; $count++) {
                if(isset($_POST['approve'.$count])){
                    $Id = trim($_POST['id'.$count]);
                    $email = trim($_POST['login_id'.$count]);
                    $userId = $this->common->getuserId($email);
                    $payment_status = 400;
                    $lastCreateTs = $this->getCurrentTs();
                    $lastCreateby = 'admin';
                    $paymentId = $this->common->approvePayment($Id,$payment_status,$lastCreateTs,$lastCreateby);
                    $id = $this->common->updateStatus($email,$payment_status,$lastCreateTs,$lastCreateby);
                    if($id == true){
                        $adata['message']  = "Payment is Approved!!" ;
                    }
                    $data = $this->common->getMembershipPayment();
                    $this->view('commonadmin/memberpayment',$data,$adata);

                }
            }
        } 
    }

    public function reactivesuspendeduser(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $adata['message'] = null;
            $totalcount = trim($_POST['totalcount']);
            for($count=0; $count<=$totalcount; $count++) {
                if(isset($_POST['reactive'.$count])){
                    $Id = trim($_POST['id'.$count]);
                    $lastCreateTs = $this->getCurrentTs();
                    $lastCreateby = 'admin';
                    $activated = $this->common->activateUser($Id,$lastCreateTs,$lastCreateby);
                    if($Id == true){
                        $adata['message']  = "user is activated now" ;
                    }
                    $data = $this->common->getAllSuspendedUser();
                    $this->view('commonadmin/showsuspendedmember',$data,$adata);
                }
            }
        } 
    }

    public function createUserSession($user){
        session_start();
         // Taking current system Time
        $_SESSION['start'] = time(); 
  
         // Destroying session after 1 minute
        $_SESSION['expire'] = $_SESSION['start'] + (1 * 240) ; 
        // echo "start:".$_SESSION['start'].' End:'.$_SESSION['expire'];
    //    echo " in session: userid is ". $user;
       $_SESSION['loggedin'] = "YES";
       $_SESSION['userid'] = $user;
       $data = $this->common->getUserSelfMemberId($user);
       $_SESSION['name'] = $data->name;
       $_SESSION['flag'] = $data->flag;
       $_SESSION['selfMember'] = $data->self_member_id;
    //    echo"selfmember".$_SESSION['selfMember'];
    //    echo"sessionend".$_SESSION['userid'];
       return $user;

    }
    
    public function logout(){

        unset($_SESSION['userid']);
        unset($_SESSION['loggedin']);
        unset($_SESSION['selfMember']);
        unset($_SESSION['profileId']);
        unset($_SESSION['flag']);
        session_destroy();
    }
}
?>