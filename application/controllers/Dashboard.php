<?php
class Dashboard extends CI_Controller{
    function __construct()
    {
        parent::__construct(); 
        $this->load->model('Admin_model');  
        $this->load->model('Jemaat_model');
        $this->load->model('Warta_model');
        $this->load->model('Kegiatan_model');     
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
        $data['get_jemaat'] = $this->Jemaat_model->get_all_jemaat_count_waiting();
        $data['get_jemaat_confirm'] = $this->Jemaat_model->get_all_jemaat_count_confirm();
        $data['get_kegiatan'] = $this->Kegiatan_model->get_all_kegiatan_count_waiting();
        $data['get_kegiatan_confirm'] = $this->Kegiatan_model->get_all_kegiatan_count_confirm();
        $data['get_warta'] = $this->Warta_model->get_all_warta_count();

        $data['_view'] = 'dashboard';
        $this->load->view('layouts/main', $data);
    }

    
}
