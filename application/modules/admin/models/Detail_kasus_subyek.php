<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Detail_kasus_subyek extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_detail_kasus()
        {
            $this->db->select('*');
            $this->db->from('detail_kasus_subyeks a'); 
            $this->db->join('tabel_kasus b', 'b.id_kasus=a.id_kasus', 'left');
            $this->db->join('tabel_subyeks c', 'c.id_subyek=a.id_subyek', 'left');
            // $this->db->where('c.album_id',$id);
            // $this->db->order_by('c.id_kasus','asc');         
            $query = $this->db->get(); 
            if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            }
        }
}