<?php

$id = $_GET['id'];

// Membuat koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'isaq';

$mysqli = new mysqli($host, $username, $password, $database);

$query = "SELECT namafile, tipe
FROM doctransaksi
WHERE IdTransaksi =$id
AND tipe=5";
$result = $mysqli->query($query);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nama_file = $row['namafile'];
        $tipe = $row['tipe'];
        $pathDoc = '../upload/BC40/';

        $path_file = $pathDoc;
        $namaFile = $nama_file;

        // File yang akan didownload
        $file_path = $path_file . $namaFile;

        if (file_exists($file_path)) {
            header('Content-Type: application/pdf');
            header('Content-Disposition: inline; filename="' . $namaFile . '"');
            header('Content-Transfer-Encoding: binary');
            header('Accept-Ranges: bytes');
            readfile($file_path);
        } else {
            error_log("File tidak ditemukan: " . $file_path);
            echo 'File tidak ditemukan: ' . $file_path;
        }
    }
} else {
    // Jika tidak ada file di database
    echo "Tidak ada file yang ditemukan.$path_file";
}

// Tutup koneksi database
$mysqli->close();

?>
