<?php

class Kotbah_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get kotbah by id_kotbah
     */
    function get_kotbah($id_kotbah)
    {
        return $this->db->get_where('kotbah',array('id_kotbah'=>$id_kotbah))->row_array();
    }
        
    /*
     * Get all kotbah
     */
    function get_all_kotbah()
    {
        $this->db->order_by('id_kotbah', 'desc');
        return $this->db->get('kotbah')->result_array();
    }
        
    /*
     * function to add new kotbah
     */
    function add_kotbah($params)
    {
        $this->db->insert('kotbah',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update kotbah
     */
    function update_kotbah($id_kotbah,$params)
    {
        $this->db->where('id_kotbah',$id_kotbah);
        return $this->db->update('kotbah',$params);
    }
    
    /*
     * function to delete kotbah
     */
    function delete_kotbah($id_kotbah)
    {
        return $this->db->delete('kotbah',array('id_kotbah'=>$id_kotbah));
    }
}