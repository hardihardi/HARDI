<?php
require_once "../../../auth/config/config.php";
session_start();

if (isset($_POST['simpan'])) {
    $code = $_POST['code'];
    $name = $_POST['name'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $company = $_POST['company'];
    $role = $_POST['role'];
    $id = $_POST['id'];

    $query = mysqli_query($con, "UPDATE user SET UserCode ='$code',Name ='$name',Username ='$user',Password ='$pass',Company =$company,Role =$role  WHERE Id=$id");
      if ($query) {
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../../views/administrator/user/");
      } else {
          header('erorr');
      }



  
}
mysqli_close($koneksi);
?>