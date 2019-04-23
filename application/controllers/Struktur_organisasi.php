<?php
 
class Struktur_organisasi extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Struktur_organisasi_model');

        if(!$this->session->userdata('logged_in')){
            redirect('Admin/login');
        }

        $id_admin = $this->session->userdata('username');
    } 

    /*
     * Listing of struktur_organisasi
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('struktur_organisasi/index?');
        $config['total_rows'] = $this->Struktur_organisasi_model->get_all_struktur_organisasi_count();
        $this->pagination->initialize($config);

        $data['struktur_organisasi'] = $this->Struktur_organisasi_model->get_all_struktur_organisasi($params);
        
        $data['_view'] = 'struktur_organisasi/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new struktur_organisasi
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('jabatan','Jabatan','required');
		$this->form_validation->set_rules('periode','Periode','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_jemaat' => $this->input->post('id_jemaat'),
				'jabatan' => $this->input->post('jabatan'),
				'periode' => $this->input->post('periode'),
            );
            
            $struktur_organisasi_id = $this->Struktur_organisasi_model->add_struktur_organisasi($params);
            redirect('struktur_organisasi/index');
        }
        else
        {
			$this->load->model('Jemaat_model');
			$data['all_jemaat'] = $this->Jemaat_model->get_all_jemaat();
            
            $data['_view'] = 'struktur_organisasi/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a struktur_organisasi
     */
    function edit($id_struktur)
    {   
        // check if the struktur_organisasi exists before trying to edit it
        $data['struktur_organisasi'] = $this->Struktur_organisasi_model->get_struktur_organisasi($id_struktur);
        
        if(isset($data['struktur_organisasi']['id_struktur']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('jabatan','Jabatan','required');
			$this->form_validation->set_rules('periode','Periode','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_jemaat' => $this->input->post('id_jemaat'),
					'jabatan' => $this->input->post('jabatan'),
					'periode' => $this->input->post('periode'),
                );

                $this->Struktur_organisasi_model->update_struktur_organisasi($id_struktur,$params);            
                redirect('struktur_organisasi/index');
            }
            else
            {
				$this->load->model('Jemaat_model');
				$data['all_jemaat'] = $this->Jemaat_model->get_all_jemaat();

                $data['_view'] = 'struktur_organisasi/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The struktur_organisasi you are trying to edit does not exist.');
    } 

    /*
     * Deleting struktur_organisasi
      */
    function remove($id_struktur)
    {
        $struktur_organisasi = $this->Struktur_organisasi_model->get_struktur_organisasi($id_struktur);

        // check if the struktur_organisasi exists before trying to delete it
        if(isset($struktur_organisasi['id_struktur']))
        {
            $this->Struktur_organisasi_model->delete_struktur_organisasi($id_struktur);
            redirect('struktur_organisasi/index');
        }
        else
            show_error('The struktur_organisasi you are trying to delete does not exist.');
    }
    
}
