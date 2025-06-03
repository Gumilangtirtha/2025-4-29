<?php
// Header information
$title = "Array dalam PHP";
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
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 3px;
            font-family: Consolas, monospace;
            overflow-x: auto;
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
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 15px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $title; ?></h1>
        
        <h2>Apa itu Array?</h2>
        <p>Array adalah variabel khusus yang dapat menyimpan lebih dari satu nilai pada satu waktu. Array di PHP dapat menyimpan nilai dengan tipe data yang berbeda-beda.</p>
        
        <h2>Jenis-jenis Array</h2>
        
        <h3>1. Array Terindeks (Indexed Array)</h3>
        <p>Array terindeks adalah array dengan indeks numerik. Indeks dimulai dari 0.</p>
        <div class="example">
            <p>Cara membuat array terindeks:</p>
            <pre>// Cara 1
$buah = array("Apel", "Jeruk", "Pisang", "Mangga");

// Cara 2 (PHP 5.4+)
$buah = ["Apel", "Jeruk", "Pisang", "Mangga"];</pre>
            
            <p>Hasil:</p>
            <?php
            $buah = ["Apel", "Jeruk", "Pisang", "Mangga"];
            echo "<ul>";
            for ($i = 0; $i < count($buah); $i++) {
                echo "<li>buah[$i] = " . $buah[$i] . "</li>";
            }
            echo "</ul>";
            ?>
        </div>
        
        <h3>2. Array Asosiatif (Associative Array)</h3>
        <p>Array asosiatif adalah array dengan kunci yang ditentukan sendiri.</p>
        <div class="example">
            <p>Cara membuat array asosiatif:</p>
            <pre>// Cara 1
$harga = array("Apel" => 15000, "Jeruk" => 12000, "Pisang" => 8000, "Mangga" => 20000);

