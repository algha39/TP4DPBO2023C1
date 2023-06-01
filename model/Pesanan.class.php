<?php
class Pesanan extends DB
{
    function getPesanan()
    {
        $query = "SELECT * FROM pesanan";
        return $this->execute($query);
    }

    function add($data)
    {
        $id = $data['id_pesanan'];
        $nama = $data['nama_barang'];
        $jenis = $data['jenis_barang'];

        $query = "INSERT INTO `pesanan`(`id_pesanan`, `nama_barang`, `jenis_barang`) VALUES ('$id','$nama', '$jenis')";
        return $this->execute($query);
    }

    function update($data)
    {
        $id = $data['id_pesanan'];
        $nama = $data['nama_barang'];
        $jenis = $data['jenis_barang'];

        $quwey = "UPDATE pesanan SET nama_barang = '$nama', jenis_barang = '$jenis' WHERE id_pesanan = '$id";
        return $this->execute($quwey);
    }

    function delete($id)
    {
        $query = "DELETE FROM pesanan WHERE id_pesanan = '$id'";
        return $this->execute($query);
    }
}
