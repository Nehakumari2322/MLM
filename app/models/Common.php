<?php 

class Common{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function login_verification($data){
        // return true;
        $this->db->query('SELECT * FROM user where login_id = :userid and password = :password');
        $this->db->bind(':userid', $data['userid']);
        $this->db->bind(':password', $data['password']);
        if($row = $this->db->single()){
            return true;
        }
        else{
            return false;
        }
               
    } 

    public function admin_login_verification($data){
        // return true;
        $this->db->query('SELECT * FROM admin where login_id = :userid and password = :password');
        $this->db->bind(':userid', $data['userid']);
        $this->db->bind(':password', $data['password']);
        if($row = $this->db->single()){
            return true;
        }
        else{
            return false;
        }
               
    } 

    public function userExits($email){
        $this->db->query('SELECT * FROM user where login_id = :email ');
        $this->db->bind(':email', $email);
        if($row = $this->db->single()){
               
            return true;
        }
        else{
          
            return false;
        }
    }

    public function getDirectMemberDetails($data){
        $this->db->query(' SELECT id,self_member_id,rank,name FROM user  WHERE parents_member_id = :data ORDER BY rank,name ASC');
        $this->db->bind(':data', $data);
        if($row = $this->db->resultset()){
               
            return $row;
        }
        else{
          
            return false;
        }
    }

    public function getSelfMemberIdOfChild($data){
        $this->db->query(' SELECT self_member_id FROM user WHERE parents_member_id = :data ');
        $this->db->bind(':data', $data);
        if($row = $this->db->resultset()){
               
            return $row;
        }
        else{
          
            return false;
        }
    }

    public function  getJoinedMemberIdOfParents($data){
        $this->db->query(' SELECT name,parents_member_id,rank FROM user WHERE self_member_id = :data ');
        $this->db->bind(':data', $data);
        if($row = $this->db->single()){
               
            return $row;
        }
        else{
          
            return false;
        }
    }

    public function getCreditAmount($userId){
        $this->db->query('SELECT  id, sum(amount) as sum FROM payment_details WHERE  transaction_type = "cr" AND user_id = :userId GROUP BY user_id');
        $this->db->bind(':userId',$userId);
        $row = $this->db->single();
        return $row;
    }

    public function getJoinedMemberIdOfChild($memberId){
        $this->db->query(' SELECT name,parents_member_id,rank FROM user WHERE self_member_id = :memberId ');
        $this->db->bind(':memberId', $memberId);
        $row = $this->db->single();
        return $row;
    }

    public function getUserSelfMemberId($userId){
        $this->db->query('SELECT id,self_member_id,rank,name,flag FROM user WHERE login_id = :userId');
        $this->db->bind(':userId',$userId);
        $row = $this->db->single();
        return $row;
    }

    public function getStatus($userId){
        $this->db->query(' SELECT id,status FROM user WHERE id =:userId  ');
        $this->db->bind(':userId',$userId);
        $row = $this->db->single();
        return $row;
    }

    public function insertBankDetails($userId,$payment_mode,$holder_name,$bank_name,$account_no,$ifsc_code,$payment_type,$account_type,
    $upi_id,$phone_no,$createTs,$created_by,$pan_no,$pan_available,$aadhaarNumber){
        $this->db->query(' INSERT INTO user_personal_details(id, user_id, payment_mode, holder_name, bank_name, account_no, ifsc_code,'
                .        ' account_type, upi_type, upi_number, phone_no,adhar_four_digit,pan_no,pan_available, created_ts, created_by)'
                .        ' VALUES (0,:userId,:payment_mode,:holder_name,:bank_name,:account_no,:ifsc_code,:account_type,'
                .        ' :payment_type,:upi_id,:phone_no,:aadhaarNumber,:pan_no,:pan_available,:createTs,:created_by)');
        $this->db->bind(':userId',$userId);
        $this->db->bind(':payment_mode', $payment_mode);
        $this->db->bind(':holder_name', $holder_name);
        $this->db->bind(':bank_name',$bank_name);
        $this->db->bind(':account_no',$account_no);
        $this->db->bind(':ifsc_code',$ifsc_code);
        $this->db->bind(':account_type',$account_type);
        $this->db->bind(':payment_type',$payment_type);
        $this->db->bind(':upi_id',$upi_id);
        $this->db->bind(':phone_no',$phone_no);
        $this->db->bind(':pan_no',$pan_no);
        $this->db->bind(':aadhaarNumber',$aadhaarNumber);
        $this->db->bind(':pan_available',$pan_available);
        $this->db->bind(':createTs',$createTs);
        $this->db->bind(':created_by',$created_by);
        if($this->db->execute()){
            $id = $this->db->insertId();
            return $id;
        }
        else {
            return false;
        }
    }

