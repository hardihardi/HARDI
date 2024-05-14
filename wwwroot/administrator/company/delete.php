<?php
    require_once "../../../auth/config/config.php";
    session_start();

    $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM company WHERE id='$id'");

    $_SESSION["sukses"] = 'Successes';
    header("Location: ../../../views/administrator/company/");

    mysqli_close($koneksi);
?>