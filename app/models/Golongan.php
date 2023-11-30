<?php

namespace App\Models;

use App\Core\Model;

class Golongan extends Model
{

     public function show()
     {
          $query = "SELECT * FROM tb_golongan" ;
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }

     public function save()
     {
          $gol_kode = $_POST['gol_kode'];
          $gol_nama = $_POST['gol_nama'];

          $sql = "INSERT INTO tb_golongan (gol_kode, gol_nama) VALUES (:gol_kode, :gol_nama)";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":gol_kode", $gol_kode);
          $stmt->bindParam(":gol_nama", $gol_nama);

          $stmt->execute();
     }

     public function edit($id)
     {
          $query = "SELECT * FROM tb_golongan WHERE gol_id=:id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }

     public function update()
     {
         // Periksa apakah kunci 'gol_kode' ada dalam $_POST
          $gol_kode = $_POST['gol_kode'];
         
     
         // Lakukan hal yang sama untuk variabel lainnya
         $gol_nama = $_POST['gol_nama'];
         $timeNow  = $this->getTimeNow();
         $gol_id = $_POST['gol_id'];
     
         $sql = "UPDATE tb_golongan
                   SET gol_kode=:gol_kode, 
                   gol_nama=:gol_nama, 
                   update_at=:update_at
                   WHERE gol_id=:gol_id";
     
         $stmt = $this->db->prepare($sql);
     
         $stmt->bindParam(":gol_kode", $gol_kode);
         $stmt->bindParam(":gol_nama", $gol_nama);
         $stmt->bindParam(":update_at", $timeNow);
         $stmt->bindParam(":gol_id", $gol_id);
         $stmt->execute();
     }
       

     public function delete($id)
     {
          $sql = "DELETE FROM tb_golongan WHERE gol_id=:id";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":id", $id);
          $stmt->execute();
     }

     public function dataGolongan()
     {
          $sql  = "SELECT COUNT(*) as total FROM tb_golongan";
          $result = $this->db->prepare($sql);
          $result->execute();
          $rows = $result->fetchColumn();

          return $rows;
     }
}
