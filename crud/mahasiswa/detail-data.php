<?php 

$title = 'Detail Mahasiswa';
include 'layout/header.php'; 

//mengambil id mahasiswa yg dipilih
$id_mhs = (int)$_GET['id_mhs'];

$mahasiswa = select("SELECT * FROM mahasiswa WHERE id_mhs = $id_mhs")[0];

?>
 
  <div class="container mt-4">
    <h3>Data <?= $mahasiswa['nama']; ?></h1>
    <br>
    <table class="table table-striped">
        <tr>
            <td>NIM</td>
            <td>: <?= $mahasiswa['id_mhs']; ?></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td>: <?= $mahasiswa['nama']; ?></td>
        </tr>

        <tr>
            <td>Program Studi</td>
            <td>: <?= $mahasiswa['prodi']; ?></td>
        </tr>

        <tr>
            <td>KOM</td>
            <td>: <?= $mahasiswa['kom']; ?></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?= $mahasiswa['gender']; ?></td>
        </tr>

        <tr>
            <td>No. Telepon</td>
            <td>: <?= $mahasiswa['no_telp']; ?></td>
        </tr>

        <tr>
            <td>E-mail</td>
            <td>: <?= $mahasiswa['email']; ?></td>
        </tr>

    </table>
    
    	
    <a href="javascript:window.history.go(-1);" class="btn btn-warning mt-4">
        <i class="fa-solid fa-circle-arrow-left"></i> Kembali
    </a>

  </div>
  
<?php include 'layout/footer.php'; ?>