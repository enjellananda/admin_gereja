<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur_model extends CI_Model
{
    private $_table = "struktur_organisasi";

    public $id_struktur;
    public $nama_jemaat;
    public $jabatan;
    public $periode;

    public function rules()
    {
        return [
            ['field' => 'nama_jemaat',
            'label' => 'Nama Jemaat',
            'rules' => 'required'],

            ['field' => 'jabatan',
            'label' => 'Jabatan',
            'rules' => 'enum'],
            
            ['field' => 'periode',
            'label' => 'Periode',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_struktur)
    {
        return $this->db->get_where($this->_table, ["id_struktur" => $id_struktur])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_struktur = uniqid();
        $this->nama_jemaat = $post["nama_jemaat"];
        $this->jabatan = $post["jabatan"];
        $this->periode = $post["periode"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_struktur = $post["id_struktur"];
        $this->nama_jemaat = $post["nama_jemaat"];
        $this->jabatan = $post["jabatan"];
        $this->periode = $post["periode"];
        $this->db->update($this->_table, $this, array('id_struktur' => $post['id_struktur']));
    }

    public function delete($id_struktur)
    {
        return $this->db->delete($this->_table, array("id_struktur" => $id_struktur));
    }
}

