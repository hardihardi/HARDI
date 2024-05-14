<?php
require '../../vendor/autoload.php'; // Mengimpor PHPSpreadsheet
require_once "../../auth/config/config.php";

use PhpOffice\PhpSpreadsheet\IOFactory;
$id = $_POST['id'];
if (isset($_POST['upload'])) {
    $file = $_FILES['excel_file']['tmp_name'];
    
    if (empty($file)) {
        echo "Silakan pilih file Excel untuk diunggah.";
    } else {
        // Membaca file Excel
        $spreadsheet = IOFactory::load($file);
        $worksheet = $spreadsheet->getActiveSheet();
        
        $data = [];
        foreach ($worksheet->getRowIterator() as $row) {
            $rowData = [];
            $cellIterator = $row->getCellIterator();
            foreach ($cellIterator as $cell) {
                $rowData[] = $cell->getValue();
            }
            $data[] = $rowData;
        }

        mysqli_query($con, "DELETE FROM detailtransaksi WHERE IdTransaksi=$id");
        
        $desc='Proses penambahan Detail Barang';
        $dateTime = date("Y-m-d H:i:s");
        $user = $_SESSION['id'];

        $query2 = mysqli_query($con, "UPDATE logtransaksi SET
        Ket ='$desc'
        ,Tgl ='$dateTime'
        ,User =$user
        ,Status =2
        WHERE IdTransaksi=$id AND (Status=0 or Status=2)");

        $koneksi = new mysqli('localhost', 'root', '', 'isaq');
        foreach (array_slice($data, 1) as $rowData) { // array_slice untuk melewatkan baris pertama (judul)
            $kolom1 = $rowData[0];
            $kolom2 = $rowData[1];
            $kolom3 = $rowData[2];
            $kolom4 = $rowData[3];
            $kolom5 = $rowData[4];
            $kolom6 = $rowData[5];
            $kolom7 = $rowData[6];
            $kolom8 = $rowData[7];
            $kolom9 = $rowData[8];
            $kolom10 = $rowData[9];
            $kolom11 = $rowData[10];
            $kolom12 = $rowData[11];
            $kolom13 = $rowData[12];
            $kolom14 = $rowData[13];
            $kolom15 = $rowData[14];
            $kolom16 = $rowData[15];
            $kolom17 = $rowData[16];
            $kolom18 = $rowData[17];
            $kolom19 = $rowData[18];

            $barang = "SELECT Id FROM `barang` WHERE KodeBarangVendor='$kolom3'";
            $idBarang = $koneksi->query($barang);
            $idProduct =0;
            if ($idBarang) {
                // Mengambil data dari objek mysqli_result
                while ($row = $idBarang->fetch_assoc()) {
                    
                    $idProduct = $row['Id'];
                }
                $idBarang->free(); // Selalu jangan lupa melepaskan hasil query setelah digunakan.
            } else {
                echo "Kesalahan dalam menjalankan query: " . $koneksi->error;
            }
            // Lakukan operasi penyimpanan ke database
            $sql = "INSERT INTO `detailtransaksi` (`IdTransaksi`, `seri`, `hs`, `barang`, `merk`, `tipe`, `ukuran`, `spesifikasi`, `jumlahsatuan`, `kodesatuan`, `jumlahkemasan`, `kodekemasan`, `volume`, `berat`, `harga`, `jasa`, `diskon`, `ppn`, `ket`, `fasilitas`) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?,?, ?, ?, ?,?, ?, ?, ?)";
            $stmt = $koneksi->prepare($sql);
            $stmt->bind_param("ssssssssssssssssssss",$id, $kolom1, $kolom2, $idProduct,$kolom4,$kolom5,$kolom6,$kolom7,$kolom8,$kolom9,$kolom10,$kolom11,$kolom12,$kolom13,$kolom14,$kolom15,$kolom16,$kolom17,$kolom18,$kolom19 );
            $stmt->execute();
        }
        
        $_SESSION["sukses"] = 'Successes';
        header("Location: ../../views/vendor/detail.php?id=".$id);
    }
}
?>
