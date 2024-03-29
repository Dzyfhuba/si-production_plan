<?php

require_once("../config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);


    // menyiapkan query
	$sql = "INSERT INTO user (username, password) 
	VALUES (:username, :password)";
	$stmt = $db->prepare($sql);

    // bind parameter ke query
	$params = array(
		":username" => $username,
		":password" => $password,
	);

    // eksekusi query untuk menyimpan ke database
	$saved = $stmt->execute($params);
	session_start();
	$_SESSION["user"] = $user;
    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
	if($saved) header("Location: http://localhost/sisteminformasi/");
}

?>