<?php

//fungsi menampilkan
function select($query)
{
    //panggil koneksi database
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

//fungsi menambahkan data mahasiswa
function create_data($post)
{
    global $db;

    $id_mhs = $post['id_mhs'];
    $nama = $post['nama'];  
    $prodi = $post['prodi'];
    $kom = $post['kom'];
    $gender = $post['gender'];
    $no_telp = $post['no_telp'];
    $email = $post['email'];

    //query tambah data
    $query = "INSERT INTO mahasiswa VALUES('$id_mhs', '$nama', '$prodi', '$kom', '$gender', '$no_telp', '$email')";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//fungsi mengubah data mahasiswa
function update_data($post)
{
    global $db;

    $id_mhs = $post['id_mhs'];
    $nama = $post['nama'];  
    $prodi = $post['prodi'];
    $kom = $post['kom'];
    $gender = $post['gender'];
    $no_telp = $post['no_telp'];
    $email = $post['email'];

    //query ubah data
    $query = "UPDATE mahasiswa SET id_mhs = '$id_mhs', nama = '$nama', prodi = '$prodi', kom = '$kom', 
    gender = '$gender', no_telp = '$no_telp', email = '$email'
    WHERE id_mhs = $id_mhs";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

//fungsi menghapus data mahasiswa
function delete_data($id_mhs)
{
    global $db;

    //query hapus data mahasiswa
    $query = "DELETE FROM mahasiswa WHERE id_mhs = $id_mhs";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
?>