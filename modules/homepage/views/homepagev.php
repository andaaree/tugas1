<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Beranda | Tutorial Login Register CodeIgniter</title>
</head>
<body>
<h1>Selamat Datang <?php echo ucfirst($this->session->userdata('username')); ?> di Situs kami.</h1>
<p>Silakan klik link<?php echo anchor('login','Masuk'); ?>untuk masuk ke dalam sistem atau<?php echo anchor('register','Daftar'); ?>untuk mendaftar.</p>
<p>Klik <?php echo anchor('dashboard','Dashboard') ?>untuk ke menu Admin</p>
</body>
</html>