<?php 

class MatrimunalEndUser{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

   public function getAllEductionType(){
        $this->db->query(' SELECT id,eduction_type FROM m_education WHERE 1 = 1 ');
        $row = $this->db->resultSet();
        return $row;
   }

   public function getAllReligion(){
        $this->db->query(' SELECT id,religion_tpye FROM m_religion WHERE 1= 1 ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getAllCountry(){
        $this->db->query(' SELECT id,name FROM m_country WHERE 1=1 ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getAllState(){
        $this->db->query(' SELECT id,state FROM m_state WHERE 1=1 ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getPatner($gender,$age,$religion,$Country){
        $this->db->query(' SELECT mr.date_of_birth, md.image,md.professional,md.height,mr.profile_id,mr.first_name,mr.last_name,mr.gender,c.name,r.religion_tpye,e.eduction_type, mr.created_ts as CurrentDate,year(mr.created_ts)-year(mr.date_of_birth) as age,md.marital_status,md.state,md.income FROM m_more_user_detail md,m_user_register mr,m_country c,m_religion r,m_education e WHERE md.profile_id = mr.profile_id AND gender = :gender AND c.id = :country AND r.id= :religion AND c.id =mr.country_id AND mr.religion_id = r.id AND mr.education_id= e.id AND year(mr.created_ts)-year(mr.date_of_birth) >=:age ');
        $this->db->bind(':gender', $gender);
        $this->db->bind(':age', $age);
        $this->db->bind(':religion', $religion);
        $this->db->bind(':country', $Country);
        $row = $this->db->resultSet();
        return $row;
    }

    public function getpersonalDetails($profileid){
        $this->db->query(' SELECT mr.date_of_birth, md.image,md.professional,md.height,mr.profile_id,mr.first_name,mr.last_name,mr.gender,c.name,r.religion_tpye,e.eduction_type, mr.created_ts as CurrentDate,year(mr.created_ts)-year(mr.date_of_birth) as age,md.marital_status,md.state,md.income,md.weight,md.complexion,md.diet,md.family_status,md.partner_marital_status,md.partner_religion,md.partner_eduction,md.partner_age_from,md.partner_citizen,md.partner_diet,md.living_with_family,md.partner_age_to FROM m_more_user_detail md,m_user_register mr,m_country c,m_religion r,m_education e WHERE md.profile_id = mr.profile_id AND mr.religion_id = r.id AND mr.education_id= e.id AND mr.profile_id = :profileid AND c.id =mr.country_id;');
        $this->db->bind(':profileid', $profileid);
        $row = $this->db->single();
        return $row;
    }

   public function register($gender,$first_name,$last_name,$number,$email,$password,$date_of_birth,$religion,$education,$country,$created_ts,$created_by,$profile_id,$userid){
    // echo"im mode".$country;
    $this->db->query(' INSERT INTO m_user_register(id,profile_id,user_id,first_name,last_name,gender,email,password,number, '
                .   ' date_of_birth, religion_id, education_id, country_id, created_ts, created_by) '
                .   ' VALUES (0,:profile_id,:userid,:first_name,:last_name,'
                .    ' :gender,:email,:password,  :number,:date_of_birth,:religion,:education,:country,:created_ts,:created_by) ');
            $this->db->bind(':first_name',$first_name);
            $this->db->bind(':last_name',$last_name);
            $this->db->bind(':profile_id',$profile_id);
            $this->db->bind(':email', $email);
            $this->db->bind(':userid', $userid);
            $this->db->bind(':gender', $gender);
            $this->db->bind(':password', $password);
            $this->db->bind(':number',$number);
            $this->db->bind(':date_of_birth', $date_of_birth);
            $this->db->bind(':religion',$religion);
            $this->db->bind(':education', $education);
            $this->db->bind(':country', $country);
            $this->db->bind(':created_ts', $created_ts);
            $this->db->bind(':created_by', $created_by);
            
            if($this->db->execute()){
                $id = $this->db->insertId();
                return $id;
            }
            else {
                return false;
            }
   }

   public function getRegisterUserDetails($id){
    $this->db->query(' SELECT * FROM m_user_register WHERE id = :id ');
    $this->db->bind(':id', $id);
    $row = $this->db->single();
    return $row;
   }

   public function getAllDetailOfUser($userId){
        $this->db->query(' SELECT ur.profile_id,ur.first_name,ur.last_name,ur.email,ur.number,ur.date_of_birth,mud.image,mud.marital_status,mud.nationality,mud.professional,mud.state,mud.height,mud.body_type,mud.family_status,mud.complexion,mud.weight FROM m_user_register ur,m_more_user_detail mud WHERE mud.profile_id = ur.profile_id and ur.user_id = :userId ');
        $this->db->bind(':userId',$userId);
        $row = $this->db->single();
        return $row;
   }

   public function getRegisterUserDetailsByProfile($profile){
    $this->db->query(' SELECT * FROM m_user_register WHERE 	profile_id = :profile ');
    $this->db->bind(':profile', $profile);
    $row = $this->db->single();
    // print_r($row);
    return $row;
   }

   public function getprofile($user){
        $this->db->query(' SELECT profile_id FROM m_user_register WHERE user_id = :user ' );
        $this->db->bind(':user', $user);
        $row = $this->db->single();
        // print_r($row);
        return $row;
   }

   public function getuserId($userId){
        $this->db->query(' SELECT id FROM user WHERE login_id =:userId  ');
        $this->db->bind(':userId', $userId);
        $row = $this->db->single();
        return $row;
   }

   public function checkuserExits($userId){
        $this->db->query(' SELECT profile_id FROM m_user_register WHERE user_id = :userId ');
        $this->db->bind(':userId', $userId);
        $row = $this->db->single();
        return $row;
   }

   public function profileExits($profile){
        $this->db->query(' SELECT * FROM m_more_user_detail WHERE profile_id = :profile ');
        $this->db->bind(':profile', $profile);
        $row = $this->db->single();
        return $row;
   }

   public function updateUserProfile($profile_id, $maritalStatus,$nationality,$Professional,$State,$height,$weight,$BodyType,$familystatus,$Complexion,$last_updated_ts,$last_updated_by,$new_image){
        $this->db->query(' UPDATE m_more_user_detail SET image=:new_image, marital_status=:maritalStatus,nationality=:nationality,professional=:Professional,state=:State,height=:height,weight=:weight,body_type=:BodyType,family_status=:familystatus,complexion=:Complexion,last_updated_ts=:last_updated_ts,last_updated_by=:last_updated_by WHERE profile_id=:profile_id ');
        $this->db->bind(':profile_id',$profile_id);
        $this->db->bind(':new_image',$new_image);
        $this->db->bind(':maritalStatus', $maritalStatus);
        $this->db->bind(':nationality',$nationality);
        $this->db->bind(':Professional', $Professional);
        $this->db->bind(':height',$height);
        $this->db->bind(':weight',$weight);
        $this->db->bind(':State', $State);
        $this->db->bind(':BodyType',$BodyType);
        $this->db->bind(':familystatus', $familystatus);
        $this->db->bind(':Complexion', $Complexion);
        $this->db->bind(':last_updated_ts', $last_updated_ts);
        $this->db->bind(':last_updated_by', $last_updated_by);
        if($this->db->execute()){
            $id = $this->db->insertId();
            return $id;
        }
        else {
            return false;
        }    
   }


   public function completeUserProfile($profile_id, $profileFor, $maritalStatus, $livingInIndia,$birthplace,$nationality,$visastatus,$Professional,$Income,$State,$livwithFamily,$height,$weight,$BodyType,$familystatus,$Complexion,$Diet,$Drink,$Smoke,$partnermaritalstatus,$partnerreligion,$partnereduction,$partnercountry,$partneragefrom,$partnerageto,$partnerdrink,$partnersmoke,$partnercitizen,$partnerdiet,$created_ts,$created_by,$image,$last_updated_ts,$last_updated_by){
    $this->db->query(' INSERT INTO m_more_user_detail(profile_id,image,profile_for,marital_status,living_in_india,birth_place,'
                .    ' nationality, visa_status, professional, income, state, living_with_family, height, weight, body_type, '
                .    ' family_status, complexion, diet, drink, smoke, partner_marital_status, partner_religion, partner_eduction,'
                .    ' partner_country, partner_age_from, partner_age_to, partner_drink, partner_smoke, partner_citizen,'
                .    ' partner_diet, created_ts, created_by,last_updated_ts,last_updated_by) '
                .    ' VALUES (:profile_id,:image,:profileFor,:maritalStatus,:livingInIndia,:birthplace,:nationality,:visastatus, '
                .    ' :Professional,:Income,:State,:livwithFamily,:height,:weight,:BodyType,:familystatus,:Complexion,:Diet, '
                .    ' :Drink,:Smoke,:partnermaritalstatus,:partnerreligion,:partnereduction,:partnercountry,:partneragefrom, '
                .    ' :partnerageto,:partnerdrink,:partnersmoke,:partnercitizen,:partnerdiet,:created_ts,:created_by,:last_updated_ts,:last_updated_by)  ');
            $this->db->bind(':profile_id',$profile_id);
            $this->db->bind(':image',$image);
            $this->db->bind(':profileFor',$profileFor);
            $this->db->bind(':maritalStatus', $maritalStatus);
            $this->db->bind(':livingInIndia', $livingInIndia);
            $this->db->bind(':birthplace', $birthplace);
            $this->db->bind(':nationality',$nationality);
            $this->db->bind(':visastatus',$visastatus);
            $this->db->bind(':Professional', $Professional);
            $this->db->bind(':Income',$Income);
            $this->db->bind(':State', $State);
            $this->db->bind(':livwithFamily', $livwithFamily);
            $this->db->bind(':height',$height);
            $this->db->bind(':weight',$weight);
            $this->db->bind(':BodyType',$BodyType);
            $this->db->bind(':familystatus', $familystatus);
            $this->db->bind(':Complexion', $Complexion);
            $this->db->bind(':Diet', $Diet);
            $this->db->bind(':Drink',$Drink);
            $this->db->bind(':Smoke', $Smoke);
            $this->db->bind(':partnermaritalstatus',$partnermaritalstatus);
            $this->db->bind(':partnerreligion', $partnerreligion);
            $this->db->bind(':partnereduction', $partnereduction);
            $this->db->bind(':partnercountry', $partnercountry);
            $this->db->bind(':partneragefrom', $partneragefrom);
            $this->db->bind(':partnerageto',$partnerageto);
            $this->db->bind(':partnerdrink',$partnerdrink);
            $this->db->bind(':partnersmoke',$partnersmoke);
            $this->db->bind(':partnercitizen',$partnercitizen);
            $this->db->bind(':partnerdiet', $partnerdiet);
            $this->db->bind(':created_ts', $created_ts);
            $this->db->bind(':created_by', $created_by);
            $this->db->bind(':last_updated_ts', $last_updated_ts);
            $this->db->bind(':last_updated_by', $last_updated_by);
        if($this->db->execute()){
            $id = $this->db->insertId();
            return $id;
        }
        else {
            return false;
        }           
    }
}

?>

