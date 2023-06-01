<?php
include_once("model/Template.class.php");
include_once("model/DB.class.php");
include_once("controller/Member.controller.php");

$member = new MemberController();


if (isset($_POST['add'])) {
  $member->add($_POST);
} else if (!empty($_GET['addForm'])) {
  $member->addForm();
} else if (!empty($_GET['editForm'])) {
  $member->editForm($_GET['editForm']);
} else if (!empty($_GET['id_hapus'])) {
  $id = $_GET['id_hapus'];
  $member->delete($id);
} else if (isset($_POST['edit'])) {
  $member->update($_POST);
} else {
  $member->index();
}
