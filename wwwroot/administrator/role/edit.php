<?php
require_once "../../../auth/config/config.php";
session_start();

if (isset($_POST['simpan'])) {
    $name = $_POST['name'];
    $id = $_POST['id'];

    $query = mysqli_query($con, "UPDATE role SET name ='$name'  WHERE Id=$id");
      if ($query) {
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../../views/administrator/role/");
      } else {
          header('erorr');
      }



  
}
mysqli_close($koneksi);
?>