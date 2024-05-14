<?php
require '../../vendor/autoload.php'; // Mengimpor PHPSpreadsheet

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$id = $_GET['id'];
// Membuat objek Spreadsheet
$spreadsheet = new Spreadsheet();

// Membuat sheet pertama
$worksheet1 = $spreadsheet->getActiveSheet();
$worksheet1->setTitle('BARANG');

// Membuat sheet kedua
$worksheet2 = $spreadsheet->createSheet();
$worksheet2->setTitle('BARANGTARIF');

$worksheet1->setCellValue('A1', 'NOMOR AJU');
$worksheet1->setCellValue('B1', 'SERI BARANG');
$worksheet1->setCellValue('C1', 'HS');
$worksheet1->setCellValue('D1', 'KODE BARANG');
$worksheet1->setCellValue('E1', 'URAIAN');
$worksheet1->setCellValue('F1', 'MEREK');
$worksheet1->setCellValue('G1', 'TIPE');
$worksheet1->setCellValue('H1', 'UKURAN');
$worksheet1->setCellValue('I1', 'SPESIFIKASI LAIN');
$worksheet1->setCellValue('J1', 'KODE SATUAN');
$worksheet1->setCellValue('K1', 'JUMLAH SATUAN');
$worksheet1->setCellValue('L1', 'KODE KEMASAN');
$worksheet1->setCellValue('M1', 'JUMLAH KEMASAN');
$worksheet1->setCellValue('N1', 'KODE DOKUMEN ASAL');
$worksheet1->setCellValue('O1', 'KODE KANTOR ASAL');
$worksheet1->setCellValue('P1', 'NOMOR DAFTAR ASAL');
$worksheet1->setCellValue('Q1', 'TANGGAL DAFTAR ASAL');
$worksheet1->setCellValue('R1', 'NOMOR AJU ASAL');
$worksheet1->setCellValue('S1', 'SERI BARANG ASAL');
$worksheet1->setCellValue('T1', 'NETTO');
$worksheet1->setCellValue('U1', 'BRUTO');
$worksheet1->setCellValue('V1', 'VOLUME');
$worksheet1->setCellValue('W1', 'SALDO AWAL');
$worksheet1->setCellValue('X1', 'SALDO AKHIR');
$worksheet1->setCellValue('Y1', 'JUMLAH REALISASI');
$worksheet1->setCellValue('Z1', 'CIF');
$worksheet1->setCellValue('AA1', 'CIF RUPIAH');
$worksheet1->setCellValue('AB1', 'NDPBM');
$worksheet1->setCellValue('AC1', 'FOB');
$worksheet1->setCellValue('AD1', 'ASURANSI');
$worksheet1->setCellValue('AE1', 'FREIGHT');
$worksheet1->setCellValue('AF1', 'NILAI TAMBAH');
$worksheet1->setCellValue('AG1', 'DISKON');
$worksheet1->setCellValue('AH1', 'HARGA PENYERAHAN');
$worksheet1->setCellValue('AI1', 'HARGA PEROLEHAN');
$worksheet1->setCellValue('AJ1', 'HARGA SATUAN');
$worksheet1->setCellValue('AK1', 'HARGA EKSPOR');
$worksheet1->setCellValue('AL1', 'HARGA PATOKAN');
$worksheet1->setCellValue('AM1', 'NILAI BARANG');
$worksheet1->setCellValue('AN1', 'NILAI JASA');
$worksheet1->setCellValue('AO1', 'NILAI DANA SAWIT');
$worksheet1->setCellValue('AP1', 'NILAI DEVISA');
$worksheet1->setCellValue('AQ1', 'PERSENTASE IMPOR');
$worksheet1->setCellValue('AR1', 'KODE ASAL BARANG');
$worksheet1->setCellValue('AS1', 'KODE DAERAH ASAL');
$worksheet1->setCellValue('AT1', 'KODE GUNA BARANG');
$worksheet1->setCellValue('AU1', 'KODE JENIS NILAI');
$worksheet1->setCellValue('AV1', 'JATUH TEMPO ROYALTI');
$worksheet1->setCellValue('AW1', 'KODE KATEGORI BARANG');
$worksheet1->setCellValue('AX1', 'KODE KONDISI BARANG');
$worksheet1->setCellValue('AY1', 'KODE NEGARA ASAL');
$worksheet1->setCellValue('AZ1', 'KODE PERHITUNGAN');
$worksheet1->setCellValue('BA1', 'PERNYATAAN LARTAS');
$worksheet1->setCellValue('BB1', 'FLAG 4 TAHUN');
$worksheet1->setCellValue('BC1', 'SERI IZIN');
$worksheet1->setCellValue('BD1', 'TAHUN PEMBUATAN');
$worksheet1->setCellValue('BE1', 'KAPASITAS SILINDER');
$worksheet1->setCellValue('BF1', 'KODE BKC');
$worksheet1->setCellValue('BG1', 'KODE KOMODITI BKC');
$worksheet1->setCellValue('BH1', 'KODE SUB KOMODITI BKC');
$worksheet1->setCellValue('BI1', 'FLAG TIS');
$worksheet1->setCellValue('BJ1', 'ISI PER KEMASAN');
$worksheet1->setCellValue('BK1', 'JUMLAH DILEKATKAN');
$worksheet1->setCellValue('BL1', 'JUMLAH PITA CUKAI');
$worksheet1->setCellValue('BM1', 'HJE CUKAI');
$worksheet1->setCellValue('BN1', 'TARIF CUKAI');

