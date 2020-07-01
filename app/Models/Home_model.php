<?php namespace App\Models;
use CodeIgniter\Model;

class Home_model extends Model 
{
    public function get_barang($id = false)
    {
        if($id===false){
            return $this->db->table('tbl_barang')->get()->getResultArray();
        } else {
            return $this->db->table('tbl_barang')->where('id', $id)->get()->getRowArray();
        }
    }

    public function insert_barang($data) 
    {
        return $this->db->table('tbl_barang')->insert($data);
    }

    public function update_barang($data, $id) 
    {
        return $this->db->table('tbl_barang')->update($data,array('id'=>$id));
    }

    public function delete_barang($id) 
    {
        return $this->db->table('tbl_barang')->delete(array('id'=>$id));
    }
}