<?php
// ...

if (isset($_POST['simpan'])) {
    $month = $_POST['month'];
    $company = $_POST['company'];
    $role = $_POST['role'];

    $monthName = date('F', mktime(0, 0, 0, $month, 1));

    // Membuat koneksi ke database
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'isaq';

    $mysqli = new mysqli($host, $username, $password, $database);

    if ( $role != "Vendor") {
        // Mengambil data dari database
        $data = mysqli_query($mysqli, "SELECT 
        x.Id,
        x.NoTransaksi,
        c.Name,
        x.AJU,
        MONTH(x.Tgl) bulan,
        MONTHNAME(x.Tgl) as NamaBulan,
        SUM(y.jumlahsatuan) as Qty,
        SUM(y.harga) as Harga
        FROM 
        `transaksi` x
        INNER JOIN detailtransaksi y ON x.Id = y.IdTransaksi
        INNER JOIN Company c ON x.Company = c.Id
        WHERE MONTH(x.Tgl) = $month
        GROUP BY 
        x.Id, x.NoTransaksi, c.Name, x.AJU, bulan, NamaBulan");

    } else {

        // Mengambil data dari database
        $data = mysqli_query($mysqli, "SELECT 
        x.Id,
        x.NoTransaksi,
        c.Name,
        x.AJU,
        c.Id,
        MONTH(x.Tgl) bulan,
        MONTHNAME(x.Tgl) as NamaBulan,
        SUM(y.jumlahsatuan) as Qty,
        SUM(y.harga) as Harga
        FROM 
            `transaksi` x
        INNER JOIN detailtransaksi y ON x.Id = y.IdTransaksi
        INNER JOIN Company c ON x.Company = c.Id
        WHERE MONTH(x.Tgl) = $month
        AND c.Id = $company
        GROUP BY 
            x.Id, x.NoTransaksi, c.Name, x.AJU, bulan, NamaBulan, c.Id");
        
    }

    // Load library TCPDF
    require_once('../../vendor/tecnickcom/tcpdf/tcpdf.php'); // Sesuaikan path jika diperlukan

    // Buat objek TCPDF
    $pdf = new TCPDF();

    // Set properti dokumen
    $pdf->SetCreator('Your Name');
    $pdf->SetAuthor('Your Name');
    $pdf->SetTitle('Report PDF');
    $pdf->SetSubject('Report PDF');
    $pdf->SetKeywords('TCPDF, PDF, report');

    // Set font
    $pdf->SetFont('times', '', 12);

    // Set font size untuk judul dan header
    $pdf->SetFontSize(16); // Ukuran font untuk judul
    $pdf->AddPage();

    // Tambahkan logo di header
    $logoPath = 'http://localhost:8080/ISAQ/assets/images/patco.png'; // Sesuaikan dengan path logo Anda
    $pdf->Image($logoPath, 10, 10, 33.78);

    // Tambahkan judul tanpa garis atas
    $pdf->Cell(0, 10, 'Monthly Report Transaksi - '.$monthName, 0, 1, 'C');

    $pdf->SetY(40);
    
    // Set font size kembali untuk data tabel
    $pdf->SetFontSize(8);

    // Tambahkan header kolom
    $pdf->Cell(35, 5, 'NoTransaksi', 1);
    $pdf->Cell(70, 5, 'Name', 1);
    $pdf->Cell(45, 5, 'AJU', 1);
    $pdf->Cell(20, 5, 'Total Qty', 1);
    $pdf->Cell(20, 5, 'Total Harga', 1);
    $pdf->Ln();

    // Tambahkan data ke dalam tabel
    while ($row = mysqli_fetch_assoc($data)) {
        $pdf->Cell(35, 5, $row['NoTransaksi'], 1);
        $pdf->Cell(70, 5, $row['Name'], 1);
        $pdf->Cell(45, 5, $row['AJU'], 1);
        $pdf->Cell(20, 5, $row['Qty'], 1);
        $pdf->Cell(20, 5, $row['Harga'], 1);
        $pdf->Ln();
    }

    // Simpan file PDF
    $pdfFileName = 'Monthly Report Transaksi '.$monthName.'.pdf';
    $pdf->Output($pdfFileName, 'D'); // 'D' untuk men-download file

    // Tutup koneksi ke database
    $mysqli->close();
}
?>
