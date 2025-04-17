<?php 

class SkillEndUser{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllCourses()
    {
        $this->db->query(' SELECT course_id,name,description,image  FROM s_course WHERE 1 = 1 ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getAllFaclity()
    {
        $this->db->query(' SELECT trainer_id,image  FROM s_trainer WHERE 1 = 1 ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getCourseDetail($course_id){
        $this->db->query(' SELECT c.course_id ,c.image,c.price,c.language,c.description,bs.start_time,bs.end_time,b.start,b.end,t.name '
                .        ' FROM s_course c,s_batch_schedule bs ,s_batch b ,s_trainer t WHERE b.trainer_id = t.trainer_id '
                .        ' AND bs.batch_schedule_id = b.batch_schedule_id AND c.course_id = b.course_id  '
                .        ' AND c.course_id =:course_id');
        $this->db->bind(':course_id', $course_id);
        $row = $this->db->single();
        return $row;
    }

    public function getUserId($email){
        $this->db->query(' SELECT id FROM user WHERE  login_id =:email ');
        $this->db->bind(':email', $email); 
        $row = $this->db->single();
        return $row;
    }

    public function getCartCourses($userId){
        $this->db->query(' SELECT c.course_id,c.name,c.description,c.image,c.price,c.language  FROM s_course c,s_cart ct WHERE c.course_id = ct.course_id AND user_id =:userId');
        $this->db->bind(':userId', $userId); 
        $row = $this->db->resultSet();
        return $row;
    }

    public function getStudentPurchaseCourse($userId,$status){
        $this->db->query(' SELECT c.course_id,c.name,c.description,c.image,c.price,c.language  FROM s_course c,s_payment p WHERE  user_id =:userId AND p.course_id = c.course_id AND p.status = :status');
        $this->db->bind(':userId', $userId); 
        $this->db->bind(':status', $status); 
        $row = $this->db->resultSet();
        return $row;
    }

    public function getLiveClassLink($course_id){
        $this->db->query(' SELECT id,class_link,status FROM s_class_live_link WHERE course_id = :course_id');
        $this->db->bind(':course_id', $course_id); 
        $row = $this->db->single();
        return $row;
    }

    public function insertIntoCart($userId,$courseId,$status,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy){
        $this->db->query(' INSERT INTO s_cart(id, user_id, course_id, status, created_ts, created_by, last_updated_ts, '
                    .    ' last_updated_by) VALUES (0,:userId,:courseId,:status,:createdTs,:createdBy,:lastUpdatedTs,:lastUpdatedBy)');
        $this->db->bind(':userId', $userId); 
        $this->db->bind(':courseId', $courseId); 
        $this->db->bind(':status', $status); 
        $this->db->bind(':createdTs', $createdTs); 
        $this->db->bind(':createdBy', $createdBy); 
        $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);   
        $this->db->bind(':lastUpdatedBy', $lastUpdatedBy); 
        if($this->db->execute()){
            $cart = $this->db->insertId();
            return $cart;
          }
          else {
              return false;
          }                 
    }

    public function insertOrderPayment($courseId,$userId,$transactionId,$price,$status,$createdTs,$createdBy,$lastUpdatedTs,$lastUpdatedBy){
    $this->db->query(' INSERT INTO s_payment(id, user_id, course_id, transaction_id, amount, status, created_ts, '
                .        ' created_by, last_updated_ts, last_updated_by) VALUES (0,:userId,:courseId,:transactionId, '
                .        ' :price,:status,:createdTs,:createdBy,:lastUpdatedTs,:lastUpdatedBy)');
    $this->db->bind(':userId', $userId); 
    $this->db->bind(':courseId', $courseId); 
    $this->db->bind(':transactionId', $transactionId); 
    $this->db->bind(':price', $price); 
    $this->db->bind(':status', $status); 
    $this->db->bind(':createdTs', $createdTs); 
    $this->db->bind(':createdBy', $createdBy); 
    $this->db->bind(':lastUpdatedTs',$lastUpdatedTs);   
    $this->db->bind(':lastUpdatedBy', $lastUpdatedBy); 
    if($this->db->execute()){
        $order_id = $this->db->insertId();
        return $order_id;
      }
      else {
          return false;
      }          
    }
    
   
}
?>