<?php
include_once("connection.php");
include_once("model/Pesanan.class.php");
include_once("view/Pesanan.view.php");

class PesananController
{
    private $pesanan;

    function __construct()
    {
        $this->pesanan = new Pesanan(connection::$db_host, connection::$db_user, connection::$db_pass, connection::$db_name);
    }

    public function index()
    {
        $this->pesanan->open();
        $this->pesanan->getPesanan();
        $data = array();
        while ($row = $this->pesanan->getResult()) {
            array_push($data, $row);
        }

        $this->pesanan->close();

        $view = new PesananView();
        $view->render($data);
    }


    function add($data)
    {
        $this->pesanan->open();
        $this->pesanan->add($data);
        $this->pesanan->close();

        header("location:pesanan.php");
    }

    function update($id)
    {
        $this->pesanan->open();
        $this->pesanan->update($id);
        $this->pesanan->close();

        header("location:pesanan.php");
    }

    function delete($id)
    {
        $this->pesanan->open();
        $this->pesanan->delete($id);
        $this->pesanan->close();

        header("location:pesanan.php");
    }
}
