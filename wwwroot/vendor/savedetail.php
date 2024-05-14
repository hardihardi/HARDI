<?php
require_once "../../auth/config/config.php";
session_start();

if (isset($_POST['simpan'])) {
    $idtransaksi = $_POST['id'];
    $seri = $_POST['seri'];
    $hs = $_POST['hs'];
    $barang = $_POST['barang'];
    $merk = $_POST['merk'];
    $tipe = $_POST['tipe'];
    $ukuran = $_POST['ukuran'];
    $spesifikasi = $_POST['spesifikasi'];
    $jumlahsatuan = $_POST['jumlahsatuan'];
    $kodesatuan = $_POST['kodesatuan'];
    $jumlahkemasan = $_POST['jumlahkemasan'];
    $kodekemasan = $_POST['kodekemasan'];
    $volume = $_POST['volume'];
    $berat = $_POST['berat'];
    $harga = $_POST['harga'];
    $jasa = $_POST['jasa'];
    $diskon = $_POST['diskon'];
    $ppn = $_POST['ppn'];
    $remarks = $_POST['remarks'];
    $fasilitas = $_POST['fasilitas'];


    $query = mysqli_query($con, "INSERT INTO detailtransaksi (IdTransaksi,seri,hs,barang,merk,tipe,ukuran,spesifikasi,jumlahsatuan,kodesatuan,jumlahkemasan,kodekemasan,volume,berat,harga,jasa,diskon,ppn,ket,fasilitas)
    VALUES($idtransaksi,$seri,$hs,$barang,'$merk','$tipe',$ukuran,'$spesifikasi',$jumlahsatuan,'$kodesatuan',$jumlahkemasan,'$kodekemasan',$volume,$berat,$harga,$jasa,$diskon,$ppn,'$remarks',$fasilitas)"
    );

    $desc='Proses penambahan Detail Barang';
    $dateTime = date("Y-m-d H:i:s");
    $user = $_SESSION['id'];

    $query2 = mysqli_query($con, "UPDATE logtransaksi SET
    Ket ='$desc'
    ,Tgl ='$dateTime'
    ,User =$user
    ,Status =2
    WHERE IdTransaksi=$idtransaksi AND (Status=0 or Status=2)");


    if ($query) {
      $_SESSION["sukses"] = 'Successes';
      header("Location: ../../views/vendor/detail.php?id=".$idtransaksi);
    } else {
        header('erorr');
    }



  
}
mysqli_close($koneksi);
?>