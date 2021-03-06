<?php

class Jemaat extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Jemaat_model');

        if(!$this->session->userdata('logged_in')){
            redirect('Admin/login');
        }

        $id_admin = $this->session->userdata('username');
    } 

    /*
     * Listing of jemaat
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('jemaat/index?');
        $config['total_rows'] = $this->Jemaat_model->get_all_jemaat_count_confirm();
        $this->pagination->initialize($config);

        $data['jemaat'] = $this->Jemaat_model->get_all_jemaat($params);
        
        $data['_view'] = 'jemaat/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new jemaat
     */
   function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
                'nomor_induk' => $this->input->post('nomor_induk'),
                'nama_jemaat' => $this->input->post('nama_jemaat'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'nama_ayah' => $this->input->post('nama_ayah'),
                'nama_ibu' => $this->input->post('nama_ibu'),
                'gereja_baptis' => $this->input->post('gereja_baptis'),
                'tanggal_baptis' => $this->input->post('tanggal_baptis'),
                'gereja_sidi' => $this->input->post('gereja_sidi'),
                'tanggal_sidi' => $this->input->post('tanggal_sidi'),
                'status' => $this->input->post('status'),
                'nama_pasangan' => $this->input->post('nama_pasangan'),
                'gereja_pasangan' => $this->input->post('gereja_pasangan'),
                'nomor_induk_perkawinan' => $this->input->post('nomor_induk_perkawinan'),
                'tempat_catatan_sipil' => $this->input->post('tempat_catatan_sipil'),
                'tanggal_catatan_sipil' => $this->input->post('tanggal_catatan_sipil'),
                'gereja_pemberkatan' => $this->input->post('gereja_pemberkatan'),
                'tanggal_pemberkatan' => $this->input->post('tanggal_pemberkatan'),
                'tanggal_cerai' => $this->input->post('tanggal_cerai'),
                'alasan_cerai' => $this->input->post('alasan_cerai'),
                'pindah_gereja' => $this->input->post('pindah_gereja'),
                'tanggal_pindah_gereja' => $this->input->post('tanggal_pindah_gereja'),
                'nomor_surat_pindah' => $this->input->post('nomor_surat_pindah'),
                'tanggal_keluar' => $this->input->post('tanggal_keluar'),
                'keterangan' => $this->input->post('keterangan'),            
                'alamat' => $this->input->post('alamat'),
                'nomer_telfon' => $this->input->post('nomer_telfon'),
                'email' => $this->input->post('email'),
                'surat_keterangan' => $this->input->post('surat_keterangan'),
                'pengingat' => $this->input->post('pengingat'),
                'status_jemaat' => $this->input->post('status_jemaat'),
            );
            
            $jemaat_id = $this->Jemaat_model->add_jemaat($params);
            redirect('jemaat/index');
        }
        else
        {
            
            $data['_view'] = 'jemaat/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a jemaat
     */
     function edit($id_jemaat)
    {   
        // check if the jemaat exists before trying to edit it
        $data['jemaat'] = $this->Jemaat_model->get_jemaat($id_jemaat);
        
        if(isset($data['jemaat']['id_jemaat']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'nomor_induk' => $this->input->post('nomor_induk'),
                    'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                    'status' => $this->input->post('status'),
                    'status_jemaat' => $this->input->post('status_jemaat'),
                    'password' => $this->input->post('password'),
                    'tanggal_sidi' => $this->input->post('tanggal_sidi'),
                    'nama_pasangan' => $this->input->post('nama_pasangan'),
                    'gereja_pasangan' => $this->input->post('gereja_pasangan'),
                    'nomor_induk_perkawinan' => $this->input->post('nomor_induk_perkawinan'),
                    'tempat_catatan_sipil' => $this->input->post('tempat_catatan_sipil'),
                    'tanggal_catatan_sipil' => $this->input->post('tanggal_catatan_sipil'),
                    'gereja_pemberkatan' => $this->input->post('gereja_pemberkatan'),
                    'tanggal_pemberkatan' => $this->input->post('tanggal_pemberkatan'),
                    'tanggal_cerai' => $this->input->post('tanggal_cerai'),
                    'pindah_gereja' => $this->input->post('pindah_gereja'),
                    'tanggal_pindah_gereja' => $this->input->post('tanggal_pindah_gereja'),
                    'nomor_surat_pindah' => $this->input->post('nomor_surat_pindah'),
                    'tanggal_keluar' => $this->input->post('tanggal_keluar'),
                    'nama_jemaat' => $this->input->post('nama_jemaat'),
                    'username' => $this->input->post('username'),
                    'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                    'alamat' => $this->input->post('alamat'),
                    'nomer_telfon' => $this->input->post('nomer_telfon'),
                    'email' => $this->input->post('email'),
                    'surat_keterangan' => $this->input->post('surat_keterangan'),
                    'pengingat' => $this->input->post('pengingat'),
                    'tempat_lahir' => $this->input->post('tempat_lahir'),
                    'nama_ayah' => $this->input->post('nama_ayah'),
                    'nama_ibu' => $this->input->post('nama_ibu'),
                    'gereja_baptis' => $this->input->post('gereja_baptis'),
                    'gereja_sidi' => $this->input->post('gereja_sidi'),
                    'tanggal_baptis' => $this->input->post('tanggal_baptis'),
                    'alasan_cerai' => $this->input->post('alasan_cerai'),
                    'keterangan' => $this->input->post('keterangan'),
                );

                $this->Jemaat_model->update_jemaat($id_jemaat,$params);            
                redirect('jemaat/index');
            }
            else
            {
                $data['_view'] = 'jemaat/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The jemaat you are trying to edit does not exist.');
    } 


    /*
     * Deleting jemaat
     */
    function remove($id_jemaat)
    {
        $jemaat = $this->Jemaat_model->get_jemaat($id_jemaat);

        // check if the jemaat exists before trying to delete it
        if(isset($jemaat['id_jemaat']))
        {
            $this->Jemaat_model->delete_jemaat($id_jemaat);
            redirect('jemaat/index');
        }
        else
            show_error('The jemaat you are trying to delete does not exist.');
    }
    
}
