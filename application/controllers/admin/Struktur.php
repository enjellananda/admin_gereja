<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Struktur_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["struktur_organisasi"] = $this->Struktur_model->getAll();
        $this->load->view("admin/struktur/liststruktur", $data);
    }

    public function add()
    {
        $struktur = $this->Struktur_model;
        $validation = $this->form_validation;
        $validation->set_rules($struktur->rules());

        if ($validation->run()) {
            $struktur->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/struktur/new_formstruktur");
    }

    public function edit($id_struktur = null)
    {
        if (!isset($id_struktur)) redirect('admin/struktur');
       
        $struktur  = $this->Struktur_model;
        $validation = $this->form_validation;
        $validation->set_rules($struktur->rules());

        if ($validation->run()) {
            $struktur->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["struktur_organisasi"] = $struktur->getById($id_struktur);
        if (!$data["struktur_organisasi"]) show_404();
        
        $this->load->view("admin/struktur/edit_formstruktur", $data);
    }

    public function delete($id_struktur=null)
    {
        if (!isset($id_struktur)) show_404();
        
        if ($this->Struktur_model->delete($id_struktur)) {
            redirect(site_url('admin/struktur'));
        }
    }
}