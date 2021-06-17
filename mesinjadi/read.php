<?php

require_once("../config.php");


    // menyiapkan query
$sql = "SELECT * FROM mesin_produk_jadi";
	$read = $db->prepare($sql);

    // eksekusi query untuk menyimpan ke database
$read->execute();

$data_operator = $read->fetchAll();
	// if($saved) header("Location: ../");
$sql2 = "SELECT id_operator FROM operator";
	$read = $db->prepare($sql2);

    // eksekusi query untuk menyimpan ke database
$read->execute();

$option_operator = $read->fetchAll();

$sql3 = "SELECT id_bahan_baku FROM bahan_baku";
	$read = $db->prepare($sql3);

    // eksekusi query untuk menyimpan ke database
$read->execute();

$option_bahan = $read->fetchAll();
?>