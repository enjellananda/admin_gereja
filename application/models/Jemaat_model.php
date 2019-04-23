<?php

 
class Jemaat_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get jemaat by id_jemaat
     */
    function get_jemaat($id_jemaat)
    {
        return $this->db->get_where('jemaat',array('id_jemaat'=>$id_jemaat))->row_array();
    }
    
    /*
     * Get all jemaat count
     */
    function get_all_jemaat_count()
    {
        $this->db->from('jemaat');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all jemaat
     */
    function get_all_jemaat($params = array())
    {
        $this->db->order_by('id_jemaat', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('jemaat')->result_array();
    }
        
    /*
     * function to add new jemaat
     */
    function add_jemaat($params)
    {
        $this->db->insert('jemaat',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update jemaat
     */
    function update_jemaat($id_jemaat,$params)
    {
        $this->db->where('id_jemaat',$id_jemaat);
        return $this->db->update('jemaat',$params);
    }
    
    /*
     * function to delete jemaat
     */
    function delete_jemaat($id_jemaat)
    {
        return $this->db->delete('jemaat',array('id_jemaat'=>$id_jemaat));
    }
}
