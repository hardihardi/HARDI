<?php
require_once "../../auth/config/config.php";
session_start();

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $idtransaksi = $_POST['idTransaksi'];
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
    $ket = $_POST['remarks'];
    $fasilitas = $_POST['fasilitas'];


    $query = mysqli_query($con, "UPDATE detailtransaksi SET
    hs =$hs
    ,barang ='$barang'
    ,merk ='$merk'
    ,tipe ='$tipe'
    ,ukuran ='$ukuran'
    ,spesifikasi ='$spesifikasi'
    ,jumlahsatuan ='$jumlahsatuan'
    ,kodesatuan ='$kodesatuan'
    ,jumlahkemasan ='$jumlahkemasan'
    ,kodekemasan ='$kodekemasan'
    ,volume ='$volume'
    ,berat ='$berat'
    ,harga ='$harga'
    ,jasa ='$jasa'
    ,diskon ='$diskon'
    ,ppn ='$ppn'
    ,ket ='$ket'
    ,fasilitas ='$fasilitas'
    WHERE Id=$id");
      if ($query) {
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../views/vendor/detail.php?id=".$idtransaksi);
      } else {
          header('erorr');
      }



  
}
mysqli_close($koneksi);
?>