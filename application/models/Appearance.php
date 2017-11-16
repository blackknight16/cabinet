<?php
class Appearance extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        function get_data($individualId) {
            $query = $this->db->get_where('Appearance', array('IndividualId'=> $individualId));
            $result = $query->row_array();
            
            return $result;
        }
        public function set_data($individualId)
        {
            $this->load->helper('url');
            $s = 'UPDATE Appearance SET ThemeName="' . $this->input->post('themename') . '" WHERE IndividualId=' . $individualId . ';';
            $query = $this->db->query($s);
            
            return $this->get_data($individualId);
        }
}