$worksheet2->setCellValue('A1', 'NOMOR AJU');
$worksheet2->setCellValue('B1', 'SERI BARANG');
$worksheet2->setCellValue('C1', 'KODE PUNGUTAN');
$worksheet2->setCellValue('D1', 'KODE TARIF');
$worksheet2->setCellValue('E1', 'TARIF');
$worksheet2->setCellValue('F1', 'KODE FASILITAS');
$worksheet2->setCellValue('G1', 'TARIF FASILITAS');
$worksheet2->setCellValue('H1', 'NILAI BAYAR');
$worksheet2->setCellValue('I1', 'NILAI FASILITAS');
$worksheet2->setCellValue('J1', 'NILAI SUDAH DILUNASI');
$worksheet2->setCellValue('K1', 'KODE SATUAN');
$worksheet2->setCellValue('L1', 'JUMLAH SATUAN');
$worksheet2->setCellValue('M1', 'FLAG BMT SEMENTARA');
$worksheet2->setCellValue('N1', 'KODE KOMODITI CUKAI');
$worksheet2->setCellValue('O1', 'KODE SUB KOMODITI CUKAI');
$worksheet2->setCellValue('P1', 'FLAG TIS');
$worksheet2->setCellValue('Q1', 'FLAG PELEKATAN');
$worksheet2->setCellValue('R1', 'KODE KEMASAN');
$worksheet2->setCellValue('S1', 'JUMLAH KEMASAN');

// Mengatur gaya teks menjadi bold
$boldFontStyle = [
    'font' => ['bold' => true],
];

$worksheet1->getStyle('A1:BN1')->applyFromArray($boldFontStyle);
$worksheet2->getStyle('A1:S1')->applyFromArray($boldFontStyle);

// Membuat koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'isaq';

$mysqli = new mysqli($host, $username, $password, $database);

// // Periksa koneksi
// if ($mysqli->connect_error) {
//     die('Koneksi ke database gagal: ' . $mysqli->connect_error);
// }

// Query untuk sheet pertama
$querySheet1 = "SELECT y.aju as 'NOMOR AJU'
,x.seri as 'SERI BARANG' 
,x.hs as HS
,b.KodeBarangVendor as 'KODE BARANG'
,b.Nama as URAIAN
,x.merk as MEREK
,x.tipe as TIPE 
,x.ukuran as UKURAN
,x.spesifikasi as 'SPESIFIKASI LAIN'
,x.kodesatuan as 'KODE SATUAN'
,x.jumlahsatuan as 'JUMLAH SATUAN'
,x.kodekemasan as 'KODE KEMASAN'
,x.jumlahkemasan as 'JUMLAH KEMASAN'
,'' as'KODE DOKUMEN ASAL'
,'' as'KODE KANTOR ASAL'
,'' as'MONOR DAFTAR ASAL'
,'' as'TANGGAL DAFTAR ASAL'
,'' as'NOMOR AJU ASAL'
,'' as'SERI BARANG ASAL'
,x.berat as NETTO
,'' as 'BRUTO'
,x.volume as 'VOLUME'
,'' as'SALDO AWAL'
,'' as'SALDO AKHIR'
,'' as'JUMLAH REALISASI'
,0 as CIF
,0 as 'CIF RUPIAH'
,0 as NDPBM
,0 as FOB
,'' as 'ASURANSI'
,'' as 'FREIGHT'
,'' as 'NILAI TAMBAH'
,x.diskon as DISKON
,x.harga as 'HARGA PENYERAHAN'
,0 as 'HARGA PEROLEHAN'
,'' as 'HARGA SATUAN'
,0 as 'HARGA EKSPOR'
,'' as 'HARGA PATOKAN'
,0 as 'NILAI BARANG'
,x.jasa as 'NILAI JASA'
,'' as 'NILAI DANA SAWIT'
,'' as 'NILAI DEVISA'
,'' as 'PRESENTASE IMPOR'
,'' as 'KODE ASAL BARANG'
,'' as 'KODE DAERAH ASAL'
,'' as 'KODE GUNA BARANG'
,'' as 'KODE JENIS NILAI'
,'' as 'JATUH TEMPO ROYALTI'
,'' as 'KODE KATEGORI BARANG'
,'' as 'KODE KONDISI BARANG'
,'' as 'KODE NEGARA ASAL'
,'' as 'KODE PERHITUNGAN'
,'' as 'PERNYATAAN LARTAS'
,'' as 'FLAG 4 TAHUN'
,'' as 'SERI IZIN'
,'' as 'TAHUN PEMBUATAN'
,'' as 'KAPASITAS SILINDER'
,'' as 'KODE BKC'
,'' as 'KODE KOMODITI BKC'
,'' as 'KODE SUB KOMODITI BKC'
,'' as 'FLAG TIS'
,'' as 'ISI PER KEMASAN'
,'' as 'JUMLAH DILEKATKAN'
,'' as 'JUMLAH PITA CUKAI'
,'' as 'HJE CUKAI'
,'' as 'TARIF CUKAI'


