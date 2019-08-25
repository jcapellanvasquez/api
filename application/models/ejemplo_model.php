<?php 
class Ejemplo_model extends CI_Model {
    
    public function get_users()
    {
        $query = $this->db->query("select * from users");
        return $query->result();
    }
    
    
    public function set_user($params)
    {
        $this->db->query(
            "insert into users (nombre,apellido,usuario,correo) values (?,?,?,?)",
            $params);
    }
}
?>