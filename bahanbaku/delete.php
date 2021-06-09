<?php

require_once("../config.php");

if(isset($_POST['delete'])){
    $id_bahan_baku = $_POST['id'];

    // menyiapkan query
	$sql = "DELETE FROM bahan_baku WHERE id_bahan_baku=:id_bahan_baku";
	$delete = $db->prepare($sql);

    // bind parameter ke query
	$params = array(
		":id_bahan_baku" => $id_bahan_baku
	);

    // eksekusi query untuk menyimpan ke database
	$saved = $delete->execute($params);
	// session_start();
	echo $saved;
	// $_SESSION["user"] = $user;
    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
	header("Location: index.php");
}

?>