<?php

require_once("../config.php");

if(isset($_POST['insert'])){

    $id_operator = $_POST['id_operator'];
    $id_bahan_baku = $_POST['id_bahan_baku'];
    $merk_mesin = $_POST['merk_mesin'];
    $tanggal_maintenance = $_POST['tanggal_maintenance'];
    $nama_mesin = $_POST['nama_mesin'];


    // menyiapkan query
	$sql = "INSERT INTO mesin_produk_setengah_jadi (id_operator, id_bahan_baku, merk_mesin, tanggal_maintenance, nama_mesin) 
	VALUES (:id_operator, :id_bahan_baku, :merk_mesin, :tanggal_maintenance, :nama_mesin)";
	$insert = $db->prepare($sql);

    // bind parameter ke query
	$params = array(
		":id_operator" => $id_operator,
		":id_bahan_baku" => $id_bahan_baku,
		":merk_mesin" => $merk_mesin,
		":tanggal_maintenance" => $tanggal_maintenance,
		":nama_mesin" => $nama_mesin,
	);

    // eksekusi query untuk menyimpan ke database
	$saved = $insert->execute($params);
	session_start();
	// $_SESSION["user"] = $user;
    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
	header("Location: index.php");
}

?>