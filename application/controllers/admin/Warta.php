<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Warta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Warta_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["warta"] = $this->Warta_model->getAll();
        $this->load->view("admin/warta/listwarta", $data);
    }

    public function add()
    {
        $warta = $this->Warta_model;
        $validation = $this->form_validation;
        $validation->set_rules($warta->rules());

        if ($validation->run()) {
            $warta->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/warta/new_formwarta");
    }

    public function edit($id_warta = null)
    {
        if (!isset($id_warta)) redirect('admin/warta');
       
        $warta  = $this->Warta_model;
        $validation = $this->form_validation;
        $validation->set_rules($warta->rules());

        if ($validation->run()) {
            $warta->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["warta"] = $warta->getById($id_warta);
        if (!$data["warta"]) show_404();
        
        $this->load->view("admin/warta/edit_formwarta", $data);
    }

    public function delete($id_warta=null)
    {
        if (!isset($id_warta)) show_404();
        
        if ($this->Warta_model->delete($id_warta)) {
            redirect(site_url('admin/warta'));
        }
    }
}