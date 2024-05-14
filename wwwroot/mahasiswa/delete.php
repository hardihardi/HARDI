<?php
    require_once "../../auth/config/config.php";
    session_start();

    $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM hardi WHERE id='$id'");

    $_SESSION["sukses"] = 'Successes';
    header("Location: ../../views/mahasiswa/");

    mysqli_close($koneksi);
?>