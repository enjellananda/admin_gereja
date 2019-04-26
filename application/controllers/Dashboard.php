<?php
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct(); 
        $this->load->model('Admin_model');  
        $this->load->model('Jemaat_model');     
    }

    function get_userdata(){
        $userData = $this->session->userdata();
        return $userData;
    }

    function index()
    {
    	if(!$this->session->userdata('logged_in')){
            redirect('Admin/login');
        }

        $username = $this->session->userdata('username');
        $userData = $this->get_userdata();

        $data['user'] = $this->Admin_model->get_user_details($username);
        $data['get_jemaat'] = $this->Jemaat_model->get_all_jemaat_count();
        $data['get_kegiatan'] = $this->Admin_model->get_all_admin_count();

        $data['_view'] = 'dashboard';
        $this->load->view('layouts/main', $data);
    }

    
}
