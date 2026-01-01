<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Berhasil</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }
        .success-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            width: 450px;
            text-align: center;
        }
        .icon-success {
            font-size: 50px;
            color: #27ae60;
            margin-bottom: 20px;
        }
        h2 { color: #2c3e50; }
        .data-summary {
            text-align: left;
            background: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #27ae60;
        }
        .btn-home {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="success-card">
    <div class="icon-success">✔</div>
    <h2>Pendaftaran Berhasil!</h2>
    <p>Terima kasih telah mendaftar di ITIS Khatulistiwa. Berikut adalah data Anda:</p>

    <div class="data-summary">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil data dari form
            $nama = $_POST['nama'];
            $ttl  = $_POST['ttl'];
            $jk   = $_POST['jk'];
            $hp   = $_POST['hp'];

            // Menampilkan data yang ditangkap
            echo "<b>Nama:</b> $nama <br>";
            echo "<b>TTL:</b> $ttl <br>";
            echo "<b>Jenis Kelamin:</b> $jk <br>";
            echo "<b>Nomor HP:</b> $hp <br>";
        } else {
            echo "Akses langsung ditolak. Silakan isi form pendaftaran.";
        }
        ?>
    </div>

    <p>Silakan simpan bukti pendaftaran ini.</p>
    <a href="index.php" class="btn-home">Kembali ke Beranda</a>
</div>

</body>
</html>