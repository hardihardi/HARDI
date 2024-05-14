<?php
require_once "../../auth/config/config.php";

if (isset($_POST['simpan'])) {
    $idtransaksi = $_POST['id'];
    $tipe = 5;
    $tgl = date("Ymd");


    $data = mysqli_query($con,"select max(Id) as kode from doctransaksi");
    while($d = mysqli_fetch_array($data)){
        $kode = $d['kode'];
        $urutan = intval($kode);
        $urutan++;
    }

    $uploadDir = '../upload/BC40/';
    $kode = 'BC';
    $ket = 'File BC 4.0 sudah di tambahkan';

    $pdfName = $_FILES['pdfFile']['name'];
    $pdfTempName = $_FILES['pdfFile']['tmp_name'];
    $fileName = $kode.sprintf("-%03s",  $idtransaksi).'-'.$tgl.sprintf("-%03s",  $urutan).".pdf";


    $targetPath = $uploadDir . $fileName;
    if (move_uploaded_file($pdfTempName, $targetPath)) {
        echo "Berkas PDF berhasil diunggah dan disimpan di $targetPath";
    } else {
        echo "Gagal mengunggah berkas.";
    }

    $query = mysqli_query($con, "INSERT INTO doctransaksi (idtransaksi,tipe,namafile,originnamefile,IsUpload)
        VALUES($idtransaksi,$tipe,'$fileName','$pdfName',1)"
    );

    $dateTime = date("Y-m-d H:i:s");
    $user = $_SESSION['id'];
    $no = 1;

    $query3 = mysqli_query($con, "INSERT INTO logtransaksi (IdTransaksi,Tgl,User,Ket,Status)
    VALUES($idtransaksi,'$dateTime',$user,'$ket',1)");

    $query4 = mysqli_query($con, "UPDATE transaksi SET Status='Ready To Posting' WHERE Id = '$idtransaksi'");

    if ($query) {
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../views/exim/");
    } else {
        header('erorr');
    }

  
}
mysqli_close($koneksi);
?>