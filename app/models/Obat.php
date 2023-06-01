<?php

namespace App\Models;

use App\Core\Model;

class Obat extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_obat";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
}
