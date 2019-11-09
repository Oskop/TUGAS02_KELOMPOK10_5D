<?php
require_once 'pdo_connection.php';

function get_wadah_all()
{
  try {
    $wadah_all = $con->prepare("SELECT * FROM wadah WHERE delete_all = null");
    $wadah_all->execute();
    // var_dump($wadah_all);
    return $wadah_all;
  } catch (\Exception $e) {
    var_dump($e);die;
    return $e;
  }

}

function get_wadah_once($id)
{
  if (isset($id)) {
    $wadah = $con->prepare("SELECT * FROM wadah WHERE id = :id AND delete_all = null");
    $wadah->bindParam(':id', $id);
    $wadah->execute();
    var_dump($wadah);
    return $wadah;
  } else {
    $error = "Ada kesalahan. Disarankan untuk mode debugging";
    echo "Ada kesalahan. Disarankan untuk mode debugging";
    return $error;
  }
}

function insert_wadah($data)
{
  $query = "INSERT INTO wepeak.wadah (jenis, isi, harga) VALUES (:jenis, :isi, :harga)";
  $statement = $con->prepare($query);
  if (isset($data)) {
    $statement->bindParam(':jenis', $data['jenis']);
    $statement->bindParam(':isi', $data['isi']);
    $statement->bindParam(':harga', $data['harga']);
    $statement->execute();
    return "Berhasil Memasukkan Data";
  } else {
    return "Data tidak ada.";
  }
}

function update_wadah($id, $data)
{
  $query = "UPDATE wepeak.wadah SET jenis=:jenis, isi=:isi, harga=:harga WHERE id = :id";
  $statement = $con->prepare($query);
  if (isset($id)) {
    $statement->bindParam(':jenis', $data['jenis']);
    $statement->bindParam(':isi', $data['isi']);
    $statement->bindParam(':harga', $data['harga']);
    $statement->bindParam(':id', $id);
    // $wadah = $con->query("UPDATE wadah SET jenis=?, isi=?, harga=?, update_at=TIMESTAMP()
    //                       WHERE id = ?");
    $statement->execute();
    return "Berhasil Mengubah Data";
  } else {
    return "Data tidak ada.";
  }
}

function delete_wadah($id)
{
  $query = "UPDATE wepeak.wadah SET delete_at= TIMESTAMP WHERE id = :id ";
  $statement = $con->prepare($query);
  if (isset($id)) {
    $statement->bindParam(':id', $id);
    $statement->execute();
    return "Berhasil menghapus data.";
  } else {
    return "id belum tercantum";
  }
}

 ?>
