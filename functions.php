<?php
// Header information
$title = "Fungsi dalam PHP";

// Contoh fungsi sederhana
function sapa() {
    echo "Halo, Selamat Datang!";
}

// Fungsi dengan parameter
function sapaOrang($nama) {
    echo "Halo, $nama!";
}

// Fungsi dengan parameter default
function sapaSopan($nama, $waktu = "pagi") {
    echo "Selamat $waktu, $nama!";
}

// Fungsi dengan return value
function jumlahkan($a, $b) {
    return $a + $b;
}

// Fungsi dengan multiple return values menggunakan array
function operasiMatematika($a, $b) {
    $hasil = [
        'jumlah' => $a + $b,
        'kurang' => $a - $b,
        'kali' => $a * $b,
        'bagi' => $a / $b
    ];
    return $hasil;
}

// Fungsi rekursif
function hitungMundur($n) {
    if ($n <= 0) {
        echo "Selesai!";
    } else {
        echo "$n... ";
        hitungMundur($n - 1);
    }
}

// Fungsi dengan parameter variabel (variadic functions)
function jumlahkanSemua(...$angka) {
    return array_sum($angka);
}
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
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $title; ?></h1>
        
        <h2>Apa itu Fungsi?</h2>
        <p>Fungsi adalah blok kode yang dapat digunakan kembali yang melakukan tugas tertentu. Fungsi hanya akan dijalankan ketika dipanggil.</p>
        
        <h2>Fungsi Sederhana</h2>
        <div class="example">
            <p>Definisi fungsi:</p>
            <pre>function sapa() {
    echo "Halo, Selamat Datang!";
}</pre>
            
            <p>Hasil pemanggilan fungsi:</p>
            <?php sapa(); ?>
        </div>
        
        <h2>Fungsi dengan Parameter</h2>
        <div class="example">
            <p>Definisi fungsi:</p>
            <pre>function sapaOrang($nama) {
    echo "Halo, $nama!";
}</pre>
            
            <p>Hasil pemanggilan fungsi:</p>
            <?php sapaOrang("Budi"); ?>
            <br>
            <?php sapaOrang("Ani"); ?>
        </div>
        
        <h2>Fungsi dengan Parameter Default</h2>
        <div class="example">
            <p>Definisi fungsi:</p>
            <pre>function sapaSopan($nama, $waktu = "pagi") {
    echo "Selamat $waktu, $nama!";
}</pre>
            
            <p>Hasil pemanggilan fungsi:</p>
            <?php sapaSopan("Budi"); ?> <!-- Menggunakan nilai default "pagi" -->
            <br>
            <?php sapaSopan("Ani", "siang"); ?> <!-- Menggunakan nilai yang diberikan "siang" -->
        </div>
        
        <h2>Fungsi dengan Return Value</h2>
        <div class="example">
            <p>Definisi fungsi:</p>
            <pre>function jumlahkan($a, $b) {
    return $a + $b;
}</pre>
            
            <p>Hasil pemanggilan fungsi:</p>
            <?php 
            $hasil = jumlahkan(5, 3);
            echo "5 + 3 = $hasil";
            ?>
        </div>
        
        <h2>Fungsi dengan Multiple Return Values</h2>
        <div class="example">
            <p>Definisi fungsi:</p>
            <pre>function operasiMatematika($a, $b) {
    $hasil = [
        'jumlah' => $a + $b,
        'kurang' => $a - $b,
        'kali' => $a * $b,
        'bagi' => $a / $b
    ];
    return $hasil;
}</pre>
            
            <p>Hasil pemanggilan fungsi:</p>
            <?php 
            $operasi = operasiMatematika(10, 2);
            echo "10 + 2 = " . $operasi['jumlah'] . "<br>";
            echo "10 - 2 = " . $operasi['kurang'] . "<br>";
            echo "10 * 2 = " . $operasi['kali'] . "<br>";
            echo "10 / 2 = " . $operasi['bagi'];
            ?>
        </div>
        
        <h2>Fungsi Rekursif</h2>
        <div class="example">
            <p>Definisi fungsi:</p>
            <pre>function hitungMundur($n) {
    if ($n <= 0) {
        echo "Selesai!";
    } else {
        echo "$n... ";
        hitungMundur($n - 1);
    }
}</pre>
            
            <p>Hasil pemanggilan fungsi:</p>
            <?php hitungMundur(5); ?>
        </div>
        
        <h2>Fungsi dengan Parameter Variabel</h2>
        <div class="example">
            <p>Definisi fungsi:</p>
            <pre>function jumlahkanSemua(...$angka) {
    return array_sum($angka);
}</pre>
            
            <p>Hasil pemanggilan fungsi:</p>
            <?php 
            $total = jumlahkanSemua(1, 2, 3, 4, 5);
            echo "1 + 2 + 3 + 4 + 5 = $total";
            ?>
        </div>
        
        <h2>Fungsi Anonymous (Lambda)</h2>
        <div class="example">
            <p>Contoh fungsi anonymous:</p>
            <?php 
            $sapa = function($nama) {
                return "Halo, $nama!";
            };
            
            echo $sapa("Dodi");
            ?>
            
            <p>Fungsi anonymous sebagai callback:</p>
            <?php 
            $angka = [1, 2, 3, 4, 5];
            $angkaKuadrat = array_map(function($n) {
                return $n * $n;
            }, $angka);
            
            echo "Angka asli: " . implode(", ", $angka) . "<br>";
            echo "Angka kuadrat: " . implode(", ", $angkaKuadrat);
            ?>
        </div>
        
        <h2>Fungsi Arrow (PHP 7.4+)</h2>
        <div class="example">
            <p>Contoh fungsi arrow (jika PHP versi 7.4 atau lebih tinggi):</p>
            <?php 
            if (version_compare(PHP_VERSION, '7.4.0', '>=')) {
                $angka = [1, 2, 3, 4, 5];
                $angkaKali2 = array_map(fn($n) => $n * 2, $angka);
                
                echo "Angka asli: " . implode(", ", $angka) . "<br>";
                echo "Angka × 2: " . implode(", ", $angkaKali2);
            } else {
                echo "PHP versi 7.4 atau lebih tinggi diperlukan untuk menggunakan fungsi arrow.";
            }
            ?>
        </div>
        
        <h2>Scope Variabel dalam Fungsi</h2>
        <div class="example">
            <?php 
            $x = 10; // variabel global
            
            function tampilkanX() {
                // $x tidak dapat diakses di sini
                $x = 5; // variabel lokal
                echo "Nilai x di dalam fungsi: $x";
            }
            
            tampilkanX();
            echo "<br>Nilai x di luar fungsi: $x";
            ?>
            
            <p>Menggunakan keyword global:</p>
            <?php 
            $y = 20; // variabel global
            
            function ubahY() {
                global $y; // mengakses variabel global
                $y = 30;
                echo "Nilai y di dalam fungsi: $y";
            }
            
            ubahY();
            echo "<br>Nilai y di luar fungsi setelah diubah: $y";
            ?>
        </div>
        
        <a href="index.php" class="back-link">← Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
