<?php
// Header information
$title = "Variabel dan Tipe Data";
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
        
        <h2>Variabel dalam PHP</h2>
        <p>Variabel dalam PHP dimulai dengan tanda dollar ($) diikuti dengan nama variabel.</p>
        <div class="example">
            <?php
            // Deklarasi variabel
            $nama = "Budi";
            $umur = 25;
            $tinggi = 175.5;
            
            // Menampilkan variabel
            echo "<p>Nama: $nama</p>";
            echo "<p>Umur: $umur tahun</p>";
            echo "<p>Tinggi: $tinggi cm</p>";
            ?>
        </div>
        
        <h2>Tipe Data dalam PHP</h2>
        
        <h3>1. String</h3>
        <p>String adalah rangkaian karakter yang diapit oleh tanda kutip tunggal ('') atau ganda ("").</p>
        <div class="example">
            <?php
            $teks1 = 'Ini adalah string dengan kutip tunggal';
            $teks2 = "Ini adalah string dengan kutip ganda";
            
            echo "<p>$teks1</p>";
            echo "<p>$teks2</p>";
            
            // Perbedaan kutip tunggal dan ganda
            $nama = "Ani";
            echo '<p>Halo $nama</p>'; // Tidak mengevaluasi variabel
            echo "<p>Halo $nama</p>"; // Mengevaluasi variabel
            ?>
        </div>
        
        <h3>2. Integer</h3>
        <p>Integer adalah bilangan bulat tanpa desimal.</p>
        <div class="example">
            <?php
            $angka1 = 42;
            $angka2 = -17;
            
            echo "<p>Angka positif: $angka1</p>";
            echo "<p>Angka negatif: $angka2</p>";
            echo "<p>Hasil penjumlahan: " . ($angka1 + $angka2) . "</p>";
            ?>
        </div>
        
        <h3>3. Float/Double</h3>
        <p>Float adalah bilangan dengan desimal.</p>
        <div class="example">
            <?php
            $desimal1 = 3.14;
            $desimal2 = 2.71828;
            
            echo "<p>Pi: $desimal1</p>";
            echo "<p>e: $desimal2</p>";
            echo "<p>Hasil perkalian: " . ($desimal1 * $desimal2) . "</p>";
            ?>
        </div>
        
        <h3>4. Boolean</h3>
        <p>Boolean hanya memiliki dua nilai: true atau false.</p>
        <div class="example">
            <?php
            $benar = true;
            $salah = false;
            
            echo "<p>Nilai benar: " . ($benar ? 'true' : 'false') . "</p>";
            echo "<p>Nilai salah: " . ($salah ? 'true' : 'false') . "</p>";
            ?>
        </div>
        
        <h3>5. Array</h3>
        <p>Array adalah kumpulan nilai yang disimpan dalam satu variabel.</p>
        <div class="example">
            <?php
            $buah = array("Apel", "Jeruk", "Mangga");
            
            echo "<p>Buah pertama: " . $buah[0] . "</p>";
            echo "<p>Buah kedua: " . $buah[1] . "</p>";
            echo "<p>Buah ketiga: " . $buah[2] . "</p>";
            ?>
        </div>
        
        <h2>Operator dalam PHP</h2>
        
        <h3>Operator Aritmatika</h3>
        <div class="example">
            <?php
            $a = 10;
            $b = 3;
            
            echo "<p>$a + $b = " . ($a + $b) . " (Penjumlahan)</p>";
            echo "<p>$a - $b = " . ($a - $b) . " (Pengurangan)</p>";
            echo "<p>$a * $b = " . ($a * $b) . " (Perkalian)</p>";
            echo "<p>$a / $b = " . ($a / $b) . " (Pembagian)</p>";
            echo "<p>$a % $b = " . ($a % $b) . " (Modulus/Sisa Bagi)</p>";
            echo "<p>$a ** $b = " . ($a ** $b) . " (Pangkat)</p>";
            ?>
        </div>
        
        <h3>Operator Perbandingan</h3>
        <div class="example">
            <?php
            $x = 5;
            $y = "5";
            
            echo "<p>$x == $y: " . ($x == $y ? 'true' : 'false') . " (Sama dengan, tidak memeriksa tipe data)</p>";
            echo "<p>$x === $y: " . ($x === $y ? 'true' : 'false') . " (Identik, memeriksa nilai dan tipe data)</p>";
            echo "<p>$x != $y: " . ($x != $y ? 'true' : 'false') . " (Tidak sama dengan)</p>";
            echo "<p>$x !== $y: " . ($x !== $y ? 'true' : 'false') . " (Tidak identik)</p>";
            echo "<p>$x > $b: " . ($x > $b ? 'true' : 'false') . " (Lebih besar dari)</p>";
            echo "<p>$x < $b: " . ($x < $b ? 'true' : 'false') . " (Lebih kecil dari)</p>";
            ?>
        </div>
        
        <h3>Operator Logika</h3>
        <div class="example">
            <?php
            $p = true;
            $q = false;
            
            echo "<p>$p AND $q: " . ($p && $q ? 'true' : 'false') . " (Logika AND)</p>";
            echo "<p>$p OR $q: " . ($p || $q ? 'true' : 'false') . " (Logika OR)</p>";
            echo "<p>NOT $p: " . (!$p ? 'true' : 'false') . " (Logika NOT)</p>";
            ?>
        </div>
        
        <a href="index.php" class="back-link">← Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
