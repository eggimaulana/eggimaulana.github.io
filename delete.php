<?php
require_once 'koneksi.php';
if (isset($_GET['id'])) { 
  $id = $_GET['id'];
// perintah hapus data berdasarkan id yang dikirimkan 
  $q = $conn->query("DELETE FROM produk WHERE id_produk = '$id'");
// cek perintah 
  if ($q) { 
    // pesan apabila hapus berhasil 
    echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php'</script>"; 
  } else { 
    // pesan apabila hapus gagal 
    echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php'</script>"; 
  } 
} else { 
  // jika mencoba mengakses langsung ke file ini akan diarahkan ke halaman index 
  header('Location:index.php'); 
}