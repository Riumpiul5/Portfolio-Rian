<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestBookModel extends Model
{
   public function getdata(){
    $query = $this->db->query("SELECT * FROM guest_book ORDER BY id DESC");

   return $query->getResult();
   
   }

   function simpanData($table, $data)
   {
    $this->db->table($table)->insert($data);
    return true;
   }


}
