<?php
require_once "../../auth/config/config.php";
session_start();

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $name = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $tgl = $_POST['tgl'];
    $tempat = $_POST['tempat'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $nim = $_POST['nim'];
    $newFileName = $_FILES['foto']['name'];

    // Upload the new photo
    $uploadDirectory = '../upload/mahasiswa/';
    $newFilePath = $uploadDirectory . $newFileName;
    move_uploaded_file($_FILES['foto']['tmp_name'], $newFilePath);

    if (!empty($newFileName)) {
      $query = mysqli_query($con, "UPDATE hardi SET nim ='$nim',nama ='$name',jurusan ='$jurusan',tanggal_lahir ='$tgl',tempat_lahir ='$tempat',alamat ='$alamat',no_telepon ='$telp',email ='$email',jenis_kelamin ='$jk',agama ='$agama', foto = '$newFileName' WHERE id=$id");
      if ($query) {
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../views/mahasiswa/");
      } else {
          header('erorr');
      }
    }else{
      $query = mysqli_query($con, "UPDATE hardi SET nim ='$nim',nama ='$name',jurusan ='$jurusan',tanggal_lahir ='$tgl',tempat_lahir ='$tempat',alamat ='$alamat',no_telepon ='$telp',email ='$email',jenis_kelamin ='$jk',agama ='$agama' WHERE id=$id");
      if ($query) {
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../views/mahasiswa/");
      } else {
          header('erorr');
      }
    }

    



  
}
mysqli_close($koneksi);
?>