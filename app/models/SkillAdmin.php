<?php 

class SkillAdmin{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getTeacher(){
        $this->db->query('SELECT trainer_id,name FROM s_trainer WHERE 1 = 1');
        $row = $this->db->resultSet();
        return $row;
    }

    public function inserTrainerName($trainer_name,$image,$createdTs,$createdBy){
        $this->db->query('INSERT INTO s_trainer(trainer_id, name, image, created_ts, created_by) VALUES (0,:trainer_name,:image,'
                    .    ':createdTs,:created_by)');
        $this->db->bind(':createdTs',$createdTs);
        $this->db->bind(':trainer_name', $trainer_name);
        $this->db->bind(':image',$image);
        $this->db->bind(':created_by',$createdBy);
        if($this->db->execute()){
            $id = $this->db->insertId();
            return $id;
        }
        else {
            return false;
        }
    }

    public function approveCourseForUser($id,$status,$lastUpdateTs,$lastUpdateBy){
        $this->db->query(' UPDATE s_payment SET status = :status,last_updated_ts = :lastUpdateTs,last_updated_by = :lastUpdateBy '
                    .    ' WHERE id =:id');
        $this->db->bind(':id',$id); 
        $this->db->bind(':status',$status);
        $this->db->bind(':lastUpdateTs',$lastUpdateTs);          
        $this->db->bind(':lastUpdateBy',$lastUpdateBy);
        if($this->db->execute()){
            return true;
        }
        else{
            return false;
        }
    }

    public function getAllCourse(){
        $this->db->query(' SELECT course_id,name FROM s_course WHERE 1 = 1');
        $row = $this->db->resultSet();
        return $row;
    }

    public function insertclassLink($courseId,$link,$status,$createTs,$lastUpdateTs,$created_by,$last_update_by){
        $this->db->query(' INSERT INTO s_class_live_link(id, course_id, class_link, status, created_ts, created_by, '
                    .    ' last_updated_ts, last_updated_by) VALUES (0,:courseId,:link,:status,:createTs,:created_by, '
                    .    ' :lastUpdateTs,:last_update_by)');
        $this->db->bind(':courseId',$courseId); 
        $this->db->bind(':link',$link);
        $this->db->bind(':status',$status);
        $this->db->bind(':createTs',$createTs); 
        $this->db->bind(':created_by',$created_by);
        $this->db->bind(':lastUpdateTs',$lastUpdateTs);          
        $this->db->bind(':last_update_by',$last_update_by); 
        if($this->db->execute()){
            $course_id = $this->db->insertId();
            return $course_id;
        }
        else {
            return false;
        }           
    }

    public function getStudentMakePurchaseOfCourses($status){
        $this->db->query(' SELECT sp.id,sp.user_id,sp.course_id,sp.amount,u.name,c.name as course_name FROM s_payment sp,user u,s_course c WHERE u.id = sp.user_id AND c.course_id = sp.course_id AND sp.status = :status');
        $this->db->bind(':status',$status);
        $row = $this->db->resultSet();
        return $row;
    }

    public function getCourseList(){
        $this->db->query(' SELECT * FROM s_course WHERE 1 = 1 ');
        $row = $this->db->resultSet();
        return $row;
    }

    public function getCourseDetails($course_id){
        $this->db->query(' SELECT c.course_id,c.name as cname,c.description,c.price,c.language,b.name as bname,b.start,b.end,bs.start_time,bs.end_time,t.name as tname,b.batch_schedule_id,b.trainer_id FROM s_course c ,s_batch b , s_batch_schedule bs,s_trainer t WHERE c.course_id = :course_id AND c.course_id = b.course_id AND bs.batch_schedule_id = b.batch_schedule_id AND t.trainer_id = b.trainer_id; ');
        $this->db->bind(':course_id',$course_id);
        $row = $this->db->single();
        return $row;
        
    }

