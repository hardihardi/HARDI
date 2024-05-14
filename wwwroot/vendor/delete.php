<?php
    require_once "../../auth/config/config.php";
    session_start();

    $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM transaksi WHERE id='$id'");

    mysqli_query($con, "DELETE FROM detailtransaksi WHERE IdTransaksi='$id'");
    
    mysqli_query($con, "DELETE FROM doctransaksi WHERE IdTransaksi='$id'");

    mysqli_query($con, "DELETE FROM logtransaksi WHERE IdTransaksi='$id'");

    $_SESSION["sukses"] = 'Successes';
    header("Location: ../../views/vendor/");

    mysqli_close($koneksi);
?>