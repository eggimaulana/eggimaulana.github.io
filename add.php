<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $Nama = $_POST['nama']; 
  $Email = $_POST['email']; 
  $Comment = $_POST['comment'];
// id_produk layak '' karena kita set auto increment 
  $q = $conn->query("INSERT INTO komentar VALUES ('', '$Nama', '$Email', '$Comment')");
if ($q) { 
    // pesan jika data tersimpan 
    echo "<script>alert('Data produk berhasil ditambahkan'); window.location.href='index.php'</script>"; 
  } else { 
    // pesan jika data gagal disimpan 
    echo "<script>alert('Data produk gagal ditambahkan'); window.location.href='index.php'</script>"; 
  } 
} else { 
  // jika coba akses langsung halaman ini akan diredirect ke halaman index 
  header('Location: index.php'); 
}