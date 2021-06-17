<?php

require_once("../config.php");

if(isset($_POST['insert'])){

    $id_mesin_produk_jadi = $_POST['id_mesin'];
    $nama_produk_jadi = $_POST['nama_produk'];
    $jumlah_produk_jadi = $_POST['jumlah_produk'];
    $tanggal_produk_jadi = $_POST['tanggal_produk'];
    $id_produk_setengah_jadi = $_POST['id_produk_setengah_jadi'];


    // menyiapkan query
	$sql = "INSERT INTO produk_jadi (kode_produksi, id_produk_setengah_jadi, id_mesin_produk_jadi,  nama_produk_jadi, jumlah_produk_jadi, tanggal_produk_jadi) 
	VALUES (:kode_produksi, :id_produk_setengah_jadi, :id_mesin_produk_jadi, :nama_produk_jadi, :jumlah_produk_jadi, :tanggal_produk_jadi)";
	$insert = $db->prepare($sql);

$tanggal = explode("/", $tanggal_produk_jadi);
$hari = $tanggal[0];
$bulan = $tanggal[1];
$tahun = $tanggal[2];


    // bind parameter ke query
	$params = array(
		":id_produk_setengah_jadi" => $id_produk_setengah_jadi,
		":kode_produksi" => $bulan.$tahun,
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