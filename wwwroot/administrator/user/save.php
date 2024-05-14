<?php
require_once "../../../auth/config/config.php";
session_start();

if (isset($_POST['simpan'])) {
    $name = $_POST['name'];
    $code = $_POST['code'];
    $company = $_POST['company'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $role = $_POST['role'];

    $query = mysqli_query($con, "INSERT INTO user (UserCode,FullName,Company,Username,Password,Role)
                                            VALUES('$code','$name',$company,'$user','$pass',$role)"
                                            );
      if ($query) {
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../../views/administrator/user/");
      } else {
          header('erorr');
      }



  
}
mysqli_close($koneksi);
?>