<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class Warta extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data warta
   function index_get() {
        $id_warta = $this->get('id_warta');
        if ($id_warta == '') {
            $warta = $this->db->get('warta')->result();
        } else {
            $this->db->where('id_warta', $id_warta);
            $warta = $this->db->get('warta')->result();
        }
        $this->response($warta, 200);
    }
 
    // insert new data to warta
    function index_post() {
        $data = array(
                    'id_warta'          	  => $this->post('id_warta'),
                    'tanggal_terbit'          => $this->post('tanggal_terbit'),
                    'wartajemaat'    		  => $this->post('wartajemaat'));
                    
        $insert = $this->db->insert('warta', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data warta
    function index_put() {
        $id_warta = $this->put('id_warta');
        $data = array(
                    'id_warta'       		=> $this->put('id_warta'),
                    'tanggal_terbit'        => $this->put('tanggal_terbit'),
                    'wartajemaat'			=> $this->put('wartajemaat'));
        $this->db->where('id_warta', $id_warta);
        $update = $this->db->update('warta', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete warta
    function index_delete() {
        $id_warta = $this->delete('id_warta');
        $this->db->where('id_warta', $id_warta);
        $delete = $this->db->delete('warta');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}