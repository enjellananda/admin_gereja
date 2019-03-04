<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Admin_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get admin by id_admin
     */
    function get_admin($id_admin)
    {
        return $this->db->get_where('admin',array('id_admin'=>$id_admin))->row_array();
    }
    
    /*
     * Get all admin count
     */
    function get_all_admin_count()
    {
        $this->db->from('admin');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all admin
     */
    function get_all_admin($params = array())
    {
        $this->db->order_by('id_admin', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('admin')->result_array();
    }
        
    /*
     * function to add new admin
     */
    function add_admin($params)
    {
        $this->db->insert('admin',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update admin
     */
    function update_admin($id_admin,$params)
    {
        $this->db->where('id_admin',$id_admin);
        return $this->db->update('admin',$params);
    }
    
    /*
     * function to delete admin
     */
    function delete_admin($id_admin)
    {
        return $this->db->delete('admin',array('id_admin'=>$id_admin));
    }

    public function cek_data_login(){
        $query = $this->db->get_where('admin', array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')))
        );
        if($query->num_rows()== 0){
            $this->session->set_flashdata('msg','Cek Kembali username dan password');
            redirect('Admin/login','refresh');
        }else{
            $this->session->set_userdata($query->row_array());
            redirect('Admin/index','refresh');
        }
    }

    public function get_user_details($id_admin)
    {
       $this->db->select('username');
       $this->db->where('id_admin', $id_admin);
       $result = $this->db->get('admin');
       if ($result->num_rows() == 1) {
           return $result->row();
       } else {
           return false;
       }
   }
}
