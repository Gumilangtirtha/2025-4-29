<?php
// Header information
$title = "Menyimpan Nama Teman";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - Dasar PHP</title>
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
        h1, h2, h3 {
            color: #333;
        }
        h2 {
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }
        code {
            background-color: #f4f4f4;
            padding: 2px 5px;
            border-radius: 3px;
            font-family: Consolas, monospace;
        }
        .example {
            background-color: #f9f9f9;
            border-left: 3px solid #0066cc;
            padding: 10px 15px;
            margin: 15px 0;
        }
        .back-link {
            display: inline-block;
            margin: 20px 0;
            color: #0066cc;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $title; ?></h1>
        
        <h2>Menyimpan Nama Teman dalam Variabel Terpisah</h2>
        <p>Cara pertama adalah menyimpan setiap nama teman dalam variabel terpisah:</p>
        <div class="example">
            <?php
            // Menyimpan nama teman dalam variabel terpisah
            $teman1 = "Dzaki";
            $teman2 = "Lukman";
            $teman3 = "Islam";
            
            // Menampilkan nama teman
            echo "<p>Nama teman pertama: $teman1</p>";
            echo "<p>Nama teman kedua: $teman2</p>";
            echo "<p>Nama teman ketiga: $teman3</p>";
            ?>
        </div>
        
        <h2>Menyimpan Nama Teman dalam Array</h2>
        <p>Cara kedua dan lebih efisien adalah menyimpan nama teman dalam array:</p>
        <div class="example">
            <?php
            // Menyimpan nama teman dalam array
            $teman = ["Dzaki", "Lukman", "Islam"];
            
            // Menampilkan nama teman dari array
            echo "<p>Nama teman pertama: $teman[0]</p>";
            echo "<p>Nama teman kedua: $teman[1]</p>";
            echo "<p>Nama teman ketiga: $teman[2]</p>";
            
            // Menampilkan semua nama teman dengan loop
            echo "<p>Daftar semua teman:</p>";
            echo "<ul>";
            foreach ($teman as $nama) {
                echo "<li>$nama</li>";
            }
            echo "</ul>";
            ?>
        </div>
        
        <h2>Menyimpan Nama Teman dalam Array Asosiatif</h2>
        <p>Cara ketiga adalah menyimpan nama teman dalam array asosiatif dengan kunci yang bermakna:</p>
        <div class="example">
            <?php
            // Menyimpan nama teman dalam array asosiatif
            $temanAsosiatif = [
                "teman_pertama" => "Dzaki",
                "teman_kedua" => "Lukman",
                "teman_ketiga" => "Islam"
            ];
            
            // Menampilkan nama teman dari array asosiatif
            echo "<p>Nama teman pertama: {$temanAsosiatif['teman_pertama']}</p>";
            echo "<p>Nama teman kedua: {$temanAsosiatif['teman_kedua']}</p>";
            echo "<p>Nama teman ketiga: {$temanAsosiatif['teman_ketiga']}</p>";
            ?>
        </div>
        
        <a href="index.php" class="back-link">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>