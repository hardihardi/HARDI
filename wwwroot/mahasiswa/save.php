<?php
require_once "../../auth/config/config.php";
session_start();

if (isset($_POST['simpan'])) {
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

    $query = mysqli_query($con, "INSERT INTO hardi (nim, nama, jurusan, tanggal_lahir, tempat_lahir, alamat, email, no_telepon, jenis_kelamin, agama, foto)
                                            VALUES('$nim','$name','$jurusan','$tgl','$tempat','$alamat','$email','$telp','$jk','$agama','$newFileName')"
                                            );
      if ($query) {
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../views/mahasiswa/");
      } else {
          header('erorr');
      }



  
}
mysqli_close($koneksi);
?>