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
    $query = "SELECT x.IdTransaksi, x.Id,x.seri,x.hs,x.harga,x.kodesatuan,x.merk,x.tipe,x.ukuran,x.spesifikasi,x.jumlahsatuan,x.jumlahkemasan,x.kodekemasan,x.volume,x.berat,x.harga,x.jasa,x.diskon,x.ppn,x.ket,x.fasilitas,y.KodeBarangVendor,y.Nama , y.Id as IdBarang, CONCAT(y.KodeBarang,'-',y.Nama) as FullName,
    CASE 
    WHEN x.ket=3 THEN '3-DTG-DITANGGUHKAN'
    WHEN x.ket=5 THEN '5-BBS-DIBEBASKAN'
    WHEN x.ket=6 THEN '6-TIDAK DIPUNGUT'
    WHEN x.ket=7 THEN '7-SUDAH DILUNASI'
    END as KodeFasilitasName
    FROM `detailtransaksi` x 
    INNER JOIN barang y on x.barang = y.Id
    WHERE x.Id = $id";
    $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        // Mengembalikan data dalam format JSON
        header('Content-Type: application/json');
        echo json_encode($data);
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak valid.";
}

$koneksi->close();
?>
