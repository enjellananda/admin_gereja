<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jemaat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Jemaat_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["jemaat"] = $this->Jemaat_model->getAll();
        $this->load->view("admin/jemaat/listjemaat", $data);
    }

    public function add()
    {
        $jemaat = $this->Jemaat_model;
        $validation = $this->form_validation;
        $validation->set_rules($jemaat->rules());

        if ($validation->run()) {
            $jemaat->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/jemaat/new_formjemaat");
    }

    public function edit($id_jemaat = null)
    {
        if (!isset($id_jemaat)) redirect('admin/jemaat');
       
        $jemaat  = $this->Jemaat_model;
        $validation = $this->form_validation;
        $validation->set_rules($jemaat->rules());

        if ($validation->run()) {
            $jemaat->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["jemaat"] = $jemaat->getById($id_jemaat);
        if (!$data["jemaat"]) show_404();
        
        $this->load->view("admin/jemaat/edit_formjemaat", $data);
    }

    public function delete($id_jemaat=null)
    {
        if (!isset($id_jemaat)) show_404();
        
        if ($this->jemaat->delete($id_jemaat)) {
            redirect(site_url('admin/jemaat'));
        }
    }
}