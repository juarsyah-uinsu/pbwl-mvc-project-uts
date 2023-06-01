<?php

namespace App\Models;

use App\Core\Model;

class Jenisobat extends Model
{

      public function tampil()
      {
            $query = "SELECT * FROM tb_jenisobat";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            return $this->selects($stmt);
      }
}
