<?php

$title = 'Tambah Data';
include 'layout/header.php'; 

//cek apakah tombol tambah ditekan
if (isset($_POST['tambah'])) {
  if (create_data($_POST) > 0) {
    echo "<script>
            alert('Data mahasiswa berhasil ditambahkan!');
            document.location.href = 'data-mahasiswa.php';
           </script>";
  }

  else {
    echo "<script>
            alert('Data mahasiswa gagal ditambahkan!');
            document.location.href = 'data-mahasiswa.php';
           </script>";
  }
}

?>
 
<div class="container mt-4">
  <h3>Tambah Data</h3>
  <br>

  <form action="" method="post">
  <div class="row">
      <div class="col-sm">
        <div class="mb-3">
          <label for="id_mhs" class="form-label">NIM : </label>
          <input type="number" class="form-control" id="id_mhs" name="id_mhs" style="width:40%" placeholder=""  required>
        </div>
      
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Mahasiswa : </label>
          <input type="text" class="form-control" id="nama" name="nama" style="width: 50%" placeholder="" required>
        </div>

        <div class="mb-3">
          <label for="prodi" class="form-label">Program Studi : </label>
          <select class="form-select" id="prodi" name="prodi" style="width: 40%" required>
            <option selected value="">--</option>
            <option value="Ilmu Komputer">Ilmu Komputer</option>
            <option value="Teknologi Informasi">Teknologi Informasi</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="kom" class="form-label">KOM : </label>
          <select class="form-select" id="kom" name="kom" style="width: 20%" required>
            <option selected value="">--</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="B">C</option>

          </select>
        </div>
      </div>

      <div class="col-sm">
        <div class="mb-3">
          <label for="gender" class="form-label">Jenis Kelamin : </label>
          <select class="form-select" id="gender" name="gender" style="width: 40%" required>
            <option selected value="">--</option>
            <option value="Perempuan">Perempuan</option>
            <option value="Laki-laki">Laki-laki</option>
          </select>
        </div>
        
        <div class="mb-3">
          <label for="no_telp" class="form-label">No. Telepon : </label>
          <input type="text" class="form-control" id="no_telp" name="no_telp" style="width: 40%" placeholder=""  required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">E-mail : </label>
          <input type="text" class="form-control" id="email" name="email" style="width: 50%" placeholder=""  required>
        </div>
      </div>
  </div>

    <button type="submit" name="tambah" class="btn btn-success mt-4" style="float: left;">
      <i class="fa-solid fa-plus"></i> Tambah
    </button>

  </form>

  <a href="javascript:window.history.go(-1);" class="btn btn-warning mt-4" style="margin-left: 4pt">
      <i class="fa-solid fa-circle-arrow-left"></i> Kembali
  </a>
</div>
  
<?php include 'layout/footer.php'; ?>