<?php

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

		// $this->form_validation->set_rules('wartajemaat','Wartajemaat','required');
		$this->form_validation->set_rules('tanggal_terbit','Tanggal Terbit','required');
		
		if($this->form_validation->run())     
        {   
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 2048;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('wartajemaat')) {
                $error = $this->upload->display_errors();
                echo $error;
            } else {
                $image = $this->upload->data();
                $uploadDir = './upload/';
                $uploadFile = $uploadDir . basename($image['file_name']);

            $params = array(
				'tanggal_terbit' => $this->input->post('tanggal_terbit'),
				'wartajemaat' => basename($image['file_name'])
            );
            
            $warta_id = $this->Warta_model->add_warta($params);
            redirect('warta/index');
        }
    }
        else
        {
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

			// $this->form_validation->set_rules('wartajemaat','Wartajemaat','required');
			$this->form_validation->set_rules('tanggal_terbit','Tanggal Terbit','required');
		
			if($this->form_validation->run())     
            {   
                $config['upload_path'] = './upload/';
                $config['allowed_types'] = 'pdf';
                $config['max_size'] = 2048;

                $this->load->library('upload', $config);

                if(!$this->upload->do_upload('wartajemaat')) {
                    $error = $this->upload->display_errors();
                    echo $error;
                } else {
                    $image = $this->upload->data();
                    $uploadDir = './upload/';
                    $uploadFile = $uploadDir . basename($image['file_name']);

                 $params = array(
                'tanggal_terbit' => $this->input->post('tanggal_terbit'),
                'wartajemaat' => basename($image['file_name'])
            );

                $this->Warta_model->update_warta($id_warta,$params);  
                $this->load->view('warta/edit',$params);            
                redirect('warta/index');
            }
        }
            else
            {
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

    function viewMinutesFile(){
        $this->load->helper('download');
        $data['warta'] = $this->Warta_model->get_all_warta();
        
        if($this->uri->segment(3)) {
            $data   = file_get_contents('./upload/'.$this->uri->segment(3));
        }

        $name   = $this->uri->segment(3);
        force_download($name, $data);


        if(isset($_GET['id_warta'])){
            $id = $_GET['id_warta'];

            $file = $this->Warta_model->get_file($id_warta);

            $fp= fopen($file->path, "r");

            header("Cache-Control: maxage=1");
            header("Pragma: public");
            header("Content-type: application/pdf");
            header("Content-Disposition: inline; filename=".$file->filename."");
            header("Content-Description: PHP Generated Data");
            header("Content-Transfer-Encoding: binary");
            header('Content-Length:' .filesize($file->path));
            ob_clean();
            flush();
            while (!feof($fp)){
                $buff = fread($fp,1024);
                print $buff;
            }
            exit;

        }

    //      $file = $this->Warta_model->get_file($id_warta);

    //         $fp= fopen($file->path, "r");

    //         header("Cache-Control: maxage=1");
    //         header("Pragma: public");
    //         header("Accept-Ranges: bytes");
    //         header('Expires: 0');
    //         header("Content-type: application/pdf");
    //         header("Content-Disposition: inline; filename=".$file->filename."");
    //         header("Content-Description: PHP Generated Data");
    //         header("Content-Transfer-Encoding: binary");
    //         header('Content-Length:' .filesize($file->path));
    //         ob_clean();
    //         flush();
    //         while (!feof($fp)){
    //             $buff = fread($fp,5000);
    //             print $buff;
    //         }
    //         exit;

    // }
    
}
}