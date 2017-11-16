<?php
class Contact extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        function get_contacts($individualId) {
            $query = $this->db->query(
                'SELECT * FROM Contact WHERE individualId='
                    . $individualId, FALSE);
            return $query->result();
        }

}