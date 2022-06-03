<?php
include('tersekon.php');
$tersekon = new database();

$action = $_GET['action'];
if($action == "add"){
    $tersekon->tambah_data($_POST['nim'],$_POST['nama'], $_POST['email'],$_POST['hp'],$_POST['prodi']);
    header('location : tampil_data.php');
}
?>