<?php

class Struktur_organisasi_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get struktur_organisasi by id_struktur
     */
    function get_struktur_organisasi($id_struktur)
    {
        $this->db->query("SELECT 'struktur_organisasi.*', 'jemaat.nama_jemaat' from struktur_organisasi, jemaat where 'struktur_organisasi.id_jemaat'='jemaat.id_jemaat'");
        // $this->db->select('*');
        // $this->db->from('struktur_organisasi');
        // $this->db->join('jemaat', 'struktur_organisasi.id_jemaat = jemaat.id_jemaat');
        return $this->db->get_where('struktur_organisasi',array('id_struktur'=>$id_struktur))->row_array();
    }
    
    /*
     * Get all struktur_organisasi count
     */
    function get_all_struktur_organisasi_count()
    {
        $this->db->from('struktur_organisasi');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all struktur_organisasi
     */
    function get_all_struktur_organisasi($params = array())
    {
        $this->db->select('struktur_organisasi.*,jemaat.nama_jemaat');
        $this->db->from('struktur_organisasi');
        $this->db->join('jemaat', 'struktur_organisasi.id_jemaat = jemaat.id_jemaat');
        $this->db->order_by('id_struktur', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get()->result_array();
    }
        
    /*
     * function to add new struktur_organisasi
     */
    function add_struktur_organisasi($params)
    {
        $this->db->insert('struktur_organisasi',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update struktur_organisasi
     */
    function update_struktur_organisasi($id_struktur,$params)
    {
        $this->db->where('id_struktur',$id_struktur);
        return $this->db->update('struktur_organisasi',$params);
    }
    
    /*
     * function to delete struktur_organisasi
     */
    function delete_struktur_organisasi($id_struktur)
    {
        return $this->db->delete('struktur_organisasi',array('id_struktur'=>$id_struktur));
    }
}
