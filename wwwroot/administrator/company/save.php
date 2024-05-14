<?php
require_once "../../../auth/config/config.php";
session_start();

if (isset($_POST['simpan'])) {
    $code = $_POST['code'];
    $name = $_POST['name'];
    $npwp = $_POST['npwp'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($con, "INSERT INTO company (Code,Name,NPWP,email,Telpon,alamat) 
    VALUES('$code','$name','$npwp','$email','$telp','$alamat')"
                                            );
      if ($query) {
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../../views/administrator/company/");
      } else {
          header('erorr');
      }



  
}
mysqli_close($koneksi);
?>