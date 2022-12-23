<?php

include 'layout/function.php';
include 'koneksi.php';

//menerima id mahasiswa yang dipilih pengguna
$id_mhs = (int)$_GET['id_mhs'];

if (delete_data($id_mhs) > 0) {
    echo "<script> 
            alert('Data mahasiswa berhasil dihapus!');
            document.location.href = 'edit-data.php';
          </script>";
}

else {
    echo "<script> 
            alert('Data mahasiswa gagal dihapus!');
            document.location.href = 'edit-data.php';
          </script>";
}

?>