<?php

require_once("../config.php");


    // menyiapkan query
$sql = "SELECT produk_jadi.kode_produksi as kode_produksi, produk_jadi.tanggal_produk_jadi as tanggal_jadi , `bahan_baku`.`jenis_bahan_baku` AS `bahan_baku`, `mesin_produk_setengah_jadi`.`nama_mesin` AS `mesin_setengah_jadi`, `mesin_produk_jadi`.`nama_mesin` AS `mesin_jadi`, `operator`.`nama_operator` AS `nama_operator`, `produk_jadi`.`nama_produk_jadi` AS `produk_jadi`, `produk_setengah_jadi`.`nama_produk_setengah_jadi` AS `produk_setengah_jadi`
FROM `bahan_baku` 
	INNER JOIN `mesin_produk_setengah_jadi` ON `mesin_produk_setengah_jadi`.`id_bahan_baku` = `bahan_baku`.`id_bahan_baku`
	, `mesin_produk_jadi` 
	INNER JOIN `operator` ON `mesin_produk_jadi`.`id_operator` = `operator`.`id_operator` 
	INNER JOIN `produk_jadi` ON `produk_jadi`.`id_mesin_produk_jadi` = `mesin_produk_jadi`.`id_mesin_produk_jadi` 
	INNER JOIN `produk_setengah_jadi` ON `produk_jadi`.`id_produk_setengah_jadi` = `produk_setengah_jadi`.`id_produk_setengah_jadi`;ON mesin_produk_jadi.id_operator = operator.id_operator
 	";
	$read = $db->prepare($sql);

    // eksekusi query untuk menyimpan ke database
$read->execute();

$data_all = $read->fetchAll();

?>