    public function updateFlag($userId,$flag ,$lastUpdatedTs, $lastUpdatedBy){
        $this->db->query(' UPDATE user SET flag=:flag ,last_updated_ts=:lastUpdatedTs,last_updated_by=:lastUpdatedBy WHERE  login_id = :userId ');
        $this->db->bind(':userId',$userId);
        $this->db->bind(':flag',$flag);
        $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);
        $this->db->bind(':lastUpdatedBy',$lastUpdatedBy);
        if($this->db->execute()){
            $id = $this->db->insertId();
            return $id;
        }
        else {
            return false;
        }
    }

    public function insertUserData($user,$phone_no,$email, $pasword, $joined_memberId ,$status,$createTs,$created_by,$lastCreateTs,$lastCreateBy,$flag){
        // echo ' Inside  insertUserData';
        $this->db->query('INSERT INTO user(id, login_id, password, name, phone_no,parents_member_id,status,flag, created_ts, '
                .       ' created_by,last_updated_ts,last_updated_by) VALUES(0, :email,:pasword,:user,:phone_no ,:joined_memberId,'
                .       ' :status,:flag, :createTs, :created_by,:lastCreateTs,:lastCreateBy)');
        $this->db->bind(':user',$user);
        $this->db->bind(':phone_no', $phone_no);
        $this->db->bind(':email', $email);
        $this->db->bind(':pasword',$pasword);
        $this->db->bind(':joined_memberId',$joined_memberId);
        $this->db->bind(':status',$status);
        $this->db->bind(':flag',$flag);
        $this->db->bind(':createTs',$createTs);
        $this->db->bind(':created_by',$created_by);
        $this->db->bind(':lastCreateTs',$lastCreateTs);
        $this->db->bind(':lastCreateBy',$lastCreateBy);
        if($this->db->execute()){
            $user_id = $this->db->insertId();
            // echo"vgf".$user_id;
            return $user_id;
        }
        else {
            return false;
        }
    }

    public function insertIntoPaymentDetail($id,$purpose,$amount,$status,$createTs,$created_by,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query(' INSERT INTO tran_log(id, transaction_id, purpose, amount, status, created_ts, created_by, last_created_ts, last_updated_by) VALUES (0,:id,:purpose,:amount,:status,:createTs,:created_by,:lastUpdatedTs,:lastUpdatedBy) ');
        $this->db->bind(':id',$id);
        $this->db->bind(':purpose',$purpose);
        $this->db->bind(':amount',$amount);
        $this->db->bind(':status',$status);
        $this->db->bind(':createTs',$createTs);
        $this->db->bind(':created_by',$created_by);
        $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);
        $this->db->bind(':lastUpdatedBy',$lastUpdatedBy);
        if($this->db->execute()){
            $user_id = $this->db->insertId();
            // echo"vgf".$user_id;
            return $user_id;
        }
        else {
            return false;
        }
    }

    // public function updateStatusIntoUser($user_id,$status){
    //     $this=>db->query(' UPDATE user SET status =:status  WHERE login_id =:user_id  ');
    //     $this->db->bind(':status',$status);
    //     $this->db->bind(':user_id',$user_id); 
    //     if($this->db->execute()){
    //         $id = $this->db->insertId();
            
    //         return $id;
    //     }
    //     else {
    //         return false;
    //     }

    // }
    public function getuserId($userId){
        $this->db->query(' SELECT id,login_id FROM user WHERE login_id =:userId  ');
        $this->db->bind(':userId', $userId);
        $row = $this->db->single();
        return $row;
   }

    public function paymentOfMember($transaction_id,$status,$id,$createTs,$created_by,$lastCreateTs,$lastCreateby){
        $this->db->query(' INSERT INTO payment_transaction(id, user_id, amount, transaction_id, payment_status, created_ts, '
                .        ' created_by,last_updated_ts,last_updated_by) VALUES (0,:id,:amount,:transaction_id,:status,'
                .        ':createTs,:created_by,:lastCreateTs,:lastCreateby) ');
                $amount = MEMBERSHIPFEE;
        
        $this->db->bind(':id',$id); 
        $this->db->bind(':amount',$amount);
        $this->db->bind(':transaction_id',$transaction_id);       
        $this->db->bind(':status',$status);
        $this->db->bind(':createTs',$createTs);
        $this->db->bind(':created_by',$created_by);
        $this->db->bind(':lastCreateTs',$lastCreateTs);
        $this->db->bind(':lastCreateby',$lastCreateby);
        if($this->db->execute()){
            $id = $this->db->insertId();
            
            return $id;
        }
        else {
            return false;
        }
    }

    public function getNewUser($status,$memberId){
        $this->db->query(' SELECT id,name FROM user WHERE status = :status AND parents_member_id = :memberId  ');
        $this->db->bind(':memberId',$memberId);
        $this->db->bind(':status',$status);
        $row = $this->db->resultset();
        return $row;
    }

    public function assignRankAndApprove($Id,$rank,$status,$self_memberId,$lastCreateTs,$lastCreateby){
        $this->db->query(' UPDATE user SET rank = :rank ,status= :status,self_member_id =:self_memberId, '
                .        ' last_updated_ts = :lastCreateTs,last_updated_by = :lastCreateby WHERE id =:id ');
        $this->db->bind(':rank',$rank);
        $this->db->bind(':status',$status);
        $this->db->bind(':id',$Id);
        $this->db->bind(':self_memberId',$self_memberId);
        $this->db->bind(':lastCreateTs',$lastCreateTs);
        $this->db->bind(':lastCreateby',$lastCreateby);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function activateUser($Id,$lastCreateTs,$lastCreateby){
        $this->db->query( ' UPDATE user SET suspend_code = null,last_updated_ts = :lastCreateTs,last_updated_by = :lastCreateby WHERE id = :Id');
        $this->db->bind(':Id',$Id);
        $this->db->bind(':lastCreateTs',$lastCreateTs);
        $this->db->bind(':lastCreateby',$lastCreateby);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function changePassword($Id,$password,$lastCreateTs,$lastCreateby){
        $this->db->query(' UPDATE user SET password =:password,last_updated_ts=:lastCreateTs,last_updated_by=:lastCreateby '
                    .    ' WHERE  id=:Id');
        $this->db->bind(':Id',$Id);
        $this->db->bind(':password',$password);
        $this->db->bind(':lastCreateTs',$lastCreateTs);
        $this->db->bind(':lastCreateby',$lastCreateby);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }             
    }

    public function getKYCDetails($id){
        $this->db->query(' SELECT * FROM user_personal_details WHERE user_id = :id');
        $this->db->bind(':id',$id);
        $row = $this->db->single();
        return $row;
    }

    public function getAllUserForAdmin(){
        $this->db->query(' SELECT id,name,phone_no,rank,login_id,flag,login_id FROM user WHERE 1=1 And suspend_code IS NULL ');
        $row = $this->db->resultset();
        return $row;
    }

    public function getAllSuspendedUser(){
        $this->db->query(' SELECT u.id,u.name,u.suspend_code,s.suspend_reason FROM user u,suspend_status s '
                    .    ' WHERE s.suspend_code = u.suspend_code; ');
        $row = $this->db->resultset();
        return $row;
    }

    public function suspendMember($Id,$reasoncode,$lastCreateTs,$lastCreateby){
        $this->db->query(' UPDATE user SET suspend_code = :reasoncode,last_updated_ts = :lastCreateTs,last_updated_by = :lastCreateby WHERE id =:id  ');
        $this->db->bind(':reasoncode',$reasoncode);
        $this->db->bind(':id',$Id);
        $this->db->bind(':lastCreateTs',$lastCreateTs);
        $this->db->bind(':lastCreateby',$lastCreateby);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function approvePayment($Id,$payment_status,$lastCreateTs,$lastCreateby){
        $this->db->query(' UPDATE payment_transaction SET payment_status = :payment_status,last_updated_ts = :lastCreateTs,'
                .        ' last_updated_by = :lastCreateby WHERE  id =:id ');
        $this->db->bind(':payment_status',$payment_status);
        // $this->db->bind(':userId',$userId);
        $this->db->bind(':id',$Id);
        $this->db->bind(':lastCreateTs',$lastCreateTs);
        $this->db->bind(':lastCreateby',$lastCreateby);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function updateStatus($userId,$payment_status,$lastCreateTs,$lastCreateby){
        $this->db->query(' UPDATE user SET status =:payment_status,last_updated_ts = :lastCreateTs,last_updated_by = :lastCreateby WHERE login_id =:userId');
        $this->db->bind(':payment_status',$payment_status);
        $this->db->bind(':userId',$userId);
        $this->db->bind(':lastCreateTs',$lastCreateTs);
        $this->db->bind(':lastCreateby',$lastCreateby);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }
    public function getMembershipPayment(){
        $this->db->query(' SELECT pt.id,u.login_id,pt.amount,pt.transaction_id,u.name FROM payment_transaction pt,user u '
                    .    ' WHERE pt.user_id = u.id AND  payment_status = 200; ');
        $row = $this->db->resultset();
        return $row;
    }
}
?>