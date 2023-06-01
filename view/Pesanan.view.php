<?php
class PesananView
{
    public function render($data)
    {
        $no = 1;
        $dataPesanan = null;
        foreach ($data as $val) {
            list($id_pesanan, $nama_barang, $jenis_barang) = $val;
            $dataPesanan .= "<tr>
                <td>" . $no++ . "</td>
                <td>" . $nama_barang . "</td>
                <td>" . $jenis_barang . "</td>
                <td>
                <a href='pesanan.php?id_hapus=" . $id_pesanan . "' class='btn btn-danger''>Hapus</a>
                <a href='./template/updatePesanan.php?id_pesanan=" . $id_pesanan . "&nama_barang=" . $nama_barang . "&jenis_barang=" . $jenis_barang . "' class='btn btn-success''>Edit</a>
                </td>
                </tr>";
        }
        $tpl = new Template("template/pesanan.html");
        $tpl->replace("DATA_TABEL", $dataPesanan);
        $tpl->write();
    }
}
