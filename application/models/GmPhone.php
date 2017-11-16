<?php
class GmPhone extends CI_Model {

        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->library('DateTimeFormatter');
        }
        function get_gmPhones($individualId) {
            $query = $this->db->query(
                'SELECT * FROM GmPhone WHERE individualId='
                    . $individualId, FALSE);
            $result = $query->result();
            foreach ($result as $k => $v) {
                $result[$k]->Date = 
                    $this->datetimeformatter->formateDateTime(
                            $v->Date, 'Y-m-d H:i');
            }
            return $result;
        }

}