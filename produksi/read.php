<?php

require_once("../config.php");


    // menyiapkan query
$sql = "SELECT * FROM mesin_produk_jadi";
	$read = $db->prepare($sql);

    // eksekusi query untuk menyimpan ke database
$read->execute();

$data_operator = $read->fetchAll();
	// if($saved) header("Location: ../");

?>