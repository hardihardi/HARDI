<?php
require_once "../../../auth/config/config.php";
session_start();

if (isset($_POST['simpan'])) {
    $name = $_POST['name'];

    $query = mysqli_query($con, "INSERT INTO role (name)
                                            VALUES('$name')"
                                            );
      if ($query) {
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../../views/administrator/role/");
      } else {
          header('erorr');
      }



  
}
mysqli_close($koneksi);
?>