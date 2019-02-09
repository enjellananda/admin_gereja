<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class jemaat extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data jemaat
    function index_get() {
        $id_jemaat = $this->get('id_jemaat');
        if ($id_jemaat == '') {
            $jemaat = $this->db->get('jemaat')->result();
        } else {
            $this->db->where('id_jemaat', $id_jemaat);
            $jemaat = $this->db->get('jemaat')->result();
        }
        $this->response($jemaat, 200);
    }
 
    // insert new data to jemaat
    function index_post() {
        $data = array(
                    'id_jemaat'           => $this->post('id_jemaat'),
                    'id_admin'        	  => $this->post('id_admin'),
                    'nama_jemaat'   	  => $this->post('nama_jemaat'),
                    'username'      	  => $this->post('username'),
					'password'            => $this->post('password'),
                    'tanggal_lahir'       => $this->post('tanggal_lahir'),
                    'alamat'   			  => $this->post('alamat'),
                    'gereja_asal'         => $this->post('gereja_asal'),
					'jenis_kelamin'   	  => $this->post('jenis_kelamin'),
                    'umur'       		  => $this->post('umur'),
					'pekerjaan'           => $this->post('pekerjaan'),
                    'nomer_telfon'        => $this->post('nomer_telfon'),
                    'email'  			  => $this->post('email'),
					'status'              => $this->post('status'),
                    'ktp_sim'             => $this->post('ktp_sim'),
                    'kk'  				  => $this->post('kk'),
                    'status_jemaat'  	  => $this->post('status_jemaat'));
        $insert = $this->db->insert('jemaat', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data jemaat
    function index_put() {
        $id_jemaat = $this->put('id_jemaat');
        $data = array(
                    'id_jemaat'     	  => $this->put('id_jemaat'),
                    'id_admin'      	  => $this->put('id_admin'),
                    'nama_jemaat'		  => $this->put('nama_jemaat'),
                    'username'    		  => $this->put('username'),
					'password'            => $this->put('password'),
                    'tanggal_lahir'       => $this->put('tanggal_lahir'),
                    'alamat'    		  => $this->put('alamat'),
                    'gereja_asal'         => $this->put('gereja_asal'),
					'jenis_kelamin'   	  => $this->put('jenis_kelamin'),
                    'umur'       		  => $this->put('umur'),
					'pekerjaan'           => $this->put('pekerjaan'),
                    'nomer_telfon'        => $this->put('nomer_telfon'),
                    'email'   			  => $this->put('email'),
					'status'           	  => $this->put('status'),
                    'ktp_sim'             => $this->put('ktp_sim'),
                    'kk'    			  => $this->put('kk'),
					'status_jemaat'       => $this->put('status_jemaat'));
        $this->db->where('id_jemaat', $id_jemaat);
        $update = $this->db->update('jemaat', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete jemaat
    function index_delete() {
        $id_jemaat = $this->delete('id_jemaat');
        $this->db->where('id_jemaat', $id_jemaat);
        $delete = $this->db->delete('jemaat');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}