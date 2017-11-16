<?php
class authorize extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->helper('url');
        }
        
	public function view()
	{
            $data['title'] = 'Авторизация';
            $data['model']['login'] = '';
            $data['model']['password'] = '';
            
            $this->load->view('templates/header', $data);
            $this->load->view('authorize/checkup', $data);
            $this->load->view('templates/footer', $data);
             
	}
        
    public function check_user() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('login', 'login', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        $data['title'] = 'Авторизация';
        if ($this->form_validation->run() === FALSE)
        {
            $data['model']['login'] = $this->input->post('login');
            $data['model']['password'] = $this->input->post('password');
            
            $this->load->view('templates/header', $data);
            $this->load->view('authorize/checkup');
            $this->load->view('templates/footer');
            return;
        }
        
        $this->load->model('User');
        $login = $this->input->post('login');
        $password = $this->input->post('password');
        $user = $this->User->get_user($login, $password);
        if (count($user) == 0){                
                $data['errMes'] = 'login or password is incorrect';
                $data['model']['login'] = $login;
                $data['model']['password'] = $password;
                $this->load->view('templates/header', $data);
                $this->load->view('authorize/checkup');
                $this->load->view('templates/footer');
                return;
        }
        $_SESSION['individualId'] = $user['Id'];
        redirect('/dashboard/view');
    }
}