<?php
require_once "../../auth/config/config.php";

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $transaksi = $_POST['transaksi'];
    $company = $_POST['company'];
    $do = $_POST['nodo'];
    $faktur = $_POST['nofaktur'];
    $status = 'Draft';
    $dodate = $_POST['datedo'];
    $fakturdate = $_POST['datefaktur'];
    $tgl = date("Y-m-d");
    $user = $_SESSION['id'];

    $query = mysqli_query($con, "INSERT INTO transaksi (Id,NoTransaksi,Company,NoDo,NoFaktur,Status,TglDO,TglFaktur,Tgl,User)
    VALUES($id,'$transaksi',$company,'$do','$faktur','$status','$dodate','$fakturdate','$tgl','$user')"
    );

    $dateTime = date("Y-m-d H:i:s");
    $ket = 'Document berhasil di buat';

    $query2 = mysqli_query($con, "INSERT INTO logtransaksi (IdTransaksi,Tgl,User,Ket,Status)
    VALUES($id,'$dateTime',$user,'$ket',1)");

    $query3 = mysqli_query($con, "INSERT INTO logtransaksi (IdTransaksi,Tgl,User,Status)
    VALUES($id,'$dateTime',$user,0)");

      if ($query) {
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../views/vendor/");
      } else {
          header('erorr');
      }



  
}
mysqli_close($koneksi);
?>