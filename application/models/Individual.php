<?php
class Individual extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->library('DateTimeFormatter');
        }
        function get_individual($id) {
            $query = $this->db->get_where('Individual', array('id'=> $id));
            $result = $query->row_array();
            
                $result['Birthday'] = 
                    $this->datetimeformatter->formateDate($result['Birthday']);
            return $result;
        }
        public function set_data($id)
        {
            $this->load->helper('url');
            $s = 'UPDATE Individual SET Fio="' . $this->input->post('fio') . '",Post="' . $this->input->post('post') . '",Company="' . $this->input->post('company') . '",Birthday="' .  $this->input->post('birthday') . '" WHERE Id=' . $id . ';';
            $query = $this->db->query($s);
            
            return $this->get_individual($id);
        }
}