// Cara 2 (PHP 5.4+)
$harga = ["Apel" => 15000, "Jeruk" => 12000, "Pisang" => 8000, "Mangga" => 20000];</pre>
            
            <p>Hasil:</p>
            <?php
            $harga = ["Apel" => 15000, "Jeruk" => 12000, "Pisang" => 8000, "Mangga" => 20000];
            echo "<ul>";
            foreach ($harga as $buah => $nilai) {
                echo "<li>Harga $buah: Rp " . number_format($nilai, 0, ',', '.') . " per kg</li>";
            }
            echo "</ul>";
            ?>
        </div>
        
        <h3>3. Array Multidimensi</h3>
        <p>Array multidimensi adalah array yang berisi array lain.</p>
        <div class="example">
            <p>Contoh array multidimensi:</p>
            <pre>$siswa = [
    ["Budi", "Laki-laki", 85],
    ["Ani", "Perempuan", 90],
    ["Dodi", "Laki-laki", 75],
    ["Siti", "Perempuan", 95]
];</pre>
            
            <p>Hasil:</p>
            <?php
            $siswa = [
                ["Budi", "Laki-laki", 85],
                ["Ani", "Perempuan", 90],
                ["Dodi", "Laki-laki", 75],
                ["Siti", "Perempuan", 95]
            ];
            
            echo "<table>";
            echo "<tr><th>Nama</th><th>Jenis Kelamin</th><th>Nilai</th></tr>";
            
            foreach ($siswa as $data) {
                echo "<tr>";
                echo "<td>" . $data[0] . "</td>";
                echo "<td>" . $data[1] . "</td>";
                echo "<td>" . $data[2] . "</td>";
                echo "</tr>";
            }
            
            echo "</table>";
            ?>
        </div>
        
        <h3>Array Asosiatif Multidimensi</h3>
        <div class="example">
            <p>Contoh array asosiatif multidimensi:</p>
            <pre>$mahasiswa = [
    [
        "nama" => "Budi",
        "nim" => "12345",
        "jurusan" => "Teknik Informatika",
        "nilai" => [85, 90, 78]
    ],
    [
        "nama" => "Ani",
        "nim" => "67890",
        "jurusan" => "Sistem Informasi",
        "nilai" => [90, 85, 95]
    ]
];</pre>
            
            <p>Hasil:</p>
            <?php
            $mahasiswa = [
                [
                    "nama" => "Budi",
                    "nim" => "12345",
                    "jurusan" => "Teknik Informatika",
                    "nilai" => [85, 90, 78]
                ],
                [
                    "nama" => "Ani",
                    "nim" => "67890",
                    "jurusan" => "Sistem Informasi",
                    "nilai" => [90, 85, 95]
                ]
            ];
            
            foreach ($mahasiswa as $mhs) {
                echo "<div style='margin-bottom: 15px; padding: 10px; border: 1px solid #ddd;'>";
                echo "<p><strong>Nama:</strong> " . $mhs["nama"] . "</p>";
                echo "<p><strong>NIM:</strong> " . $mhs["nim"] . "</p>";
                echo "<p><strong>Jurusan:</strong> " . $mhs["jurusan"] . "</p>";
                echo "<p><strong>Nilai:</strong> " . implode(", ", $mhs["nilai"]) . "</p>";
                echo "<p><strong>Rata-rata:</strong> " . array_sum($mhs["nilai"]) / count($mhs["nilai"]) . "</p>";
                echo "</div>";
            }
            ?>
        </div>
        
        <h2>Fungsi-fungsi Array</h2>
        <div class="example">
            <h3>1. Menghitung Jumlah Elemen Array</h3>
            <?php
            $angka = [10, 20, 30, 40, 50];
            echo "<p>Array: " . implode(", ", $angka) . "</p>";
            echo "<p>Jumlah elemen: " . count($angka) . "</p>";
            ?>
            
            <h3>2. Mengurutkan Array</h3>
            <?php
            $buah = ["Mangga", "Apel", "Jeruk", "Pisang"];
            echo "<p>Array sebelum diurutkan: " . implode(", ", $buah) . "</p>";
            
            sort($buah);
            echo "<p>Array setelah diurutkan (sort): " . implode(", ", $buah) . "</p>";
            
            $angka = [30, 10, 50, 20, 40];
            echo "<p>Array angka sebelum diurutkan: " . implode(", ", $angka) . "</p>";
            
            sort($angka);
            echo "<p>Array angka setelah diurutkan (sort): " . implode(", ", $angka) . "</p>";
            
            rsort($angka);
            echo "<p>Array angka setelah diurutkan terbalik (rsort): " . implode(", ", $angka) . "</p>";
            ?>
            
            <h3>3. Mengurutkan Array Asosiatif</h3>
            <?php
            $harga = ["Apel" => 15000, "Jeruk" => 12000, "Pisang" => 8000, "Mangga" => 20000];
            
            echo "<p>Array asosiatif sebelum diurutkan:</p>";
            echo "<ul>";
            foreach ($harga as $buah => $nilai) {
                echo "<li>$buah: Rp " . number_format($nilai, 0, ',', '.') . "</li>";
            }
            echo "</ul>";
            
            // Mengurutkan berdasarkan nilai (harga)
            asort($harga);
            echo "<p>Array asosiatif setelah diurutkan berdasarkan nilai (asort):</p>";
            echo "<ul>";
            foreach ($harga as $buah => $nilai) {
                echo "<li>$buah: Rp " . number_format($nilai, 0, ',', '.') . "</li>";
            }
            echo "</ul>";
            
            // Mengurutkan berdasarkan kunci (nama buah)
            ksort($harga);
            echo "<p>Array asosiatif setelah diurutkan berdasarkan kunci (ksort):</p>";
            echo "<ul>";
            foreach ($harga as $buah => $nilai) {
                echo "<li>$buah: Rp " . number_format($nilai, 0, ',', '.') . "</li>";
            }
            echo "</ul>";
            ?>
            
            <h3>4. Menggabungkan Array</h3>
            <?php
            $buah1 = ["Apel", "Jeruk"];
            $buah2 = ["Pisang", "Mangga"];
            
            $semuaBuah = array_merge($buah1, $buah2);
            
            echo "<p>Array 1: " . implode(", ", $buah1) . "</p>";
            echo "<p>Array 2: " . implode(", ", $buah2) . "</p>";
            echo "<p>Hasil penggabungan: " . implode(", ", $semuaBuah) . "</p>";
            ?>
            
            <h3>5. Mencari Nilai dalam Array</h3>
            <?php
            $buah = ["Apel", "Jeruk", "Pisang", "Mangga"];
            
            echo "<p>Array: " . implode(", ", $buah) . "</p>";
            
            $cari = "Pisang";
            if (in_array($cari, $buah)) {
                echo "<p>'$cari' ditemukan dalam array</p>";
            } else {
                echo "<p>'$cari' tidak ditemukan dalam array</p>";
            }
            
            $cari = "Anggur";
            if (in_array($cari, $buah)) {
                echo "<p>'$cari' ditemukan dalam array</p>";
            } else {
                echo "<p>'$cari' tidak ditemukan dalam array</p>";
            }
            
            // Mencari indeks
            $indeks = array_search("Jeruk", $buah);
            echo "<p>Indeks dari 'Jeruk': $indeks</p>";
            ?>
            
            <h3>6. Mengubah Array menjadi String</h3>
            <?php
            $buah = ["Apel", "Jeruk", "Pisang", "Mangga"];
            
            $string = implode(", ", $buah);
            echo "<p>Array: " . print_r($buah, true) . "</p>";
            echo "<p>String: $string</p>";
            ?>
            
            <h3>7. Mengubah String menjadi Array</h3>
            <?php
            $string = "Apel,Jeruk,Pisang,Mangga";
            
            $buah = explode(",", $string);
            echo "<p>String: $string</p>";
            echo "<p>Array: " . print_r($buah, true) . "</p>";
            echo "<ul>";
            foreach ($buah as $item) {
                echo "<li>$item</li>";
            }
            echo "</ul>";
            ?>
            
            <h3>8. Operasi Array Lainnya</h3>
            <?php
            $angka = [10, 20, 30, 40, 50];
            
            echo "<p>Array: " . implode(", ", $angka) . "</p>";
            echo "<p>Jumlah semua nilai: " . array_sum($angka) . "</p>";
            echo "<p>Nilai terkecil: " . min($angka) . "</p>";
            echo "<p>Nilai terbesar: " . max($angka) . "</p>";
            
            // array_push dan array_pop
            $buah = ["Apel", "Jeruk"];
            echo "<p>Array awal: " . implode(", ", $buah) . "</p>";
            
            array_push($buah, "Pisang", "Mangga");
            echo "<p>Setelah array_push: " . implode(", ", $buah) . "</p>";
            
            $terakhir = array_pop($buah);
            echo "<p>Setelah array_pop: " . implode(", ", $buah) . "</p>";
            echo "<p>Elemen yang di-pop: $terakhir</p>";
            
            // array_shift dan array_unshift
            $buah = ["Apel", "Jeruk", "Pisang"];
            echo "<p>Array awal: " . implode(", ", $buah) . "</p>";
            
            array_unshift($buah, "Mangga");
            echo "<p>Setelah array_unshift: " . implode(", ", $buah) . "</p>";
            
            $pertama = array_shift($buah);
            echo "<p>Setelah array_shift: " . implode(", ", $buah) . "</p>";
            echo "<p>Elemen yang di-shift: $pertama</p>";
            ?>
        </div>
        
        <a href="index.php" class="back-link">← Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