FROM detailtransaksi x 
INNER JOIN transaksi y on x.IdTransaksi = y.Id
INNER JOIN barang b on x.barang = b.Id
WHERE x.IdTransaksi =$id";
$resultSheet1 = $mysqli->query($querySheet1);

// Query untuk sheet kedua
$querySheet2 = "SELECT y.aju as 'NOMOR AJU'
,x.seri as 'SERI BARANG'
,'PPN' as 'KODE PUNGUTAN'
,1 as 'KODE TARIF'
,x.ppn as 'TARIF'
,x.ket as 'KODE FASILITAS'
,x.fasilitas as 'TARIF FASILITAS'
,0 as 'NILAI BAYAR'
,((x.harga * 100) / x.ppn) as 'NILAI FASILITAS'
,'' as 'NILAI SUDAH LUNAS'
,x.kodesatuan as 'KODE SATUAN'
,x.jumlahsatuan as 'JUMLAH SATUAN'
,'' as 'KFLAG BMT SEMENTARA'
,'' as 'KODE KOMODITI CUKAI'
,'' as 'KODE SUB KOMODITI CUKAI'
,'' as 'FLAG TIS'
,'' as 'FLAG PELEKATAN'
,'' as 'KODE KEMASAN'
,'' as 'JUMLAH KEMASAN'
FROM detailtransaksi x 
INNER JOIN transaksi y on x.IdTransaksi = y.Id
INNER JOIN barang b on x.barang = b.Id
WHERE x.IdTransaksi =$id";
$resultSheet2 = $mysqli->query($querySheet2);

// Menulis data ke sheet pertama

// foreach ($resultSheet1 as $rowIndex => $row) {
//     foreach ($row as $colIndex => $value) {
//         $worksheet1->setCellValueByColumnAndRow($colIndex + 1, $rowIndex + 2, $value); // Mulai dari baris kedua
//     }
// }

$rowIndex = 2;
while ($row = $resultSheet1->fetch_assoc()) {
    $colIndex = 1;
    foreach ($row as $value) {
        $worksheet1->setCellValueByColumnAndRow($colIndex, $rowIndex, $value);
        $colIndex++;
    }
    $rowIndex++;
}

// foreach ($resultSheet2 as $rowIndex => $row) {
//     foreach ($row as $colIndex => $value) {
//         $worksheet2->setCellValueByColumnAndRow($colIndex + 1, $rowIndex + 2, $value); // Mulai dari baris kedua
//     }
// }

//Menulis data ke sheet kedua
$rowIndex = 2;
while ($row = $resultSheet2->fetch_assoc()) {
    $colIndex = 1;
    foreach ($row as $value) {
        $worksheet2->setCellValueByColumnAndRow($colIndex, $rowIndex, $value);
        $colIndex++;
    }
    $rowIndex++;
}

// Membuat objek Writer
$writer = new Xlsx($spreadsheet);

// Header untuk mengunduh file Excel
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="data.xlsx"');
header('Cache-Control: max-age=0');

// Menyimpan file Excel ke output
$writer->save('php://output');

// Tutup koneksi ke database
$mysqli->close();
