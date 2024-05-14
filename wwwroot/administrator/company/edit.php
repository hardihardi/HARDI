<?php
require_once "../../../auth/config/config.php";
session_start();

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $code = $_POST['code'];
    $name = $_POST['name'];
    $npwp = $_POST['npwp'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($con, "UPDATE company SET Code ='$code',Name ='$name',NPWP='$npwp',email='$email',Telpon='$telp',alamat='$alamat'  WHERE Id=$id");
      if ($query) {
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../../views/administrator/company/");
      } else {
          header('erorr');
      }



  
}
mysqli_close($koneksi);
?>