<?php
class Action extends CI_Model {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->library('DateTimeFormatter');
        }
        
        function get_actions($individualId) {
            $query = $this->db->query(
                'SELECT * FROM Action WHERE individualId=' 
                    . $individualId, FALSE);
            $result = $query->result();
            foreach ($result as $k => $v) {
                $result[$k]->CreateDate = 
                    $this->datetimeformatter->formateDate($v->CreateDate);
                $result[$k]->EndDate = 
                    $this->datetimeformatter->formateDate($v->EndDate);
            }
            return $result;
        }

}