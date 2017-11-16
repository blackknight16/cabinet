<?php
class User extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        function get_user($login, $password) {  
            $query = $this->db->get_where(
                    'User', array('Login'=> $login, 'Password'=>$password));
            return $query->row_array();
        }
}