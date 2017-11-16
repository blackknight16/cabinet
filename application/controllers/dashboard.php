<?php
class dashboard extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->helper('url');
            
            $this->load->model('Individual');
        }
        
	public function view()
	{            
            $data['model']['Id'] = $_SESSION['individualId']; 
            
             $this->load->view('templates/header', $data);
             $this->load->view('dashboard/dashboard', $data);
             $this->load->view('templates/footer', $data);             
	}
        
        public function tasklist() {
            $this->load->model('Task');
            $data['model'] = $this->Task->get_tasks($_SESSION['individualId']);
            $this->load->view('dashboard/task-list',$data);
        }
        
        public function actions() {
            $this->load->model('Action');
            $data['model'] = $this->Action->get_actions($_SESSION['individualId']);
            $this->load->view('dashboard/action',$data);
        }
        public function generalhistory() {
            $this->load->model('GeneralHistory');
            $data['model'] = $this->GeneralHistory->get_generalHistories($_SESSION['individualId']);
            $this->load->view('dashboard/generalHistory',$data);
        }
        public function gmphone() {
            $this->load->model('GmPhone');
            $data['model']['journal'] = $this->GmPhone->get_gmPhones($_SESSION['individualId']);
            
            $this->load->model('Contact');
            $data['model']['contacts'] = $this->Contact->get_contacts($_SESSION['individualId']);
            
            $this->load->view('dashboard/gmPhone',$data);
        }
        public function individual() {
            $data['model'] = $this->Individual->get_individual($_SESSION['individualId']);
            
            $this->load->model('Appearance');
            $appearance = $this->Appearance->get_data($_SESSION['individualId']);
            $data['model']['themeName'] = $appearance['ThemeName'];
            
            $this->load->view('dashboard/individual',$data);
        }
    public function saverpersonal() {
        $this->load->helper('form');
        $this->load->library('form_validation');

    //$data['title'] = 'Create a news item';

        $this->form_validation->set_rules('fio', 'fio', 'required');
        $this->form_validation->set_rules('post', 'post', 'required');
        $this->form_validation->set_rules('company', 'company', 'required');
        $this->form_validation->set_rules('birthday', '', 'required');

        $data['model']['Id'] = $_SESSION['individualId'];
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('dashboard/dashboard');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->load->model('Individual');
            $id = $this->input->post('individualId');
            $this->Individual->set_data($id);
            $this->load->view('templates/header', $data);
            $this->load->view('dashboard/dashboard', $data);
            $this->load->view('templates/footer', $data);
        }
    }
    
    public function changeappearance(){
            $this->load->helper('form');
            $this->load->model('Appearance');
            
            $this->Appearance->set_data($_SESSION['individualId']);
    }
}