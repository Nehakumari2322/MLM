<?php 

class Demate{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function updateAccount($account_no,$userId){

        $this->db->query(' INSERT INTO d_user(id, user_id, account_no) VALUES (0,:user_id,:account_no) ');
        $this->db->bind(':user_id', $userId);
        $this->db->bind(':account_no', $account_no);
        if($this->db->execute()){
            $id = $this->db->insertId();
            
            return $id;
        }
        else {
            return false;
        }
               
    } 

  
    public function getuserId($email){
        $this->db->query(' SELECT id FROM user WHERE login_id =:email ');
        $this->db->bind(':email', $email);
        $row = $this->db->single();
        // echo"gh";print_r($row);
        return $row;
    }
    
}