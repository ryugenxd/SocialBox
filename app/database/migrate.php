<?php
$connect = mysqli_connect(DB_HOST,DB_USER,DB_PASS);
$db = "CREATE DATABASE IF NOT EXISTS ".DB_NAME;
mysqli_query($connect,$db);
$tb = "CREATE TABLE IF NOT EXISTS ".TABEL1."(id INT NOT NULL AUTO_INCREMENT,
name VARCHAR(100) NOT NULL, password TEXT NOT NULL, username TEXT NOT NULL,email TEXT NOT NULL,level VARCHAR(100) NOT NULL,
create_at VARCHAR(150),
PRIMARY KEY (id))";
$ok = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_query($ok,$tb);
//echo "DATABASE SELESAI DIBUAT\n";

/*

AUTO MAKE DATABASE 

*/