<?php
 
class Kotbah extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kotbah_model');
    } 

    /*
     * Listing of kotbah
     */
    function index()
    {
        $data['kotbah'] = $this->Kotbah_model->get_all_kotbah();
        
        $data['_view'] = 'kotbah/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new kotbah
     */
    function add()
    {   
        $this->load->library('form_validation');

        $this->form_validation->set_rules('tema','Tema','required');
        $this->form_validation->set_rules('judul','Judul','required');
        $this->form_validation->set_rules('tanggal_kotbah','Tanggal Kotbah','required');
        
        if($this->form_validation->run())     
        {   
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 2048;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('kotbah_mingguan')) {
                $error = $this->upload->display_errors();
                echo $error;
            } else {
                $image = $this->upload->data();
                $uploadDir = './upload/';
                $uploadFile = $uploadDir . basename($image['file_name']);
            $params = array(
                'tema' => $this->input->post('tema'),
                'judul' => $this->input->post('judul'),
                'tanggal_kotbah' => $this->input->post('tanggal_kotbah'),
                'kotbah_mingguan' => basename($image['file_name'])
            );
            
            $kotbah_id = $this->Kotbah_model->add_kotbah($params);
            $this->load->view('kotbah/edit',$params);  
            redirect('kotbah/index');
        }
    }
        else
        {
            $data['_view'] = 'kotbah/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a kotbah
     */
    function edit($id_kotbah)
    {   
        // check if the kotbah exists before trying to edit it
        $data['kotbah'] = $this->Kotbah_model->get_kotbah($id_kotbah);
        
        if(isset($data['kotbah']['id_kotbah']))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('tema','Tema','required');
            $this->form_validation->set_rules('judul','Judul','required');
            $this->form_validation->set_rules('tanggal_kotbah','Tanggal Kotbah','required');
            
            if($this->form_validation->run())     
            {   
                $config['upload_path'] = './upload/';
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = 2048;

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('kotbah_mingguan')) {
                    $error = $this->upload->display_errors();
                    echo $error;
                } else {
                    $image = $this->upload->data();
                    $uploadDir = './upload/';
                    $uploadFile = $uploadDir . basename($image['file_name']);

                $params = array(
                    'tema' => $this->input->post('tema'),
                    'judul' => $this->input->post('judul'),
                    'tanggal_kotbah' => $this->input->post('tanggal_kotbah'),
                    'kotbah_mingguan' => basename($image['file_name'])
                );

                $this->Kotbah_model->update_kotbah($id_kotbah,$params);            
                redirect('kotbah/index');
            }
        }
            else
            {
                $data['_view'] = 'kotbah/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The kotbah you are trying to edit does not exist.');
    } 

    /*
     * Deleting kotbah
     */
    function remove($id_kotbah)
    {
        $kotbah = $this->Kotbah_model->get_kotbah($id_kotbah);

        // check if the kotbah exists before trying to delete it
        if(isset($kotbah['id_kotbah']))
        {
            $this->Kotbah_model->delete_kotbah($id_kotbah);
            redirect('kotbah/index');
        }
        else
            show_error('The kotbah you are trying to delete does not exist.');
    }
    
}