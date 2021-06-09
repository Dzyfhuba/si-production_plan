<?php

require_once("../config.php");

if(isset($_POST['insert'])){

    $jenis_bahan_baku = $_POST['jenis'];
    $jumlah_bahan_baku = $_POST['jumlah'];
    $tanggal_masuk_bahan_baku = $_POST['tanggal_masuk'];


    // menyiapkan query
	$sql = "INSERT INTO bahan_baku (jenis_bahan_baku, jumlah_bahan_baku, tanggal_masuk_bahan_baku) 
	VALUES (:jenis_bahan_baku, :jumlah_bahan_baku, :tanggal_masuk_bahan_baku)";
	$insert = $db->prepare($sql);

    // bind parameter ke query
	$params = array(
		":jenis_bahan_baku" => $jenis_bahan_baku,
		":jumlah_bahan_baku" => $jumlah_bahan_baku,
		":tanggal_masuk_bahan_baku" => $tanggal_masuk_bahan_baku,
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