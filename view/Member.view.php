<?php
class MemberView
{
    public function render($data, $dataPesanan)
    {
        $no = 1;
        $dataMembers = null;
        foreach ($data as $val) {
            list($id, $name, $email, $phone, $join_date, $id_pesanan) = $val;
            $nama_barang = '';
            $id_member = $id;
            foreach ($dataPesanan as $pesanan) {
                list($id, $nama) = $pesanan;
                if ($id == $id_pesanan) {
                    $nama_barang = $nama;
                    break;
                }
            }
            $dataMembers .= "<tr>
                <td>" . $no++ . "</td>
                <td>" . $name . "</td>
                <td>" . $email . "</td>
                <td>" . $phone . "</td>
                <td>" . $join_date . "</td>
                <td>" . $nama_barang . "</td>
                <td>
                <a href='index.php?id_hapus=" . $id_member . "' class='btn btn-danger''>Hapus</a>
                <a href='index.php?editForm=" . $id_member . "' class='btn btn-success''>Edit</a>
                </td>
                </tr>";
        }

        $tpl = new Template("template/index.html");
        $tpl->replace("DATA_TABEL", $dataMembers);
        $tpl->write();
    }

    public function listPesanan($dataPesanan)
    {
        $listpesanan = null;
        foreach ($dataPesanan as $val) {
            list($id, $nama) = $val;
            $listpesanan .= "<option value='" . $id . "'>" . $nama . "</option>";
        }

        $tpl = new Template("template/addMember.html");
        $tpl->replace("OPTION", $listpesanan);
        $tpl->write();
    }

    public function editMember($idMember, $data, $dataPesanan)
    {
        $dataMember = null;
        $pesananMember = 0;
        foreach ($data as $val) {
            list($id, $name, $email, $phone, $join_date, $id_pesanan) = $val;
            if ($idMember == $id) {
                $dataMember .=
                    "<input type='hidden' name='id_edit' value='$id' class='form-control'> <br>

                <label> NAME: </label>
                <input type='text' name='name' value='$name' class='form-control'> <br>
                <label> EMAIL: </label>
                <input type='text' name='email' value='$email' class='form-control'> <br>
                <label> PHONE: </label>
                <input type='text' name='phone' value='$phone' class='form-control'> <br>
                 <label> JOIN DATE: </label>
                <input type='date' name='join_date' value='$join_date' class='form-control''> <br>
                <label> PESANAN:</label>
            ";
                $pesananMember = $id_pesanan;
                break;
            }
        }

        $listpesanan = null;
        foreach ($dataPesanan as $val) {
            list($id, $nama) = $val;
            if ($id == $pesananMember) {
                $listpesanan .= "<option selected value='" . $id . "'>" . $nama . "</option>";
            } else {
                $listpesanan .= "<option value='" . $id . "'>" . $nama . "</option>";
            }
        }

        $tpl = new Template("template/updateMember.php");
        $tpl->replace("FORM_MEMBER", $dataMember);
        $tpl->replace("PESANAN_MEMBER", $listpesanan);
        $tpl->write();
    }
}
