<?php
    require_once "../../../auth/config/config.php";
    session_start();

    $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM barang WHERE id='$id'");

    $_SESSION["sukses"] = 'Successes';
    header("Location: ../../../views/administrator/product/");

    mysqli_close($koneksi);
?>