<?php
require_once "../../../auth/config/config.php";
session_start();

if (isset($_POST['simpan'])) {
  $transaksi = $_POST['transaksi'];
  $company = $_POST['company'];
  $tgl = date("Y-m-d");
  $user = $_SESSION['id'];

    $query = mysqli_query($con, "UPDATE transaksi SET NoTransaksi ='$transaksi',Company =$company,Tgl ='$tgl',User ='$user' WHERE Id=$id");
      if ($query) {
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../views/vendor/");
      } else {
          header('erorr');
      }



  
}
mysqli_close($koneksi);
?>