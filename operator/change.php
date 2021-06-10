<?php

require_once("../config.php");

if(isset($_POST['change'])){

    $nama_operator = $_POST['nama_operator'];
    $jenis_pekerjaan = $_POST['jenis_pekerjaan'];
    $jam_kerja = $_POST['jam_kerja'];
    $id_operator = $_POST['id_operator'];

    // menyiapkan query
	$sql = "UPDATE operator SET nama_operator=:nama_operator, jenis_pekerjaan=:jenis_pekerjaan, jam_kerja_operator=:jam_kerja WHERE id_operator=:id_operator";
	$change = $db->prepare($sql);

    // bind parameter ke query
	$params = array(
		":id_operator" => $id_operator,
		":nama_operator" => $nama_operator,
		":jenis_pekerjaan" => $jenis_pekerjaan,
		":jam_kerja" => $jam_kerja,
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