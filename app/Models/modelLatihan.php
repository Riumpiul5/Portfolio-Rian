<?php

namespace App\models;

use CodeIgniter\Model;

class modelLatihan extends model
{
    public function mhsData()
    {
        // tipe1
        $sql = "SELECT * FROM mhs";
        return $this->db->query($sql)->getResultArray();
        
        // tipe2
        // $builder = $this->db->table("mhs");
        // $query = $builder->get();
        // $result = $query->getResult();
        // return $result;

        // tipe3
        // return $this->db->table('mhs')
        //                 ->select('')
        //                 ->get()
        //                 ->getResultArray();
        
    }
}