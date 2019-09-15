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

    
    
    public function get_token($params)
    {
        $rs = "";
        $rs = $this->db->query(
            "select * from users where usuario=? and clave= md5(?)",
            $params)->result();

        if(count($rs) > 0) {
            return json_encode($rs);
        } else {
            return "";
        }
    }
}
?>