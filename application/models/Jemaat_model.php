<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jemaat_model extends CI_Model
{
    private $_table = "jemaat";

    public $id_jemaat;
    public $id_admin;
    public $nama_jemaat;
    public $username;
    public $password;
    public $tanggal_lahir;
    public $alamat;
    public $gereja_asal;
    public $jenis_kelamin;
    public $umur;
    public $pekerjaan;
    public $nomer_telfon;
    public $email; public $status; public $ktp_sim; public $kk; public $status_jemaat;

    public function rules()
    {
        return [
            ['field' => 'id_admin',
            'label' => 'ID admin',
            'rules' => 'required'],

            ['field' => 'nama_jemaat',
            'label' => 'Nama Jemaat',
            'rules' => 'required'],

            ['field' => 'username',
            'label' => 'Username',
            'rules' => 'required'],
            
            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],

            ['field' => 'tanggal_lahir',
            'label' => 'Tanggal Lahir',
            'rules' => 'date'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],
            
            ['field' => 'gereja_asal',
            'label' => 'Gereja Asal',
            'rules' => 'required'],

            ['field' => 'jenis_kelamin',
            'label' => 'Jenis Kelamin',
            'rules' => 'enum'],

            ['field' => 'umur',
            'label' => 'Umur',
            'rules' => 'required'],

            ['field' => 'pekerjaan',
            'label' => 'Pekerjaan',
            'rules' => 'required'],

            ['field' => 'nomer_telfon',
            'label' => 'Nomor Telfon',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'Status',
            'rules' => 'enum'],

            ['field' => 'ktp_sim',
            'label' => 'KTP/SIM',
            'rules' => 'required'],

            ['field' => 'kk',
            'label' => 'Kartu Keluarga',
            'rules' => 'required'],

            ['field' => 'status_jemaat',
            'label' => 'Status Jemaat',
            'rules' => 'enum'],

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id_jemaat)
    {
        return $this->db->get_where($this->_table, ["id_jemaat" => $id_jemaat])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_jemaat = uniqid();
        $this->id_admin = $post["id_admin"];
        $this->nama_jemaat = $post["nama_jemaat"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->alamat = $post["alamat"];
        $this->gereja_asal = $post["gereja_asal"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->umur = $post["umur"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->nomer_telfon = $post["nomer_telfon"];
        $this->email = $post["email"];
        $this->status = $post["status"];
        $this->ktp_sim = $post["ktp_sim"];
        $this->kk = $post["kk"];
        $this->status_jemaat = $post["status_jemaat"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_jemaat = uniqid();
        $this->id_admin = $post["id_admin"];
        $this->nama_jemaat = $post["nama_jemaat"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->alamat = $post["alamat"];
        $this->gereja_asal = $post["gereja_asal"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->umur = $post["umur"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->nomer_telfon = $post["nomer_telfon"];
        $this->email = $post["email"];
        $this->status = $post["status"];
        $this->ktp_sim = $post["ktp_sim"];
        $this->kk = $post["kk"];
        $this->status_jemaat = $post["status_jemaat"];
        $this->db->update($this->_table, $this, array('id_jemaat' => $post['id_jemaat']));
    }

    public function delete($id_jemaat)
    {
        return $this->db->delete($this->_table, array("id_jemaat" => $id_jemaat));
    }
}

