<?php
// Header information
$title = "Form Handling dalam PHP";

// Inisialisasi variabel
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";

// Cek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi nama
    if (empty($_POST["name"])) {
        $nameErr = "Nama harus diisi";
    } else {
        $name = test_input($_POST["name"]);
        // Cek apakah nama hanya berisi huruf dan spasi
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Hanya huruf dan spasi yang diperbolehkan";
        }
    }
    
    // Validasi email
    if (empty($_POST["email"])) {
        $emailErr = "Email harus diisi";
    } else {
        $email = test_input($_POST["email"]);
        // Cek apakah format email valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Format email tidak valid";
        }
    }
    
    // Validasi website (opsional)
    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        // Cek apakah format URL valid
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteErr = "Format URL tidak valid";
        }
    }
    
    // Validasi komentar (opsional)
    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }
    
    // Validasi gender
    if (empty($_POST["gender"])) {
        $genderErr = "Jenis kelamin harus dipilih";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}

// Fungsi untuk membersihkan input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .radio-group {
            margin: 10px 0;
        }
        .error {
            color: #ff0000;
            font-size: 0.9em;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .form-container, .result-container {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $title; ?></h1>
        
        <h2>Penanganan Form dengan PHP</h2>
        <p>Form adalah bagian penting dari website yang memungkinkan pengguna untuk mengirim data ke server. PHP dapat digunakan untuk mengumpulkan, memvalidasi, dan memproses data form.</p>
        
        <h3>Contoh Form dengan Validasi</h3>
        
        <div class="form-container">
            <h3>Form Pendaftaran</h3>
            <p><span class="error">* wajib diisi</span></p>
            
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" name="name" id="name" value="<?php echo $name; ?>">
                    <span class="error">* <?php echo $nameErr; ?></span>
                </div>
                
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?php echo $email; ?>">
                    <span class="error">* <?php echo $emailErr; ?></span>
                </div>
                
                <div class="form-group">
                    <label for="website">Website:</label>
                    <input type="text" name="website" id="website" value="<?php echo $website; ?>">
                    <span class="error"><?php echo $websiteErr; ?></span>
                </div>
                
                <div class="form-group">
                    <label for="comment">Komentar:</label>
                    <textarea name="comment" id="comment" rows="5"><?php echo $comment; ?></textarea>
                </div>
                
                <div class="form-group">
                    <label>Jenis Kelamin:</label>
                    <div class="radio-group">
                        <input type="radio" name="gender" id="gender-male" value="laki-laki" <?php if ($gender == "laki-laki") echo "checked"; ?>>
                        <label for="gender-male" style="display: inline;">Laki-laki</label>
                    </div>
                    <div class="radio-group">
                        <input type="radio" name="gender" id="gender-female" value="perempuan" <?php if ($gender == "perempuan") echo "checked"; ?>>
                        <label for="gender-female" style="display: inline;">Perempuan</label>
                    </div>
                    <span class="error">* <?php echo $genderErr; ?></span>
                </div>
                
                <input type="submit" value="Submit" style="padding: 8px 15px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">
            </form>
        </div>
        
        <?php
        // Tampilkan hasil jika form sudah disubmit dan tidak ada error
        if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($emailErr) && empty($genderErr) && empty($websiteErr)) {
            echo '<div class="result-container">';
            echo '<h3>Data yang Dikirim:</h3>';
            echo '<div class="success">Form berhasil disubmit!</div>';
            echo '<p><strong>Nama:</strong> ' . $name . '</p>';
            echo '<p><strong>Email:</strong> ' . $email . '</p>';
            echo '<p><strong>Website:</strong> ' . ($website ? $website : '-') . '</p>';
            echo '<p><strong>Komentar:</strong> ' . ($comment ? $comment : '-') . '</p>';
            echo '<p><strong>Jenis Kelamin:</strong> ' . $gender . '</p>';
            echo '</div>';
        }
        ?>
        
        <h2>Penjelasan Kode</h2>
        
        <h3>1. Metode Form</h3>
        <div class="example">
            <p>Ada dua metode untuk mengirim data form:</p>
            <ul>
                <li><strong>GET</strong> - Data dikirim melalui URL (terlihat di address bar). Tidak aman untuk data sensitif.</li>
                <li><strong>POST</strong> - Data dikirim secara tersembunyi. Lebih aman untuk data sensitif.</li>
            </ul>
            <p>Contoh penggunaan metode POST:</p>
            <pre>&lt;form method="post" action="proses.php"&gt;
    <!-- elemen form -->
&lt;/form&gt;</pre>
        </div>
        
        <h3>2. Mengakses Data Form</h3>
        <div class="example">
            <p>PHP menyediakan superglobal untuk mengakses data form:</p>
            <ul>
                <li><code>$_GET</code> - Mengakses data yang dikirim dengan metode GET</li>
                <li><code>$_POST</code> - Mengakses data yang dikirim dengan metode POST</li>
                <li><code>$_REQUEST</code> - Mengakses data dari $_GET, $_POST, dan $_COOKIE</li>
            </ul>
            <p>Contoh mengakses data POST:</p>
            <pre>$nama = $_POST["nama"];
$email = $_POST["email"];</pre>
        </div>
        
        <h3>3. Validasi Form</h3>
        <div class="example">
            <p>Validasi form sangat penting untuk keamanan dan integritas data. Beberapa teknik validasi:</p>
            <ul>
                <li>Memeriksa apakah field wajib telah diisi</li>
                <li>Memeriksa format data (email, URL, dll)</li>
                <li>Membersihkan input dari karakter berbahaya</li>
            </ul>
            <p>Contoh fungsi untuk membersihkan input:</p>
            <pre>function test_input($data) {
    $data = trim($data);         // Menghapus spasi di awal dan akhir
    $data = stripslashes($data); // Menghapus backslashes
    $data = htmlspecialchars($data); // Mengkonversi karakter khusus HTML
    return $data;
}</pre>
        </div>
        
        <h3>4. Upload File</h3>
        <div class="example">
            <p>PHP juga mendukung upload file melalui form. Untuk mengupload file, gunakan:</p>
            <ul>
                <li>Atribut <code>enctype="multipart/form-data"</code> pada tag form</li>
                <li>Input dengan type="file"</li>
                <li>Superglobal <code>$_FILES</code> untuk mengakses file yang diupload</li>
            </ul>
            <p>Contoh form upload file:</p>
            <pre>&lt;form method="post" action="upload.php" enctype="multipart/form-data"&gt;
    &lt;input type="file" name="fileToUpload" id="fileToUpload"&gt;
    &lt;input type="submit" value="Upload File" name="submit"&gt;
&lt;/form&gt;</pre>
            <p>Contoh kode PHP untuk memproses upload file:</p>
            <pre>if(isset($_FILES["fileToUpload"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    
    // Pindahkan file yang diupload ke folder target
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "File ". basename($_FILES["fileToUpload"]["name"]). " berhasil diupload.";
    } else {
        echo "Maaf, terjadi kesalahan saat mengupload file.";
    }
}</pre>
        </div>
        
        <a href="index.php" class="back-link">← Kembali ke Halaman Utama</a>
    </div>
</body>
</html>
