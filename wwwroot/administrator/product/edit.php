<?php
require_once "../../../auth/config/config.php";
session_start();

if (isset($_POST['simpan'])) {
    $code = $_POST['code'];
    $codevendor = $_POST['codevendor'];
    $name = $_POST['nama'];
    $company = $_POST['company'];
    $id = $_POST['id'];

    $query = mysqli_query($con, "UPDATE barang SET KodeBarang ='$code',KodeBarangVendor ='$codevendor',Nama ='$name',Company=$company  WHERE Id=$id");
      if ($query) {
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../../views/administrator/product/");
      } else {
          header('erorr');
      }



  
}
mysqli_close($koneksi);
?>