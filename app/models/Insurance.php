<?php 

class Insurance{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function insertUserRequest($name, $number, $email, $nomineename, $relation, $age, $dob, $dob_of_nominee,$policytype,$qulifi,$occu, $monthly_income, $brand,$rcbookfile,$addressprooffile,$idprofffile, $createdTs, $createdby,$lastUpdatedTs, $lastUpdatedby, $status,$other,$yearly,$term,$sum,$policy_number,$company_name,$company_plan){
        // echo ' Inside insertbookingForm';
       $this->db->query(' INSERT INTO insu_user_request(id, name, number, email, nomineename, relation, age, dob, status, policy_type, '
                .       ' qualification, occupation, monthly_income, d_o_b_of_nominee, rc_book_img, brand_of_car,other_brand_of_car, '
                .       ' address_proof_img,  id_proof_img,yearly_premium,term,sum_assured,policy_number,company_name,company_plan, '
                .       ' created_ts, created_by, last_updated_ts, last_updated_by) '
                .       ' VALUES (0,:name,:number,:email,:nomineename,:relation,:age,:dob,:status,:policytype,:qulifi,:occu, '
                .       ' :monthly_income,:dob_of_nominee,:rcbookfile, :brand,:other,:addressprooffile,:idprofffile,:yearly,:term,:sum,'
                .       ' :policy_number,:company_name,:company_plan,:createdTs,:createdby,:updatedTs,:updatedby) ');
                        
          $this->db->bind(':name',$name);
          $this->db->bind(':number',$number);
          $this->db->bind(':email',$email);
          $this->db->bind(':nomineename',$nomineename);
          $this->db->bind(':relation',$relation);
          $this->db->bind(':age',$age);
          $this->db->bind(':dob',$dob);
          $this->db->bind(':status',$status);
          $this->db->bind(':policytype',$policytype);
          $this->db->bind(':qulifi',$qulifi);
          $this->db->bind(':occu',$occu);
          $this->db->bind(':monthly_income',$monthly_income);
          $this->db->bind(':dob_of_nominee',$dob_of_nominee);
          $this->db->bind(':brand',$brand);
          $this->db->bind(':other',$other);
          $this->db->bind(':rcbookfile',$rcbookfile);
          $this->db->bind(':addressprooffile', $addressprooffile);
          $this->db->bind(':idprofffile',$idprofffile);   
          $this->db->bind(':yearly',$yearly);
          $this->db->bind(':term',$term);
          $this->db->bind(':policy_number',$policy_number);
          $this->db->bind(':company_name',$company_name);
          $this->db->bind(':company_plan',$company_plan);
          $this->db->bind(':sum',$sum);
          $this->db->bind(':createdTs',$createdTs);
          $this->db->bind(':createdby',$createdby);
          $this->db->bind(':updatedTs',$lastUpdatedTs);
          $this->db->bind(':updatedby',$lastUpdatedby);
      
        if($this->db->execute()){
            $id = $this->db->insertId();
            return  $id;
        }
        else {
            return false;
        }
    }
    
    public function getAllUser(){
        $this->db->query(' SELECT id, name, number, email, nomineename, relation, age, dob, rc_book_img, address_proof_img, id_proof_img,status,policy_type,occupation,monthly_income,brand_of_car,yearly_premium,term,sum_assured,policy_number,company_name,company_plan FROM insu_user_request WHERE 1 =1 ORDER BY id DESC ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function updateStatus($id,$status,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query(' UPDATE insu_user_request SET status=:status, last_updated_ts=:lastUpdatedTs,last_updated_by =:lastUpdatedBy WHERE id = :id ');
        $this->db->bind(':status',$status);
        $this->db->bind(':id',$id);
        $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);
        $this->db->bind(':lastUpdatedBy',$lastUpdatedBy);
        if($this->db->execute()){
            $id = $this->db->insertId();
            return  $id;
        }
        else {
            return false;
        }
    }

}