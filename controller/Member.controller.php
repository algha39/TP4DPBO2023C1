<?php
include_once("connection.php");
include_once("model/Member.class.php");
include_once("model/Pesanan.class.php");
include_once("view/Member.view.php");

class MemberController
{
    private $member;
    private $pesanan;

    function __construct()
    {
        $this->member = new Member(connection::$db_host, connection::$db_user, connection::$db_pass, connection::$db_name);
        $this->pesanan = new Pesanan(connection::$db_host, connection::$db_user, connection::$db_pass, connection::$db_name);
    }

    public function index()
    {
        $this->member->open();
        $this->pesanan->open();
        $this->member->getMember();
        $this->pesanan->getPesanan();
        $data = array();
        while ($row = $this->member->getResult()) {
            array_push($data, $row);
        }

        $dataPesanan = array();
        while ($row = $this->pesanan->getResult()) {
            array_push($dataPesanan, $row);
        }

        $this->member->close();
        $this->pesanan->close();

        $view = new MemberView();
        $view->render($data, $dataPesanan);
    }

    public function addForm()
    {
        $this->pesanan->open();
        $this->pesanan->getPesanan();

        $dataPesanan = array();
        while ($row = $this->pesanan->getResult()) {
            array_push($dataPesanan, $row);
        }

        $this->pesanan->close();

        $view = new MemberView();
        $view->listPesanan($dataPesanan);
    }

    public function editForm($id)
    {
        $this->member->open();
        $this->pesanan->open();
        $this->member->getMember();
        $this->pesanan->getPesanan();
        $data = array();
        while ($row = $this->member->getResult()) {
            array_push($data, $row);
        }

        $dataPesanan = array();
        while ($row = $this->pesanan->getResult()) {
            array_push($dataPesanan, $row);
        }

        $this->member->close();
        $this->pesanan->close();

        $view = new MemberView();
        $view->editMember($id, $data, $dataPesanan);
    }

    function add($data)
    {
        $this->member->open();
        $this->member->add($data);
        $this->member->close();

        header("location:index.php");
    }

    function update($id)
    {
        $this->member->open();
        $this->member->update($id);
        $this->member->close();

        header("location:index.php");
    }

    function delete($id)
    {
        $this->member->open();
        $this->member->delete($id);
        $this->member->close();

        header("location:index.php");
    }
}