    public function updateCourse($course_name,$desc,$price,$language,$lastUpdateTs,$last_update_by,$course_id){
        $this->db->query(' UPDATE s_course SET name=:course_name,description=:desc,price=:price,language=:language,lastUpdateTs=:lastUpdateTs,last_update_by=:last_update_by WHERE  course_id =:course_id ');
        $this->db->bind(':course_name',$course_name);
        $this->db->bind(':desc', $desc);
        $this->db->bind(':price',$price);
        $this->db->bind(':language',$language);
        $this->db->bind(':lastUpdateTs',$lastUpdateTs);
        $this->db->bind(':course_id',$course_id);
        $this->db->bind(':last_update_by',$last_update_by);
        if($this->db->execute()){
            $course_id = $this->db->insertId();
            return $course_id;
        }
        else {
            return false;
        } 
    }

    public function updatebatchTime($start_time,$end_time,$batch_id){
        $this->db->query(' UPDATE s_batch_schedule SET start_time=:start_time,end_time=:end_time WHERE batch_schedule_id = :batch_id ');
        $this->db->bind(':batch_id',$batch_id);
        $this->db->bind(':start_time',$start_time);
        $this->db->bind(':end_time', $end_time);
   
        if($this->db->execute()){
            $batch_schedule_id = $this->db->insertId();
            return $batch_schedule_id;
        }
        else {
            return false;
        } 
    }

    public function updatebatch($course_id,$batch_id,$teacher,$start_date,$end_date,$batch){
        $this->db->query(' UPDATE s_batch SET name=:batch,trainer_id=:teacher,start=:start_date,end=:end_date WHERE batch_schedule_id =:batch_id AND course_id = :course_id');
        $this->db->bind(':batch',$batch);
        $this->db->bind(':batch_id', $batch_id);
        $this->db->bind(':teacher', $teacher);
        $this->db->bind(':course_id', $course_id);
        $this->db->bind(':start_date', $start_date);
        $this->db->bind(':end_date', $end_date);
        if($this->db->execute()){
            $batch_id = $this->db->insertId();
            return $batch_id;
        }
        else {
            return false;
        }
    }
    public function insertCourse($course_name,$image,$desc,$price,$language,$createTs,$lastUpdateTs,$created_by,$last_update_by){
        $this->db->query('INSERT INTO s_course (course_id, name, description, image, price, language, createTs, lastUpdateTs,'
                .        ' created_by, last_update_by) VALUES (0, :course_name, :desc, :image, :price, :language, :createTs, '
                .        ' :lastUpdateTs, :created_by, :last_update_by)');
        $this->db->bind(':course_name',$course_name);
        $this->db->bind(':desc', $desc);
        $this->db->bind(':image',$image);
        $this->db->bind(':price',$price);
        $this->db->bind(':language',$language);
        $this->db->bind(':createTs',$createTs);
        $this->db->bind(':lastUpdateTs',$lastUpdateTs);
        $this->db->bind(':created_by',$created_by);
        $this->db->bind(':last_update_by',$last_update_by);
        if($this->db->execute()){
            $course_id = $this->db->insertId();
            return $course_id;
        }
        else {
            return false;
        }
    }

    public function insertbatchTime($start_time,$end_time){
        $this->db->query('INSERT INTO s_batch_schedule (batch_schedule_id, start_time, end_time) '
                    .    ' VALUES (0, :start_time, :end_time);');
    
        $this->db->bind(':start_time',$start_time);
        $this->db->bind(':end_time', $end_time);
   
        if($this->db->execute()){
            $batch_schedule_id = $this->db->insertId();
            return $batch_schedule_id;
        }
        else {
            return false;
        }
    }

    public function insertbatch($Course_id,$batch_schedule_id,$teacher,$start_date,$end_date,$batch){
        $this->db->query('INSERT INTO s_batch (batch_id, name, batch_schedule_id, trainer_id, course_id, start, end) '
                 .       ' VALUES (0, :batch, :batch_schedule_id,:teacher , :Course_id, :start_date, :end_date);');
    
        $this->db->bind(':batch',$batch);
        $this->db->bind(':batch_schedule_id', $batch_schedule_id);
        $this->db->bind(':teacher', $teacher);
        $this->db->bind(':Course_id', $Course_id);
        $this->db->bind(':start_date', $start_date);
        $this->db->bind(':end_date', $end_date);
        if($this->db->execute()){
            $batch_id = $this->db->insertId();
            return $batch_id;
        }
        else {
            return false;
        }
    }
    
}
?>