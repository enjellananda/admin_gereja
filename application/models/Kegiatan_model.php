<?php

class Kegiatan_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get kegiatan by id_kegiatan
     */
    function get_kegiatan($id_kegiatan)
    {
        return $this->db->get_where('kegiatan',array('id_kegiatan'=>$id_kegiatan))->row_array();
    }
    
    function get_file($id_kegiatan)
    {
        $this->db->select('pamflet');
        return $this->db->get_where('kegiatan',array('id_kegiatan'=>$id_kegiatan))->row_array();
    }

    /*
     * Get all kegiatan count
     */
    function get_all_kegiatan_count_waiting()
    {
        // $this->db->from('kegiatan');
        // return $this->db->count_all_results();
        return $this->db->where(['status'=>'waiting'])->from("kegiatan")->count_all_results();
    }

    function get_all_kegiatan_count_confirm()
    {
        // $this->db->from('kegiatan');
        // return $this->db->count_all_results();
        return $this->db->where(['status'=>'confirm'])->from("kegiatan")->count_all_results();
    }
        
    /*
     * Get all kegiatan
     */
    function get_all_kegiatan()
    {
        return $this->db->get('kegiatan')->result_array();
    }
        
    /*
     * function to add new kegiatan
     */
    function add_kegiatan($params)
    {
        $this->db->insert('kegiatan',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update kegiatan
     */
    function update_kegiatan($id_kegiatan,$params)
    {
        $this->db->where('id_kegiatan',$id_kegiatan);
        return $this->db->update('kegiatan',$params);
    }
    
    /*
     * function to delete kegiatan
     */
    function delete_kegiatan($id_kegiatan)
    {
        return $this->db->delete('kegiatan',array('id_kegiatan'=>$id_kegiatan));
    }

    
}
