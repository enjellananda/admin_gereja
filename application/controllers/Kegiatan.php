<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class Kegiatan extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data kegiatan
    function index_get() {
        $id_kegiatan = $this->get('id_kegiatan');
        if ($id_kegiatan == '') {
            $kegiatan = $this->db->get('kegiatan')->result();
        } else {
            $this->db->where('id_kegiatan', $id_kegiatan);
            $kegiatan = $this->db->get('kegiatan')->result();
        }
        $this->response($kegiatan, 200);
    }
 
    // insert new data to kegiatan
    function index_post() {
        $data = array(
                    'id_kegiatan'           => $this->post('id_kegiatan'),
                    'id_admin'          	=> $this->post('id_admin'),
                    'nama_kegiatan'    		=> $this->post('nama_kegiatan'),
                    'waktu_kegiatan'        => $this->post('waktu_kegiatan'),
					'tempat_kegiatan'       => $this->post('tempat_kegiatan'),
                    'contact_person'        => $this->post('contact_person'),
                    'pamflet'   		    => $this->post('pamflet'),
                    'status'        		=> $this->post('status'));
        $insert = $this->db->insert('kegiatan', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data kegiatan
    function index_put() {
        $id_kegiatan = $this->put('id_kegiatan');
        $data = array(
                    'id_kegiatan'      	  => $this->put('id_kegiatan'),
                    'id_admin'      	  => $this->put('id_admin'),
                    'nama_kegiatan'		  => $this->put('nama_kegiatan'),
                    'waktu_kegiatan'  	  => $this->put('waktu_kegiatan'),
					'tempat_kegiatan'     => $this->put('tempat_kegiatan'),
                    'contact_person'      => $this->put('contact_person'),
                    'pamflet'    		  => $this->put('pamflet'),
                    'status'        	  => $this->put('status'));
        $this->db->where('id_kegiatan', $id_kegiatan);
        $update = $this->db->update('kegiatan', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete kegiatan
    function index_delete() {
        $id_kegiatan = $this->delete('id_kegiatan');
        $this->db->where('id_kegiatan', $id_kegiatan);
        $delete = $this->db->delete('kegiatan');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}