<?php

$title = 'Ubah Data';
include 'layout/header.php'; 

//mengambil id mahasiswa
$id_mhs = (int)$_GET['id_mhs'];

$mahasiswa = select("SELECT * FROM mahasiswa WHERE id_mhs = $id_mhs")[0];

//cek apakah tombol ubah ditekan
if (isset($_POST['ubah'])) {
  if (update_data($_POST) > 0) {
    echo "<script>
            alert('Data mahasiswa berhasil diubah!');
            document.location.href = 'edit-data.php';
           </script>";
  }

  else {
    echo "<script>
            alert('Data mahasiswa gagal diubah!');
            document.location.href = 'edit-data.php';
           </script>";
  }
}

?>
 
<div class="container mt-4">
  <h3>Ubah Data</h3>
  <br>

  <form action="" method="post">
  <div class="row">
    <div class="col-sm">
      <div class="mb-3">
        <label for="id_mhs" class="form-label">NIM : </label>
        <input type="number" class="form-control" id="id_mhs" name="id_mhs" 
        value="<?= $mahasiswa['id_mhs']; ?>" placeholder="" required>
      </div>
    
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Mahasiswa : </label>
        <input type="text" class="form-control" id="nama" name="nama" 
        value="<?= $mahasiswa['nama']; ?>" placeholder="" required>
      </div>

      <div class="mb-3">
        <label for="prodi" class="form-label">Program Studi : </label>
        <select class="form-select" id="prodi" name="prodi" required>
          <?php $prodi = $mahasiswa['prodi']; ?>
          <option value="Ilmu Komputer" <?= $prodi == 'Ilmu Komputer' ? 'selected' : null ?>>Ilmu Komputer</option>
          <option value="Teknologi Informasi" <?= $prodi == 'Teknologi Informasi' ? 'selected' : null ?>>Teknologi Informasi</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="prodi" class="form-label">KOM : </label>
        <select class="form-select" id="kom" name="kom" required>
          <?php $kom = $mahasiswa['kom']; ?>
          <option value="A" <?= $kom == 'A' ? 'selected' : null ?>>A</option>
          <option value="B" <?= $kom == 'B' ? 'selected' : null ?>>B</option>
          <option value="C" <?= $kom == 'B' ? 'selected' : null ?>>C</option>
        </select>
      </div>
    </div>

    <div class="col-sm">
      <div class="mb-3">
        <label for="prodi" class="form-label">Jenis Kelamin : </label>
        <select class="form-select" id="gender" name="gender" required>
          <?php $gender = $mahasiswa['gender']; ?>
          <option value="Perempuan" <?= $gender == 'Perempuan' ? 'selected' : null ?>>Perempuan</option>
          <option value="Laki-laki" <?= $gender == 'Laki-laki' ? 'selected' : null ?>>Laki-laki</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="no_telp" class="form-label">No. Telepon : </label>
        <input type="text" class="form-control" id="no_telp" name="no_telp" 
        value="<?= $mahasiswa['no_telp']; ?>" placeholder="" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">E-mail : </label>
        <input type="text" class="form-control" id="email" name="email" 
        value="<?= $mahasiswa['id_mhs']; ?>" placeholder="" required>
      </div>
    </div>
  </div>

    <button type="submit" name="ubah" class="btn btn-success mt-4" style="float: left;">
        <i class="fa-solid fa-pen-to-square"></i> Ubah
    </button>
    <a href="javascript:window.history.go(-1);" class="btn btn-warning mt-4" style="margin-left: 4pt">
      <i class="fa-solid fa-circle-arrow-left"></i> Kembali
    </a>

  </form>
</div>
  
<?php include 'layout/footer.php'; ?>