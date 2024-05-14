<?php
    require_once "../../auth/config/config.php";
    session_start();

    $id = $_GET['id'];
    mysqli_query($con, "UPDATE transaksi SET Status = 'Completed' WHERE Id=$id");

    $_SESSION["sukses"] = 'Successes';
    header("Location: ../../views/exim/");

    mysqli_close($koneksi);
?>