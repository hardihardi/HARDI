<?php
    require_once "../../auth/config/config.php";
    session_start();

    $id = $_GET['id'];
    $idtransaksi = $_GET['idTrans'];
    mysqli_query($con, "DELETE FROM detailtransaksi WHERE id='$id'");

    $_SESSION["sukses"] = 'Successes';
    header("Location: ../../views/vendor/detail.php?id=".$idtransaksi);

    mysqli_close($koneksi);
?>