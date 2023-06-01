<?php

include_once("model/DB.class.php");
include_once("model/Template.class.php");
include_once("controller/Pesanan.controller.php");

$pesanan = new PesananController();

if (isset($_POST['add'])) {
    $pesanan->add($_POST);
} else if (!empty($_GET['id_hapus'])) {
    $id = $_GET['id_hapus'];
    $pesanan->delete($id);
} else if (isset($_POST['edit'])) {
    $pesanan->update($_POST);
} else {
    $pesanan->index();
}
