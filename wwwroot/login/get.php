<?php
$host = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; 
$database = "isaq"; // Ganti dengan nama database Anda

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Query database untuk mencocokkan username dan password
$query = "SELECT x.Id,x.FullName,x.UserCode,x.username,x.password,x.Company as IdCompany,c.Name as CompanyName,c.Code as CodeCompany,y.Name FROM `user` X
            INNER JOIN Role y on x.Role = y.Id
            INNER JOIN Company c on x.Company = c.Id
            WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($koneksi, $query);

// Periksa hasil query
if (mysqli_num_rows($result) == 1) {
    // Login berhasil, arahkan ke halaman utama
    
    $data_user = mysqli_fetch_array($result);
    
    if($data_user['Name'] == 'Administrator') {
        header("Location: ../../index.php");
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $data_user['Id'];
        $_SESSION['fullname'] = $data_user['FullName'];
        $_SESSION['role'] = $data_user['Name'];
        $_SESSION['idcompany'] = $data_user['IdCompany'];
        $_SESSION['companyname'] = $data_user['CompanyName'];
        $_SESSION['codecompany'] = $data_user['CodeCompany'];
    }else if($data_user['Name'] == 'Vendor') {
        header("Location: ../../views/vendor/");
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $data_user['Id'];
        $_SESSION['fullname'] = $data_user['FullName'];
        $_SESSION['role'] = $data_user['Name'];
        $_SESSION['idcompany'] = $data_user['IdCompany'];
        $_SESSION['companyname'] = $data_user['CompanyName'];
        $_SESSION['codecompany'] = $data_user['CodeCompany'];
    }else if($data_user['Name'] == 'Exim') {
        header("Location: ../../views/exim/");
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $data_user['Id'];
        $_SESSION['fullname'] = $data_user['FullName'];
        $_SESSION['role'] = $data_user['Name'];
        $_SESSION['idcompany'] = $data_user['IdCompany'];
        $_SESSION['companyname'] = $data_user['CompanyName'];
        $_SESSION['codecompany'] = $data_user['CodeCompany'];
    }
    exit();
    //echo "Login berhasil";
} else {
    //sweetalert alert
    $_SESSION['error_message'] = "Login gagal. Silakan coba lagi.";
    header("Location: ../../auth/login/index.php");
    exit();
}

// Tutup koneksi database
mysqli_close($koneksi);
?>