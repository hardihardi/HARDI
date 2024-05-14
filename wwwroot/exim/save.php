<?php
require_once "../../auth/config/config.php";
session_start();

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $aju = $_POST['aju'];


    $query = mysqli_query($con, "UPDATE transaksi SET aju ='$aju' WHERE Id=$id");

    $query4 = mysqli_query($con, "UPDATE transaksi SET Status='Processing' WHERE Id = '$id'");


      if ($query) {
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../views/exim/");
      } else {
          header('erorr'); 
      }

  
}
mysqli_close($koneksi);
?>