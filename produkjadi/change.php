<?php

require_once("../config.php");

if(isset($_POST['change'])){

    $id_produk_jadi = $_POST['id_produk'];
    $id_mesin_produk_jadi = $_POST['id_mesin'];
    $nama_produk_jadi = $_POST['nama_produk'];
    $jumlah_produk_jadi = $_POST['jumlah_produk'];
    $tanggal_produk_jadi = $_POST['tanggal_produk'];

    // menyiapkan query
	$sql = "UPDATE produk_jadi SET id_mesin_produk_jadi=:id_mesin_produk_jadi, nama_produk_jadi=:nama_produk_jadi, jumlah_produk_jadi=:jumlah_produk_jadi, tanggal_produk_jadi=:tanggal_produk_jadi WHERE id_produk_jadi=:id_produk_jadi";
	$change = $db->prepare($sql);

    // bind parameter ke query
	$params = array(
		":id_mesin_produk_jadi" => $id_mesin_produk_jadi,
		":id_produk_jadi" => $id_produk_jadi,
		":nama_produk_jadi" => $nama_produk_jadi,
		":jumlah_produk_jadi" => $jumlah_produk_jadi,
		":tanggal_produk_jadi" => $tanggal_produk_jadi,
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