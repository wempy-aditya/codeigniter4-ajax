<?php namespace App\Models;
use CodeIgniter\Model;

class Postingan_model extends Model 
{
    public function get_postingan($id = false)
    {
        if($id===false){
            return $this->db->table('tbl_postingan')->get()->getResultArray();
        } else {
            return $this->db->table('tbl_postingan')->where('id', $id)->get()->getRowArray();
        }
    }

    public function insert_postingan($data) 
    {
        return $this->db->table('tbl_postingan')->insert($data);
    }

    public function update_postingan($data, $id) 
    {
        return $this->db->table('tbl_postingan')->update($data,array('id'=>$id));
    }

    public function delete_postingan($id) 
    {
        return $this->db->table('tbl_postingan')->delete(array('id'=>$id));
    }
}