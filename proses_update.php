<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) { 
  $id = $_POST['id_produk']; 
  $Nama = $_POST['Nama']; 
  $Email = $_POST['Email']; 
  $Comment = $_POST['Comment'];
$q = $con->query("UPDATE produk SET nama_produk = '$Nama', harga = '$Email', qty = '$Comment' WHERE id_produk = '$id'");
if ($q) { 
    // pesan jika data berubah 
    echo "<script>alert('Data produk berhasil diubah'); window.location.href='index.php'</script>"; 
  } else { 
    // pesan jika data gagal diubah 
    echo "<script>alert('Data produk gagal diubah'); window.location.href='index.php'</script>"; 
  } 
} else { 
  // jika coba akses langsung halaman ini akan diredirect ke halaman index 
  header('Location: index.php'); 
}