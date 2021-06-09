<?php

require_once("../config.php");

if(isset($_POST['change'])){

    $jenis_bahan_baku = $_POST['jenis'];
    $jumlah_bahan_baku = $_POST['jumlah'];
    $tanggal_masuk_bahan_baku = $_POST['tanggal_masuk'];
    $id_bahan_baku = $_POST['id'];

    // menyiapkan query
	$sql = "UPDATE bahan_baku SET jenis_bahan_baku=:jenis_bahan_baku, jumlah_bahan_baku=:jumlah_bahan_baku, tanggal_masuk_bahan_baku=:tanggal_masuk_bahan_baku WHERE id_bahan_baku=:id_bahan_baku";
	$change = $db->prepare($sql);

    // bind parameter ke query
	$params = array(
		":id_bahan_baku" => $id_bahan_baku,
		":jenis_bahan_baku" => $jenis_bahan_baku,
		":jumlah_bahan_baku" => $jumlah_bahan_baku,
		":tanggal_masuk_bahan_baku" => $tanggal_masuk_bahan_baku,
	);

    // eksekusi query untuk menyimpan ke database
	$saved = $change->execute($params);
	// session_start();
	// echo $saved;
	// $_SESSION["user"] = $user;
    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
	header("Location: index.php");
}

?>