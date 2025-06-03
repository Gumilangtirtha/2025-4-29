<?php
// Header information
$title = "Struktur Kontrol";
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
        
        <h2>Pernyataan If-Else</h2>
        <p>Pernyataan if-else digunakan untuk mengeksekusi kode berdasarkan kondisi.</p>
        <div class="example">
            <?php
            $nilai = 75;
            
            echo "<p>Nilai: $nilai</p>";
            
            if ($nilai >= 80) {
                echo "<p>Hasil: Sangat Baik</p>";
            } elseif ($nilai >= 70) {
                echo "<p>Hasil: Baik</p>";
            } elseif ($nilai >= 60) {
                echo "<p>Hasil: Cukup</p>";
            } else {
                echo "<p>Hasil: Kurang</p>";
            }
            ?>
        </div>
        
        <h3>Operator Ternary</h3>
        <p>Operator ternary adalah cara singkat untuk menulis pernyataan if-else.</p>
        <div class="example">
            <?php
            $umur = 20;
            
            echo "<p>Umur: $umur</p>";
            $status = ($umur >= 18) ? "Dewasa" : "Anak-anak";
            echo "<p>Status: $status</p>";
            ?>
        </div>
        
        <h2>Pernyataan Switch</h2>
        <p>Pernyataan switch digunakan untuk melakukan tindakan berbeda berdasarkan kondisi yang berbeda.</p>
        <div class="example">
            <?php
            $hari = date('l'); // Mendapatkan nama hari dalam bahasa Inggris
            
            echo "<p>Hari ini adalah: $hari</p>";
            echo "<p>Dalam Bahasa Indonesia: ";
            
            switch ($hari) {
                case "Monday":
                    echo "Senin";
                    break;
                case "Tuesday":
                    echo "Selasa";
                    break;
                case "Wednesday":
                    echo "Rabu";
                    break;
                case "Thursday":
                    echo "Kamis";
                    break;
                case "Friday":
                    echo "Jumat";
                    break;
                case "Saturday":
                    echo "Sabtu";
                    break;
                case "Sunday":
                    echo "Minggu";
                    break;
                default:
                    echo "Tidak diketahui";
            }
            echo "</p>";
            ?>
        </div>
        
        <h2>Perulangan (Loops)</h2>
        
        <h3>1. For Loop</h3>
        <p>For loop digunakan ketika Anda tahu berapa kali Anda ingin menjalankan kode.</p>
        <div class="example">
            <?php
            echo "<p>Menghitung dari 1 sampai 5:</p>";
            echo "<ul>";
            for ($i = 1; $i <= 5; $i++) {
                echo "<li>Angka: $i</li>";
            }
            echo "</ul>";
            ?>
        </div>
        
        <h3>2. While Loop</h3>
        <p>While loop menjalankan blok kode selama kondisi yang ditentukan benar.</p>
        <div class="example">
            <?php
            echo "<p>Menghitung mundur dari 5 sampai 1:</p>";
            echo "<ul>";
            $counter = 5;
            while ($counter > 0) {
                echo "<li>Angka: $counter</li>";
                $counter--;
            }
            echo "</ul>";
            ?>
        </div>
        
        <h3>3. Do-While Loop</h3>
        <p>Do-while loop akan selalu mengeksekusi blok kode sekali, kemudian akan memeriksa kondisi.</p>
        <div class="example">
            <?php
            echo "<p>Menggunakan do-while loop:</p>";
            echo "<ul>";
            $x = 1;
            do {
                echo "<li>Angka: $x</li>";
                $x++;
            } while ($x <= 5);
            echo "</ul>";
            ?>
        </div>
        
        <h3>4. Foreach Loop</h3>
        <p>Foreach loop digunakan untuk mengulang melalui array.</p>
        <div class="example">
            <?php
            $buah = array("Apel", "Jeruk", "Pisang", "Mangga", "Anggur");
            
            echo "<p>Daftar Buah:</p>";
            echo "<ul>";
            foreach ($buah as $item) {
                echo "<li>$item</li>";
            }
            echo "</ul>";
            
            // Foreach dengan key dan value
            $harga_buah = array(
                "Apel" => 15000,
                "Jeruk" => 12000,
                "Pisang" => 8000,
                "Mangga" => 20000
            );
            
            echo "<p>Daftar Harga Buah (per kg):</p>";
            echo "<ul>";
            foreach ($harga_buah as $nama => $harga) {
                echo "<li>$nama: Rp " . number_format($harga, 0, ',', '.') . "</li>";
            }
            echo "</ul>";
            ?>
        </div>
        
        <h2>Pernyataan Break dan Continue</h2>
        <div class="example">
            <?php
            echo "<p>Menggunakan break (hanya menampilkan angka 1-5):</p>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                if ($i > 5) {
                    break; // Keluar dari loop jika $i > 5
                }
                echo "<li>Angka: $i</li>";
            }
            echo "</ul>";
            
            echo "<p>Menggunakan continue (hanya menampilkan angka ganjil 1-10):</p>";
            echo "<ul>";
            for ($i = 1; $i <= 10; $i++) {
                if ($i % 2 == 0) {
                    continue; // Lewati iterasi jika $i adalah genap
                }
                echo "<li>Angka: $i</li>";
            }
            echo "</ul>";
            ?>
        </div>
        
        <a href="index.php" class="back-link">← Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
