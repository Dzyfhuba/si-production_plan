<?php

require_once("../config.php");

if(isset($_POST['delete_mesin_produk_setengah_jadi'])){
    $id_mesin_produk_setengah_jadi = $_POST['id_mesin_produk_setengah_jadi'];

    // menyiapkan query
	$sql = "DELETE FROM mesin_produk_setengah_jadi WHERE id_mesin_produk_setengah_jadi=:id_mesin_produk_setengah_jadi";
	$delete = $db->prepare($sql);

    // bind parameter ke query
	$params = array(
		":id_mesin_produk_setengah_jadi" => $id_mesin_produk_setengah_jadi
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