<?php

require_once("../config.php");

if(isset($_POST['insert'])){

    $nama_operator = $_POST['nama_operator'];
    $jenis_pekerjaan = $_POST['jenis_pekerjaan'];
    $jam_kerja = $_POST['jam_kerja'];


    // menyiapkan query
	$sql = "INSERT INTO operator (nama_operator, jenis_pekerjaan, jam_kerja_operator) 
	VALUES (:nama_operator, :jenis_pekerjaan, :jam_kerja)";
	$insert = $db->prepare($sql);

    // bind parameter ke query
	$params = array(
		":nama_operator" => $nama_operator,
		":jenis_pekerjaan" => $jenis_pekerjaan,
		":jam_kerja" => $jam_kerja,
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