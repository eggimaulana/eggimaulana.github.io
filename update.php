<?php
require_once 'koneksi.php';
if (isset($_GET['id'])) { 
  $id = $_GET['id'];
$q = $conn->query("SELECT * FROM produk WHERE id_produk = '$id'");
foreach ($q sebagai $dt) : 
  ?>
<h1>PlajariKode - CRUD dengan PHP MySQL</h1> 
  <h2>Halaman Ubah Data</h2>
<form action="proses_update.php" method="post"> 
    <input type="hidden" name="id_produk" value="<?= $dt['id_produk'] ?>"> 
    <input type="text " name="Nama" value="<?= $dt['Nama'] ?>"> 
    <input type="number" name="Email" value="<?= $dt['Email'] ?> "> 
    <input type="number" name="Comment" value="<?= $dt['Comment'] ?>"> 
    <input type="kirim" name="kirim" value="Ubah Data"> 
  </form>
<?php 
  endforeach; 
}