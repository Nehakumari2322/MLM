<?php

class Commons extends Controller{
    public function __construct(){
        $this->RetailModel = $this->model('Common');
        $todaysDate = null;
    }

    public function adminLogmeIn()
    {
        $this->view('commonadmin/login');
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
                    $usernmame = $_SESSION['name']; 
                    $userid = $this->RetailModel->getuserId($data['userid']);
                    $status1 = $this->RetailModel->getStatus($userid->id);
                    // echo"DErsdfg".$status1->status;
                    if($status1->status == 100){
                        $data['email'] = $data['userid'];
                        $transectionid = $this->getTransactionID();
                        echo "iusj" . $transectionid;
                        $data['id'] = $transectionid;
                        $this->view('common/pay', $data);
                        // $this->view('common/pay',$data);
                        
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

    public function payform(){
        if(isset($_POST['paypagebtn'])){
            $this->view('common/lightingthecategories');
        }
    }


    public function bill()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            if (isset($_POST['broadbandpostpaid'])) {
                $data = 25;
                $this->view('common/billfetch',$data);
            } 
            if (isset($_POST['cabletv'])) {
                $data = 1;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['clubsandassociations'])) {
                $data = 2;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['creditcard'])) {
                $data = 3;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['donation'])) {
                $data = 4;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['dth'])) {
                $data = 5;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['educationfees'])) {
                $data = 6;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['electricity'])) {
                $data = 7;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['fastag'])) {
                $data = 8;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['gas'])) {
                $data = 9;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['hospital'])) {
                $data = 10;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['hospitalandpathology'])) {
                $data = 11;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['housingsociety'])) {
                $data = 12;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['insurance'])) {
                $data = 13;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['landlinepostpaid'])) {
                $data = 14;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['loanrepayment'])) {
                $data = 15;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['lpggas'])) {
                $data = 16;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['mobilepostpaid'])) {
                $data = 17;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['mobileprepaid'])) {
                $data = 18;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['municipalservices'])) {
                $data = 19;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['municipaltaxes'])) {
                $data = 20;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['recurringdeposit'])) {
                $data = 21;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['rental'])) {
                $data = 22;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['subscription'])) {
                $data = 23;
                $this->view('common/billfetch',$data);
            }
            if (isset($_POST['water'])) {
                $data = 24;
                $this->view('common/billfetch',$data);
            }
           
        }
    }

    public function h()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            if (isset($_POST['home'])) {
                
                $this->view('common/dashboard');
            } 
        }
    }



    public function fbn()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            if (isset($_POST['fetch_bill_now'])) {
                $selectedProvider = trim($_POST['serviceProvider']);
                $mobileNumber =trim($_POST['mobileNumber']);
                $data =trim($_POST['data']);
                echo "mobilenumber" . $mobileNumber.$selectedProvider.$data;
                // $providerid=$this->commonmodel->getpaymentcategory($selectedProvider);
                // print_r($providerid->biller_id) ;
                $this->view('common/fetchedbill');
            } 
        }
    }

    public function payb()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            if (isset($_POST['pay'])) {
                
                $this->view('common/billreceipt');
            } 
        }
    }

    
    public function getTransactionID(){
    $data= rand(1111111111,99999999999);
    return $data;
        
    }

    public function callSuccess(){
        $this->view('common/dashboard');
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
            $flag = '0';
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
                $userId = $this->RetailModel->insertUserData($user,$phone_no,$email, $pasword, $joined_memberId ,$status,$createTs,$created_by,$lastCreateTs,$lastCreateBy,$flag);
                $data['message']= " User Register Successfully !! ";
                
            }
        
        
            $transectionid = $this->getTransactionID();
            echo "iusj" . $transectionid;
            $data['id'] = $transectionid;
            $amount = '49';
            $purpose = 'signUp';
            $status = '200';
            $createTs = $this->getCurrentTs();
            $created_by = $email;
            $lastUpdatedTs = $this->getCurrentTs();
            $lastUpdatedBy = $email;
            $id = $this->RetailModel->insertIntoPaymentDetail($data['id'],$purpose,$amount,$status,$createTs,$created_by,$lastUpdatedTs,$lastUpdatedBy);
            $this->view('common/pay', $data);
    }
        // $this->view('Common/login', $data);
    }

    public function footerlink(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['privacy'])){    
                $this->view('common/privacy',);
            }
            else if(isset($_POST['tearms'])){
                $this->view('common/tearms');
            }
        }
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
                $userId = $_SESSION['userid'];
                $this->view('common/dashboard');
            }
            else if(isset($_POST['dashboard'])){
                $userId = $_SESSION['userid'];
                $data = $this->calculateNetworksOfMember();
                $rdata = $this->RetailModel->getCreditAmount($userId);
                $status = '400';
                $mdata = $this->RetailModel->getUserSelfMemberId($userId);
                $adata = $this->RetailModel->getNewUser($status,$mdata->self_member_id);
                $this->view('common/my_network',$data,$adata,$mdata,$ndata,$rdata,);
                
            }
            else if(isset($_POST['kyc'])){
                $this->view('common/paymentdetails');
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

    public function kycdetails(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($_POST['submit'])){
                $userId = $_SESSION['userid'];
                $payment_mode = trim($_POST['withdraw']);
                $holder_name = trim($_POST['holder_name']);
                $bank_name = trim($_POST['bank_name']);
                $account_no = trim($_POST['account_no']);
                $ifsc_code = trim($_POST['ifsc_code']);
                $payment_type = trim($_POST['paymenttype']);
                $account_type = trim($_POST['accounttype']);
                $upi_id = trim($_POST['upi_id']);
                $phone_no = trim($_POST['phone_no']);
                $pan_no = trim($_POST['pan_no']);
                $pan_available = trim($_POST['pan_available']);
                $aadhaarNumber = trim($_POST['aadhaarNumber']);
                $createTs = $this->getCurrentTs();
                $created_by =  $_SESSION['userid'];
                $flag = '1';
                $lastUpdatedTs =  $this->getCurrentTs();
                $lastUpdatedBy = $_SESSION['userid'];
                $id = $this->RetailModel->insertBankDetails($userId,$payment_mode,$holder_name,$bank_name,$account_no,$ifsc_code,
                $payment_type,$account_type,$upi_id,$phone_no,$createTs,$created_by,$pan_no,$pan_available,$aadhaarNumber);
                $flag = $this->RetailModel->updateFlag($userId,$flag, $lastUpdatedTs, $lastUpdatedBy);
                $user = $this->RetailModel->getuserId($userId);
                session_destroy();
                $this->createUserSession($user->login_id);
                $userId = $_SESSION['userid'];
                $this->view('common/dashboard');
                // $data['referral'] = 'CMPNY05678';
                // $this->view('common/loginnew',$data);
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
                    $self_memberId = $this->processNumber($Id);
                    // $self_memberId ='PDA'.mt_rand(10000,99999).mt_rand(10,99);
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
    

    public function processNumber($id) {
        $resultString = "PDAA";
        $lenNumber = strlen(strval($id));
        
        $x = [100000000, 10000000, 1000000, 100000, 10000, 1000, 100, 10, 1];
        $lenX = count($x);
    
        for ($i = 0; $i < $lenX - 1; $i++) {
            list($quotient, $remainder) = $this->divMod($id, $x[$i]);
            $resultString .= strval($quotient);
    
            if (strlen(strval($x[$i])) - $lenNumber == 0) {
                break;
            }
        }
    
        $remainder = $id % $x[$i];
        $resultString .= strval($remainder);
        
        return $resultString;
    }

    public function divMod($a, $b) {
        $quotient = intdiv($a, $b);
        $remainder = $a % $b;
        return [$quotient, $remainder];
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

    public function calculateNetworksOfMember(){
        $data1['indirect'] = 0;
        $data2['totaldirect'] = 0;
        $userId=$_SESSION['userid'];
        $data = $this->RetailModel->getUserSelfMemberId($userId);     
        $numberOfChild = $this->getNumberOfChild($data->self_member_id);
        // echo"child";print_r($numberOfChild);
        if($numberOfChild){
            $count1 = count($numberOfChild);
        }else{
            $count1 = 0;
        }
        $data1['direct'] = $count1;
        while($numberOfChild != null){
            foreach ($numberOfChild as $dataline){
                $selfId = $dataline->self_member_id;
                // echo"id is".$selfId;
                $numberOfChild = $this->getNumberOfChild($selfId);
                if($numberOfChild){
                    $count = count($numberOfChild);
                }else{
                    $count = 0;
                }
                // echo"grand";print_r($numberOfChild);
                $data1['indirect'] = $data1['indirect'] + $count;
            }
        }
        $data1['totaldirect'] =  $data1['indirect'] + $data1['direct'];
        return  $data1;

    } 

    public function getNumberOfChild($data){
        $data1 = $this->RetailModel->getSelfMemberIdOfChild($data); 
        return $data1;
    }

   

    public function getNumberOfChild1($data){
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
        $_SESSION['start'] = time(); 
        $_SESSION['expire'] = $_SESSION['start'] + (1 * 240) ; 
    
       $_SESSION['loggedin'] = "YES";
       $_SESSION['userid'] = $user;
       $_SESSION['profileId'] = null;
       $data = $this->RetailModel->getUserSelfMemberId($user);
       $_SESSION['name'] = $data->name;
       $_SESSION['flag'] = $data->flag;
       $_SESSION['selfMember'] = $data->self_member_id;
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
