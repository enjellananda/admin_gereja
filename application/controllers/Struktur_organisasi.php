<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class Struktur_organisasi extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data struktur_organisasi
    function index_get() {
        $id_struktur = $this->get('id_struktur');
        if ($id_struktur == '') {
            $struktur_organisasi = $this->db->get('struktur_organisasi')->result();
        } else {
            $this->db->where('id_struktur', $id_struktur);
            $struktur_organisasi = $this->db->get('struktur_organisasi')->result();
        }
        $this->response($struktur_organisasi, 200);
    }
 
    // insert new data to struktur_organisasi
    function index_post() {
        $data = array(
                    'id_struktur'           => $this->post('id_struktur'),
                    'nama_jemaat'           => $this->post('nama_jemaat'),
                    'jabatan'    			=> $this->post('jabatan'),
                    'periode'      		    => $this->post('periode'));
        $insert = $this->db->insert('struktur_organisasi', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data struktur_organisasi
    function index_put() {
        $id_struktur = $this->put('id_struktur');
        $data = array(
                    'id_struktur'      	 => $this->put('id_struktur'),
                    'nama_jemaat'      	 => $this->put('nama_jemaat'),
                    'jabatan'			 => $this->put('jabatan'),
                    'periode'  		     => $this->put('periode'));
        $this->db->where('id_struktur', $id_struktur);
        $update = $this->db->update('struktur_organisasi', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete struktur_organisasi
    function index_delete() {
        $id_struktur = $this->delete('id_struktur');
        $this->db->where('id_struktur', $id_struktur);
        $delete = $this->db->delete('struktur_organisasi');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}