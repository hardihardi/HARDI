<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "isaq");

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil ID yang dikirimkan melalui parameter GET
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id > 0) {
    // Query SELECT dengan WHERE berdasarkan ID
    $query = "SELECT x.Id, x.IdTransaksi, y.NoTransaksi, x.Ket,x.Tgl,z.FullName FROM `logtransaksi` x 
    INNER JOIN transaksi y on x.IdTransaksi = y.Id
    INNER JOIN User z on x.User = z.Id
    WHERE x.IdTransaksi = $id AND x.Status <> 0";
    $result = $koneksi->query($query);
    
    if ($result->num_rows > 0) {
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = (object) $row; // Mengubah setiap baris menjadi objek
        }
        //$data = $result->fetch_assoc();

        // Mengembalikan data dalam format JSON
        echo json_encode($data);
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak valid.";
}

$koneksi->close();
?>
