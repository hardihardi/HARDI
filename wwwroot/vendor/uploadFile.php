<?php
require_once "../../auth/config/config.php";
session_start();

if (isset($_POST['upload'])) {
    $data = mysqli_query($con,"select max(Id) as kode from doctransaksi");
    while($d = mysqli_fetch_array($data)){
        $kode = $d['kode'];
        $urutan = intval($kode);
        $urutan++;
    }
    
    $idtransaksi = $_POST['id'];
    $tipe = $_POST['tipe'];
    $tgl = date("Ymd");

    if($tipe == 1){
        $uploadDir = '../upload/DeliveryOrder/';
        $kode = 'DO';
        $ket = 'File Delivery Order sudah di tambahkan';
    }
    else if($tipe == 2){
        $uploadDir = '../upload/PackingList/';
        $kode = 'PL';
        $ket = 'File Packing List sudah di tambahkan';
    }
    else if($tipe == 3){
        $uploadDir = '../upload/Invoice/';
        $kode = 'INV';
        $ket = 'File Invoice sudah di tambahkan';
    }
    elseif($tipe == 4){
        $uploadDir = '../upload/Pajak/';
        $kode = 'DFP';
        $ket = 'File Daftar Faktur Pajak sudah di tambahkan';
    }

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

    

    $data = mysqli_query($con,"SELECT COUNT(*) as count FROM logtransaksi 
    WHERE IdTransaksi = $idtransaksi");
    while($d = mysqli_fetch_array($data)){
        $countFile = $d['count'];
    }

    $dateTime = date("Y-m-d H:i:s");
    $user = $_SESSION['id'];
    $no = 1;

    if($countFile ==2){

        $query2 = mysqli_query($con, "INSERT INTO logtransaksi (IdTransaksi,Tgl,User,Ket,Status)
        VALUES($idtransaksi,'$dateTime',$user,'Detail Barang Selesai di tambahkan',1)"
        );

    }
    else if($countFile ==6){
        $query4 = mysqli_query($con, "UPDATE transaksi SET Status='Ready To Process' WHERE Id = '$idtransaksi'"
        );
    }

    $query3 = mysqli_query($con, "INSERT INTO logtransaksi (IdTransaksi,Tgl,User,Ket,Status)
    VALUES($idtransaksi,'$dateTime',$user,'$ket',1)"
    );
                    

      if ($query) {
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../views/vendor/");
      } else {
          header('erorr');
      }
  
}
mysqli_close($koneksi);
?>