<?php

require_once("../config.php");

if(isset($_POST['change'])){


    $id_mesin_produk_jadi = $_POST['id_mesin'];
    $merk_mesin = $_POST['merk_mesin'];
    $tanggal_maintenance = $_POST['tanggal_maintenance'];
    $nama_mesin = $_POST['nama_mesin'];

    // menyiapkan query
	$sql = "UPDATE mesin_produk_jadi SET merk_mesin=:merk_mesin, tanggal_maintenance=:tanggal_maintenance, nama_mesin=:nama_mesin WHERE id_mesin_produk_jadi=:id_mesin_produk_jadi";
	$change = $db->prepare($sql);

    // bind parameter ke query
	$params = array(
		":id_mesin_produk_jadi" => $id_mesin_produk_jadi,
		":merk_mesin" => $merk_mesin,
		":tanggal_maintenance" => $tanggal_maintenance,
		":nama_mesin" => $nama_mesin,
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