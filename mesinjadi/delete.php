<?php

require_once("../config.php");

if(isset($_POST['delete_operator'])){
    $id_operator = $_POST['id_operator'];

    // menyiapkan query
	$sql = "DELETE FROM operator WHERE id_operator=:id_operator";
	$delete = $db->prepare($sql);

    // bind parameter ke query
	$params = array(
		":id_operator" => $id_operator
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