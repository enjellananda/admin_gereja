<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
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
    
    /*
     * Get all kegiatan count
     */
    function get_all_kegiatan_count()
    {
        $this->db->from('kegiatan');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all kegiatan
     */
    function get_all_kegiatan($params = array())
    {
        $this->db->order_by('id_kegiatan', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
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