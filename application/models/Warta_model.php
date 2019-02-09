<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Warta_model extends CI_Model
{
    private $_table = "warta";

    public $id_warta;
    public $tanggal_terbit;
    public $wartajemaat;

    public function rules()
    {
        return [
            ['field' => 'tanggal_terbit',
            'label' => 'Tanggal Terbit',
            'rules' => 'date'],

            ['field' => 'wartajemaat',
            'label' => 'Warta Jemaat',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_warta)
    {
        return $this->db->get_where($this->_table, ["id_warta" => $id_warta])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_warta = uniqid();
        $this->tanggal_terbit = $post["tanggal_terbit"];
        $this->wartajemaat= $post["wartajemaat"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_warta = $post["id_warta"];
        $this->tanggal_terbit = $post["tanggal_terbit"];
        $this->wartajemaat = $post["wartajemaat"];
        $this->db->update($this->_table, $this, array('id_warta' => $post['id_warta']));
    }

    public function delete($id_warta)
    {
          return $this->db->delete($this->_table, array("id_warta" => $id_warta));
    }
}

