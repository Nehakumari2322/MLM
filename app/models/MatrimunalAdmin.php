<?php 

class MatrimunalAdmin{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllRegisterUser(){
        $this->db->query('SELECT ur.profile_id,ur.first_name,ur.last_name,ur.gender,ur.number,mur.nationality,mur.state '
                    .    ' FROM m_user_register ur,m_more_user_detail mur WHERE ur.profile_id = mur.profile_id;');
        $row = $this->db->resultSet();
        return $row;
    }
   
}
?>