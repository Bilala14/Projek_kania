<?php
#1. Membuat Koneksi  database dengan php
include("../koneksi.php");

#2. Mengambil semua value dari form dan dimasukkan ke masing-masing variable
$id = $_POST['id'];
$kd = $_POST['kode'];
$jrs = $_POST['jurusan'];


#3 Menuliskan query simpan
$sunting = "UPDATE jurusans SET kode='$kd',jurusan='$jrs' WHERE id='$id'";

#4. Menjalankan query
$proses = mysqli_query($koneksi,$sunting);


#5. Mengalihkan Halaman 
//header("location:index.php")//
?>
<script>
    document.location="index.php";
</script>