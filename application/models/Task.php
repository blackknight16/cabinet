<?php
class Task extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->library('DateTimeFormatter');
        }
        
    function get_tasks($individualId) {
        $query = $this->db->query(
            'SELECT * FROM Task WHERE individualId='
                . $individualId, FALSE);
        $result = $query->result();
        
        foreach ($result as $k=>$v){
            $result[$k]->CreateDate = 
               $this->datetimeformatter->formateDate($v->CreateDate);
            $result[$k]->BeginTime = 
               $this->datetimeformatter->formateTime($v->BeginTime);
            $result[$k]->EndTime = 
               $this->datetimeformatter->formateTime($v->EndTime);
        }
        return $result;
    }

}