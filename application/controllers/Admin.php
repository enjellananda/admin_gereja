<?php
class Admin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        $this->load->library('form_validation');
    } 
    /*
     * Listing of admin
     */

    function get_userdata(){
        $userData = $this->session->userdata();
        return $userData;
    }

    function index()
    {
        if(!$this->session->userdata('logged_in')){
            redirect('Admin/login');
        }

        $id_admin = $this->session->userdata('username');
        $userData = $this->get_userdata();

        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
            
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('admin/index?');
        $config['total_rows'] = $this->Admin_model->get_all_admin_count();
        $this->pagination->initialize($config);

        $data['admin'] = $this->Admin_model->get_all_admin($params);
            
        $data['_view'] = 'admin/index';
            $this->load->view('layouts/main',$data);
        
        
    }

    /*
     * Adding a new admin
     */
    function add()
    {   
        if(!$this->session->userdata('logged_in')){
            redirect('Admin/login');
        }

        $id_admin = $this->session->userdata('username');
        $userData = $this->get_userdata();
        
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'password' => $this->input->post('password'),
				'username' => $this->input->post('username'),
            );
            
            $admin_id = $this->Admin_model->add_admin($params);
            redirect('admin/index');
        }
        else
        {            
            $data['_view'] = 'admin/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a admin
     */
    function edit($id_admin)
    {   
        // check if the admin exists before trying to edit it
        $data['admin'] = $this->Admin_model->get_admin($id_admin);
        
        if(isset($data['admin']['id_admin']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'password' => $this->input->post('password'),
					'username' => $this->input->post('username'),
                );

                $this->Admin_model->update_admin($id_admin,$params);            
                redirect('admin/index');
            }
            else
            {
                $data['_view'] = 'admin/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The admin you are trying to edit does not exist.');
    } 

    /*
     * Deleting admin
     */
    function remove($id_admin)
    {
        $admin = $this->Admin_model->get_admin($id_admin);

        // check if the admin exists before trying to delete it
        if(isset($admin['id_admin']))
        {
            $this->Admin_model->delete_admin($id_admin);
            redirect('admin/index');
        }
        else
            show_error('The admin you are trying to delete does not exist.');
    }

    function login(){
        $this->load->view('login/login');
    }


    function cek_login(){
        //Untuk validasi username dan password
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]',
                array(
                    'required' => "Username tidak boleh kosong"
                ));
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]',
                array(
                    'required' => "Password tidak boleh kosong"
                ));

        if($this->form_validation->run() === FALSE){
            $this->load->view('login/login');
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            
            $id_admin = $this->Admin_model->login_user($username, $password);

            if($id_admin){
                // Buat session
                $user_data = array(
                    'id_admin' => $id_admin,
                    'username' => $username,
                    'logged_in' => true
                );
                $this->session->set_userdata($user_data);
                // Set message
                $this->session->set_flashdata('user_loggedin', 'Anda sudah login');
                redirect('dashboard');
            } else {
                // Set message
                $this->session->set_flashdata('login_failed', 'Login invalid');
                redirect('Admin/login');
            }       
        }
    }


    function logout(){
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('id_admin');
        $this->session->unset_userdata('username');
        // Set message
        $this->session->set_flashdata('user_loggedout', 'Anda sudah log out');

        redirect('Admin/login','refresh');
        
    }
    
}
