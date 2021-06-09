<?php

require_once("../config.php");


    // menyiapkan query
$sql = "SELECT * FROM bahan_baku";
	$read = $db->prepare($sql);

    // eksekusi query untuk menyimpan ke database
$read->execute();

$data_operator = $read->fetchAll();
	// if($saved) header("Location: ../");

?>