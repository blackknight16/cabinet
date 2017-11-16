<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DateTimeFormatter {
    private $format = 'Y-m-d';
    private $formatTime = 'H:i';
	
    public function __construct(){
    }
    
    public function formateDate($date)
    {
        if (!$date) return "";
        if (gettype($date) == "string"){
            return date_format(new DateTime($date), $this->format);
        }
	
        return $date->format($this->format);
    }
    
    public function formateDateTime($date, $format)
    {
        if (!$date) return "";
        if (gettype($date) == "string"){
            return date_format(new DateTime($date), $format);
        }
	
        return $date->format($format);
    }
    
    public function formateTime($datetime)
    {
        if (!$datetime) return "";
        if (gettype($datetime) == "string"){
            return date_format(new DateTime($datetime), $this->formatTime);
        }
	
        return $datetime->format($this->formatTime);
    }
}
