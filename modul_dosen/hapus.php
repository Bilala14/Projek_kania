<?php
// Koneksi file ini
include("../koneksi.php");

// Mengambil id dari tombol hapus
$id = $_GET['xyz'];

// Menuliskan query 
$hapus = "DELETE FROM jurusans WHERE id='$id'";

// Menjalankan query
$proses = mysqli_query($koneksi,$hapus);

?>
<!-- Mengalihkan Halaman 
header("location:index.php") -->
<script>
    document.location="index.php";
</script>