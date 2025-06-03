<?php
// This is a PHP comment
/*
 * This is a multi-line
 * PHP comment
 */

// Basic PHP output
echo "<h1>Dasar Pemrograman PHP</h1>";
echo "<p>Selamat datang di tutorial dasar PHP!</p>";

// PHP variables
$name = "Pengguna";
$year = 2025;

// Combining PHP with HTML
echo "<p>Halo, $name! Sekarang tahun $year.</p>";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasar PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        a {
            display: block;
            margin: 10px 0;
            color: #0066cc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Tutorial</h2>
        <a href="variables.php">1. Variabel dan Tipe Data</a>
        <a href="control_structures.php">2. Struktur Kontrol</a>
        <a href="functions.php">3. Fungsi</a>
        <a href="arrays.php">4. Array</a>
        <a href="forms.php">5. Form Handling</a>
        <a href="database.php">6. Koneksi Database</a>
        <a href="teman.php">7. Contoh Menyimpan Nama Teman</a>
        
        <h2>Informasi PHP</h2>
        <?php
        // Display PHP information
        echo "<p>Versi PHP: " . phpversion() . "</p>";
        
        // Check if running on XAMPP
        if (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false) {
            echo "<p>Server: XAMPP (Apache)</p>";
        }
        
        // Current date and time using PHP
        echo "<p>Tanggal dan Waktu Saat Ini: " . date('Y-m-d H:i:s') . "</p>";
        ?>
    </div>
</body>
</html>
