<?php
 if (!defined('BASEPATH'))
 	exit('No direct script access allowed');

class M_login extends CI_Model {

    function loginMe($email, $password){
        $this->db->select('users.id_users, users.password, users.username, users.id_role, role.id_role');
        $this->db->from('users');
        $this->db->join('roles', 'roles.id_role = users.id_role');
        $this->db->where('users.email', $email);
        $this->db->where('users.isDeleted', 0);
        $query = $this->db->get();

        $user = $query->result();

        if (!empty($user)) {
            if (verifyHashedPassword($password, $user[0]->password)) {
                return $user;
            } else {
                return array();
            }
        } else {
           return array();
        } 

    }

    function checkEmailExist($email){
        $this->db->select('id_users');
        $this->db->where('email', $email);
        $this->db->where('isDeleted', 0);
        $query = $this->db->get('users');

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
        
    }
	
}
?>