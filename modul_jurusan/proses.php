<?php
// Membuat Koneksi  database dengan php
include("../koneksi.php");

// Mengambil semua value dari form dan dimasukkan ke masing-masing variable
$kd = $_POST['kode'];
$jrs = $_POST['jurusan'];



// Menuliskan query simpan
$simpan = "INSERT INTO jurusans(kode,jurusan)
VALUES('$kd','$jrs')";

// Menjalankan query
$proses = mysqli_query($koneksi,$simpan);

?>
<!-- Mengalihkan Halaman 
header("location:index.php") -->
<script>
    document.location="index.php";
</script>