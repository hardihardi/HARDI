<?php 
    
    $id = $_GET['id'];

    // Membuat koneksi ke database
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'isaq';

    $mysqli = new mysqli($host, $username, $password, $database);

    // Query untuk sheet pertama
    $query2 = "SELECT NoTransaksi
    FROM transaksi
    WHERE Id =$id";
    $result2 = $mysqli->query($query2);

    $query = "SELECT namafile, tipe
    FROM doctransaksi
    WHERE IdTransaksi =$id";
    $result = $mysqli->query($query);


    if ($result2) {
        // Periksa apakah hasil query menghasilkan baris
        if ($result2->num_rows > 0) {
            // Ambil hasil query sebagai array asosiatif
            $row2 = $result2->fetch_assoc();
    
            // Ambil nilai NoTransaksi dari array
            $noTransaksi = $row2['NoTransaksi'];
    
            // Gunakan nilai NoTransaksi sesuai kebutuhan
            echo "Nomor Transaksi: " . $noTransaksi;
        } else {
            echo "Tidak ada baris yang cocok dengan query.";
        }
    
        // Selalu bebaskan hasil query setelah digunakan
        $result2->free();
    } else {
        echo "Error dalam menjalankan query: " . $mysqli->error;
    }



    $zip = new ZipArchive();
    $zipFileName = $noTransaksi.".zip";
    $path = "../upload/";

    if ($zip->open($zipFileName, ZipArchive::CREATE) === true) {

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $nama_file = $row['namafile'];
                $tipe = $row['tipe'];

                if($tipe == 1){
                    $pathDoc = 'DeliveryOrder/';
                }
                else if($tipe == 2){
                    $pathDoc = 'PackingList/';
                }
                else if($tipe == 3){
                    $pathDoc = 'Invoice/';
                }
                elseif($tipe == 4){
                    $pathDoc = 'Pajak/';
                }

                $path_file = $path.$pathDoc;
                $namaFile = $nama_file.".pdf";
                // echo $path_file;
                //echo $namaFile;

                // Tambahkan file ke dalam zip
                if (file_exists($path_file . $namaFile)) {
                    $zip->addFile($path_file . $namaFile, $namaFile);
                    echo 'File berhasil ditambahkan ke dalam zip';
                } else {
                    error_log("File tidak ditemukan: " . $path_file . $namaFile);
                    echo 'Gagal menambahkan file ke dalam zip'. $path_file . $namaFile;
                }
            }
        } else {
            // Jika tidak ada file di database
            echo "Tidak ada file yang ditemukan.$path_file";
        }

        // Tutup zip file
        $zip->close();

        // Set header untuk zip
        header('Content-Type: application/zip');
        header('Content-disposition: attachment; filename=' . $zipFileName);
        header('Content-Length: ' . filesize($zipFileName));
        header('Content-Transfer-Encoding: binary');

        ob_clean();

        // Baca file zip dan kirimkan ke pengguna
        readfile($zipFileName);

        // Hapus file zip setelah diunduh
        unlink($zipFileName);

    } else {
        echo "Gagal membuat file zip.";
    }

// Tutup koneksi database
$mysqli->close();

?>