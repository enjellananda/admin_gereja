<?php

 
class Warta_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get warta by id_warta
     */
    function get_warta($id_warta)
    {
        return $this->db->get_where('warta',array('id_warta'=>$id_warta))->row_array();
    }
    
    /*
     * Get all warta count
     */
    function get_all_warta_count()
    {
        $this->db->from('warta');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all warta
     */
    function get_all_warta($params = array())
    {
        $this->db->order_by('id_warta', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('warta')->result_array();
    }
        
    /*
     * function to add new warta
     */
    function add_warta($params)
    {
        $this->db->insert('warta',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update warta
     */
    function update_warta($id_warta,$params)
    {
        $this->db->where('id_warta',$id_warta);
        return $this->db->update('warta',$params);
    }
    
    /*
     * function to delete warta
     */
    function delete_warta($id_warta)
    {
        return $this->db->delete('warta',array('id_warta'=>$id_warta));
    }

}
