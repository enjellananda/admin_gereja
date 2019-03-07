<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Warta extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Warta_model');

        if(!$this->session->userdata('logged_in')){
            redirect('Admin/login');
        }

        $id_admin = $this->session->userdata('username');
    } 

    /*
     * Listing of warta
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('warta/index?');
        $config['total_rows'] = $this->Warta_model->get_all_warta_count();
        $this->pagination->initialize($config);

        $data['warta'] = $this->Warta_model->get_all_warta($params);
        
        $data['_view'] = 'warta/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new warta
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('wartajemaat','Wartajemaat','required');
		$this->form_validation->set_rules('tanggal_terbit','Tanggal Terbit','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_admin' => $this->input->post('id_admin'),
				'tanggal_terbit' => $this->input->post('tanggal_terbit'),
				'wartajemaat' => $this->input->post('wartajemaat'),
            );
            
            $warta_id = $this->Warta_model->add_warta($params);
            redirect('warta/index');
        }
        else
        {
			$this->load->model('Admin_model');
			$data['all_admin'] = $this->Admin_model->get_all_admin();
            
            $data['_view'] = 'warta/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a warta
     */
    function edit($id_warta)
    {   
        // check if the warta exists before trying to edit it
        $data['warta'] = $this->Warta_model->get_warta($id_warta);
        
        if(isset($data['warta']['id_warta']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('wartajemaat','Wartajemaat','required');
			$this->form_validation->set_rules('tanggal_terbit','Tanggal Terbit','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_admin' => $this->input->post('id_admin'),
					'tanggal_terbit' => $this->input->post('tanggal_terbit'),
					'wartajemaat' => $this->input->post('wartajemaat'),
                );

                $this->Warta_model->update_warta($id_warta,$params);            
                redirect('warta/index');
            }
            else
            {
				$this->load->model('Admin_model');
				$data['all_admin'] = $this->Admin_model->get_all_admin();

                $data['_view'] = 'warta/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The warta you are trying to edit does not exist.');
    } 

    /*
     * Deleting warta
     */
    function remove($id_warta)
    {
        $warta = $this->Warta_model->get_warta($id_warta);

        // check if the warta exists before trying to delete it
        if(isset($warta['id_warta']))
        {
            $this->Warta_model->delete_warta($id_warta);
            redirect('warta/index');
        }
        else
            show_error('The warta you are trying to delete does not exist.');
    }
    
}
