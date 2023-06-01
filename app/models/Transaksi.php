<?php

namespace App\Models;

use App\Core\Model;

class Transaksi extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_transaksi";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
}
