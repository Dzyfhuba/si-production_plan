<?php

require_once("../config.php");


    // menyiapkan query
$sql = "SELECT * FROM produk_jadi";
	$read = $db->prepare($sql);

    // eksekusi query untuk menyimpan ke database
$read->execute();

$data_operator = $read->fetchAll();
	// if($saved) header("Location: ../");

$sql2 = "SELECT id_mesin_produk_jadi FROM mesin_produk_jadi";
$read = $db->prepare($sql2);

    // eksekusi query untuk menyimpan ke database
$read->execute();

$option_mesin_jadi = $read->fetchAll();

$sql3 = "SELECT id_produk_setengah_jadi FROM produk_setengah_jadi";
$read = $db->prepare($sql3);

    // eksekusi query untuk menyimpan ke database
$read->execute();

$option_produk_setengah_jadi = $read->fetchAll();
?>