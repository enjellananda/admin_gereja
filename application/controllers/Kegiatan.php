<?php

class Kegiatan extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kegiatan_model');

        if(!$this->session->userdata('logged_in')){
            redirect('Admin/login');
        }

        $id_admin = $this->session->userdata('username');
    } 

    /*
     * Listing of kegiatan
     */
    function index()
    {
        $data['kegiatan'] = $this->Kegiatan_model->get_all_kegiatan();
        
        $data['_view'] = 'kegiatan/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new kegiatan
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('status','Status','required');
		$this->form_validation->set_rules('nama_kegiatan','Nama Kegiatan','required|max_length[255]');
		$this->form_validation->set_rules('jam_kegiatan','Jam Kegiatan','required');
		$this->form_validation->set_rules('tempat_kegiatan','Tempat Kegiatan','required|max_length[255]');
		$this->form_validation->set_rules('contact_person','Contact Person','required|max_length[255]');
        $this->form_validation->set_rules('dipimpin','Dipimpin oleh','required');
		// $this->form_validation->set_rules('pamflet','Pamflet','required|max_length[255]');

		if($this->form_validation->run())     
        {
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 2048;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('pamflet')) {
                $error = $this->upload->display_errors();
                echo $error;
            } else {
                $image = $this->upload->data();
                $uploadDir = './upload/';
                $uploadFile = $uploadDir . basename($image['file_name']);

                $params = array(
    				'nama_kegiatan' => $this->input->post('nama_kegiatan'),
    				'tempat_kegiatan' => $this->input->post('tempat_kegiatan'),
    				'contact_person' => $this->input->post('contact_person'),
    				'pamflet' => basename($uploadFile),
                    'status' => $this->input->post('status'),
                    'tanggal_kegiatan' => $this->input->post('tanggal_kegiatan'),
                    'jam_kegiatan' => $this->input->post('jam_kegiatan'),
                    'dipimpin' => $this->input->post('dipimpin')
                );
            
                $kegiatan_id = $this->Kegiatan_model->add_kegiatan($params);
                redirect('kegiatan/index');
            }
        }
        else
        {
            $data['_view'] = 'kegiatan/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a kegiatan
     */
    function edit($id_kegiatan)
    {   
        // check if the kegiatan exists before trying to edit it
        $data['kegiatan'] = $this->Kegiatan_model->get_kegiatan($id_kegiatan);
        
        if(isset($data['kegiatan']['id_kegiatan']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('status','Status','required');
			$this->form_validation->set_rules('nama_kegiatan','Nama Kegiatan','required|max_length[255]');
			$this->form_validation->set_rules('jam_kegiatan','Jam Kegiatan','required');
			$this->form_validation->set_rules('tempat_kegiatan','Tempat Kegiatan','required|max_length[255]');
			$this->form_validation->set_rules('contact_person','Contact Person','required|max_length[255]');
			//$this->form_validation->set_rules('pamflet','Pamflet','required');
            $this->form_validation->set_rules('dipimpin','Dipimpin oleh','required');
		
			if($this->form_validation->run())     
            {
                $config['upload_path'] = './upload/';
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = 2048;

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('pamflet')) {
                    $error = $this->upload->display_errors();
                    echo $error;
                } else {
                    $image = $this->upload->data();
                    $uploadDir = './upload/';
                    $uploadFile = $uploadDir . basename($image['file_name']);   
                    $params = array(
                        'nama_kegiatan' => $this->input->post('nama_kegiatan'),
                        'tempat_kegiatan' => $this->input->post('tempat_kegiatan'),
                        'contact_person' => $this->input->post('contact_person'),
                        'pamflet' => basename($uploadFile),
                        'status' => $this->input->post('status'),
                        'tanggal_kegiatan' => $this->input->post('tanggal_kegiatan'),
                        'jam_kegiatan' => $this->input->post('jam_kegiatan'),
                        'dipimpin' => $this->input->post('dipimpin')
                    );

                    $this->Kegiatan_model->update_kegiatan($id_kegiatan,$params);            
                    redirect('kegiatan/index');
                }
            }
            else
            {
			    $data['_view'] = 'kegiatan/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The kegiatan you are trying to edit does not exist.');
    } 

    /*
     * Deleting kegiatan
     */
    function remove($id_kegiatan)
    {
        $kegiatan = $this->Kegiatan_model->get_kegiatan($id_kegiatan);

        // check if the kegiatan exists before trying to delete it
        if(isset($kegiatan['id_kegiatan']))
        {
            $this->Kegiatan_model->delete_kegiatan($id_kegiatan);
            redirect('kegiatan/index');
        }
        else
            show_error('The kegiatan you are trying to delete does not exist.');
    }
    
}
