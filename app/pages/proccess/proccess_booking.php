<?php
//#Insert - Contoh 

include "../../../system/class_crud.php";
include "../../../system/libraries.php";

$db = new crud();

$table = 'booking';

// Field
$tanggal_booking= htmlentities($_POST['tanggal_booking']);
$nama_lengkap = htmlentities($_POST['nama_lengkap']);
$email = htmlentities($_POST['email']);
$no_hp = htmlentities($_POST['no_hp']);
$mobil = htmlentities($_POST['mobil']);
$no_plat = htmlentities($_POST['no_plat']);
$kilometer = htmlentities($_POST['kilometer']);
$keluhan_service = htmlentities($_POST['keluhan_service']);



$data = array( 'tanggal_booking' => $tanggal_booking, 
              'nama_lengkap' => $nama_lengkap, 
               'email' => $email, 
              'no_hp' => $no_hp,
              'mobil' => $mobil,
              'no_plat' => $no_plat,
              'kilometer' => $kilometer,
              'keluhan_service' => $keluhan_service
              );


$insert = $db->insert($table, $data);

if($insert == 1) {
    echo '<script type="text/javascript">alert("Terimakasih sudah menentukan waktu booking");document.location="../../../index.php?p=service&info=success";</script>';
}
?>