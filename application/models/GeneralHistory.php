<?php
class GeneralHistory extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('DateTimeFormatter');
    }
    
    function get_generalHistories($individualId) {
        $query = $this->db->query(
            'SELECT * FROM GeneralHistory WHERE individualId='
                . $individualId, FALSE);
        $result = $query->result();
        
        foreach ($result as $k=>$v){
            $result[$k]->Date = 
                    $this->datetimeformatter->formateDate($v->Date);
        }
        return $result;
    }

}