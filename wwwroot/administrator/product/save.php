<?php
require_once "../../../auth/config/config.php";
session_start();

if (isset($_POST['simpan'])) {
    $code = $_POST['code'];
    $codevendor = $_POST['codevendor'];
    $name = $_POST['name'];
    $company = $_POST['company'];


    $query = mysqli_query($con, "INSERT INTO barang (KodeBarang,KodeBarangVendor,Nama,Company)
                                            VALUES('$code','$codevendor','$name',$company)"
                                            );
      if ($query) {
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../../views/administrator/product/");
      } else {
          header('erorr');
      }



  
}
mysqli_close($koneksi);
?>