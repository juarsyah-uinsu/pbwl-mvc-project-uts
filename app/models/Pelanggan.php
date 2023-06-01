<?php

namespace App\Models;

use App\Core\Model;

class Pelanggan extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_pelanggan";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
}
