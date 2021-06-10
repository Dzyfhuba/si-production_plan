<?php

require_once("../config.php");

if(isset($_POST['insert'])){

    $id_mesin_produk_jadi = $_POST['id_mesin'];
    $nama_produk_jadi = $_POST['nama_produk'];
    $jumlah_produk_jadi = $_POST['jumlah_produk'];
    $tanggal_produk_jadi = $_POST['tanggal_produk'];


    // menyiapkan query
	$sql = "INSERT INTO produk_jadi (id_mesin_produk_jadi, nama_produk_jadi, jumlah_produk_jadi, tanggal_produk_jadi) 
	VALUES (:id_mesin_produk_jadi, :nama_produk_jadi, :jumlah_produk_jadi, :tanggal_produk_jadi)";
	$insert = $db->prepare($sql);

    // bind parameter ke query
	$params = array(
		":id_mesin_produk_jadi" => $id_mesin_produk_jadi,
		":nama_produk_jadi" => $nama_produk_jadi,
		":jumlah_produk_jadi" => $jumlah_produk_jadi,
		":tanggal_produk_jadi" => $tanggal_produk_jadi,
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