<?php

class Commons extends Controller{
    public function __construct(){
        $this->RetailModel = $this->model('Common');
        $todaysDate = null;
    }

    public function adminLogmeIn()
    {
        $this->view('common/admindashboard');
    } 

    public function logmein(){
        $this->view('common/introduction');
    }

    public function memberLinkSignUp()
    {
        if( $_GET["memberid"] ){
            $memberCode = $_GET["memberid"];
            $data['referral'] = $memberCode;
            $this->view('common/login',$data);
        }
    }

    public function agentsLogin(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data['message'] = null;
            if(isset($_POST['loginagent'])){
                $data = [
                    'userid' => trim($_POST['user_id']),
                    'password' => trim($_POST['password'])
                ];
                $matched = $this->RetailModel->login_verification($data);
                // echo "efsdv".$matched;
                if($matched == true && $data['userid'] !='admin'){

                    $this->createUserSession($data['userid']);
                    $userid = $this->RetailModel->getuserId($data['userid']);
                    $status1 = $this->RetailModel->getStatus($userid->id);
                    // echo"DErsdfg".$status1->status;
                    if($status1->status == 100){
                        $data['email'] = $data['userid'];
                        $this->view('common/payment_page',$data);
                        
                    }
                    else if($status1->status == 200){
                        $this->view('common/paymentalter');
                    }
                    else if($status1->status == 300 || $status1->status == 400){
                        $this->view('common/dashboard');
                    }
                    
                        
                }else if($matched == true && $data['userid'] =='admin'){
                       
                }
                else{
                  
                    $data['message']= " Invalid Password  !! ";
                    $data['referral'] = 'CMPNY05678';
                    $this->view('common/loginnew', $data);
                }
            }
        }
    }

    public function userRegisteration(){
        $data['message'] = null;
        if(isset($_POST['register']))
        {
            date_default_timezone_set('Asia/Kolkata');
            $user =  trim($_POST['username']);
            $phone_no =  trim($_POST['no']);
            $email =  trim($_POST['email']);
            $pasword =  trim($_POST['pasword2']);
            $joined_memberId = trim($_POST['member']);
            $status = '100';
            $createTs = $this->getCurrentTs();
            $created_by = 'user';
            $lastCreateTs = $this->getCurrentTs();
            $lastCreateBy = 'user';
            $match = $this->RetailModel->userExits($email);

        
        if($match == true)
        {
            $data['message']= " User already Registered please Login  !! ";
              
        }
        else{
            $userId = $this->RetailModel->insertUserData($user,$phone_no,$email, $pasword, $joined_memberId ,$status,$createTs,$created_by,$lastCreateTs,$lastCreateBy);
            $data['message']= " User Register Successfully !! ";
            
        }
    }
        $data['email'] = $email;
        $this->view('common/payment_page',$data);
        // $this->view('Common/login', $data);
    }

    public function taketologin(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['log'])){
                $data['referral'] = 'CMPNY05678';
                $this->view('common/loginnew',$data);
            }
        }
    }

    public function homenavbar(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['login'])){
                $data['referral'] = 'CMPNY05678';
                $this->view('common/loginnew',$data);
            }
            else if(isset($_POST['home'])){
                $this->view('common/introduction');
            }
        }
    }

    public function navbar(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['home'])){
                $userId=$_SESSION['userid'];
                $this->view('common/dashboard');
            }
            if(isset($_POST['dashboard'])){
                $userId=$_SESSION['userid'];
                $data = $this->calculateNetworksOfMember();
                $rdata = $this->RetailModel->getCreditAmount($userId);
                $status = '400';
                $mdata = $this->RetailModel->getUserSelfMemberId($userId);
                $adata = $this->RetailModel->getNewUser($status,$mdata->self_member_id);
                $this->view('common/my_network',$data,$adata,$mdata,$ndata,$rdata);
                
            }
        }
    }

    public function adminnavbar(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['home'])){
                $userId = $_SESSION['userid'];
                $this->view('common/admindashboard');
            }
          
        } 
    }

    public function myNetwok(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['directmember'])){
                $userId=$_SESSION['userid'];
                $selfId = $this->RetailModel->getUserSelfMemberId($userId);
                $data = $this->RetailModel->getDirectMemberDetails($selfId->self_member_id);
                // print_r($data);
                $this->view('common/see_member', $data);
            }
            else if(isset($_POST['totalincome'])){
                $this->view('common/see_member', $data);
            }
            else if(isset($_POST['directincome']))
            {
                $data = $this->calculateIncomeOfMember();
                // print_r($data);
                $this->view('common/incomelist', $data);
            }
            $ndata['message'] = null;
            $totalcount = trim($_POST['totalcount']);
            for($count=0; $count<=$totalcount; $count++) {
                if(isset($_POST['approve'.$count])){
                    $Id=trim($_POST['id'.$count]);
                    $rank = trim($_POST['rank'.$count]);
                    $status = '300';
                    $self_memberId ='MEMB'.mt_rand(10000,99999).mt_rand(10,99);
                    $lastCreateTs = $this->getCurrentTs();
                    $lastCreateby = 'inducer';
                    $id = $this->RetailModel->assignRankAndApprove($Id,$rank,$status,$self_memberId,$lastCreateTs,$lastCreateby);
                    if($id == true){
                        $ndata['message']  = "Member is approved  !!" ;
                    }
                    $userId=$_SESSION['userid'];
                    $data = $this->calculateNetworksOfMember();
                    $rdata = $this->RetailModel->getCreditAmount($userId);
                    $status = '400';
                    $mdata = $this->RetailModel->getUserSelfMemberId($userId);
                    $adata = $this->RetailModel->getNewUser($status,$mdata->self_member_id);
                    $this->view('common/my_network',$data,$adata,$mdata,$ndata,$rdata);
    
                }
            }
        }

    }

   

    public function calculateNetworksOfMember(){
        $userId=$_SESSION['userid'];
        $data = $this->RetailModel->getUserSelfMemberId($userId);
        $numberOfChild = $this->getNumberOfChild($data->self_member_id);
        return  $numberOfChild;

    } 

    public function calculateIncomeOfMember(){
        $userId = $_SESSION['userid'];
        $data = $this->RetailModel->getUserSelfMemberId($userId);
        $numberOfParent = $this->getDetailsAndNumberOfParents($data->self_member_id);
        // $count1 = count($numberOfParent);
        // echo "jk,mnbvsdfg".$count1;
        // print_r($numberOfParent);
        // $result['directincome'] =  $count1;
        return $numberOfParent;
    }

  
    public function getDetailsAndNumberOfParents($memberId){
        $parentData = $this->RetailModel->getJoinedMemberIdOfChild($memberId);
        // echo"DEfdvwergedasew";
        // print_r($parentData);
        $parent[0] =  array('name' => $parentData->name, 'parents_member_id' => $parentData->parents_member_id, 'rank' => $parentData->rank);
        // echo"rdtfghjnb";print_r($parent[0]);
        for($count = 0; $parentData->parents_member_id != 'CMPNY05678'; $count++ )
        {
            $grandParentsDetails = $this->RetailModel->getJoinedMemberIdOfParents($parentData->parents_member_id);
            // print_r($grandParentsDetails);
            $parent[$count+1] =  array('name' => $grandParentsDetails->name, 'parents_member_id' => $grandParentsDetails->parents_member_id, 'rank' => $grandParentsDetails->rank); 
           
            $parentData=$grandParentsDetails;
             
        }
        // echo"finalprint";
        // print_r($parent);
        
        return $parent;
       
    }

    public function getNumberOfChild($data){
        $data2['totaldirect'] = 0;
        $data2['indirect'] = 0;
        $data1 = $this->RetailModel->getSelfMemberIdOfChild($data);
        if($data1){
            $count1 = count($data1);
        }else{
            $count1 = 0;
        }
        $count = 0;
        $data2['direct'] = $count1;
        if($data1 != null){
      
            foreach($data1 as $dataline)
            {
                $store = $dataline->self_member_id;
                $adata = $this->RetailModel->getSelfMemberIdOfChild($store);
                if($adata){
                    $count2 = count($adata);
                }else{
                    $count2 = 0;
                } 
                $data2['indirect'] = $count2 + $data2['indirect'];
                $count++;
            }      
        }
        $data2['indirect'] = $data2['indirect'];
        $data2['totaldirect'] = $data2['indirect'] + $data2['direct'];
        return $data2;
    }

    public function makePaymentOfMembership(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data['message'] = null;
            if(isset($_POST['pay'])){
                $transaction_id = trim($_POST['upi_transaction_id']);
                $amount = trim($_POST['membershipfee']);
                $status = '200';
                $user_id = trim($_POST['userId']);
                $id1 = $this->RetailModel->getuserId($user_id);
                $createTs = $this->getCurrentTs();
                $created_by = 'user';
                $lastCreateTs = $this->getCurrentTs();
                $lastCreateby = 'user';
                $id = $this->RetailModel->paymentOfMember($transaction_id,$status,$id1->id,$createTs,$created_by,$lastCreateTs,$lastCreateby);
                $updated = $this->RetailModel->updateStatus($user_id,$status,$lastCreateTs,$lastCreateby);
                if($id != null){
                    $data['message'] = "Payment Request Received successfully !! ";
                }
            }
            $data['referral'] = 'CMPNY05678';
            $this->view('common/loginnew',$data);
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
       $data = $this->RetailModel->getUserSelfMemberId($user);
       $_SESSION['selfMember'] = $data->self_member_id;
    //    echo"selfmember".$_SESSION['selfMember'];
    //    echo"sessionend".$_SESSION['userid'];
       return $user;

    }
    
    public function logout(){

        unset($_SESSION['userid']);
        unset($_SESSION['loggedin']);
        unset($_SESSION['selfMember']);
        session_destroy();

    }


   

   
    
}
?>
