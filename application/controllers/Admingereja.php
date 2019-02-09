<?php
 
require APPPATH . '/libraries/REST_Controller.php';
 
class Admin extends REST_Controller {
 
    function __construct($config = 'rest') {
        parent::__construct($config);
    }
 
    // show data admin
   function index_get() {
        $id_admin = $this->get('id_admin');
        if ($id_admin == '') {
            $admin = $this->db->get('admin')->result();
        } else {
            $this->db->where('id_admin', $id_admin);
            $admin = $this->db->get('admin')->result();
        }
        $this->response($admin, 200);
    }
 
    // insert new data to admin
    function index_post() {
        $data = array(
                    'id_admin'           => $this->post('id_admin'),
                    'username'           => $this->post('username'),
                    'password'    		 => $this->post('password'));
                    
        $insert = $this->db->insert('admin', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // update data admin
    function index_put() {
        $id_admin = $this->put('id_admin');
        $data = array(
                    'id_admin'       => $this->put('id_admin'),
                    'username'       => $this->put('username'),
                    'password'		 => $this->put('password'));
        $this->db->where('id_admin', $id_admin);
        $update = $this->db->update('admin', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
    // delete admin
    function index_delete() {
        $id_admin = $this->delete('id_admin');
        $this->db->where('id_admin', $id_admin);
        $delete = $this->db->delete('admin');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
 
}