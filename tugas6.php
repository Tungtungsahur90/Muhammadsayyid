    <html>
        <head>
            <title>WEB SAYYID</title>
             <style>
            /* Gaya umum halaman */
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f6fa;
                margin: 0;
                padding: 0;
            }

            /* Judul utama */
            h2 {
                text-align: center;
                color: #333;
                margin-top: 30px;
            }

            /* Area form */
            form {
                background-color: #fff;
                width: 400px;
                margin: 30px auto;
                padding: 25px 30px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            /* Label di atas kolom input */
            label {
                display: block;
                font-weight: bold;
                color: #333;
                margin-bottom: 5px;
                margin-top: 10px;
            }

            /* Input dan dropdown */
            input[type="text"], select {
                width: 100%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 14px;
            }

            /* Tombol kirim */
            button {
                background-color: #7b00ffff;
                color: white;
                padding: 10px 15px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 14px;
                margin-top: 15px;
                width: 100%;
                transition: 0.3s;
            }

            button:hover {
                background-color: #0056b3;
            }

            /* Bagian hasil output */
            h3 {
                text-align: center;
                color: #444;
                margin-top: 40px;
            }

            p {
                width: 400px;
                margin: 5px auto;
                background: #fff;
                padding: 8px 15px;
                border-radius: 6px;
                box-shadow: 0 0 5px rgba(0,0,0,0.05);
                font-size: 15px;
            }

            b {
                color: #007bff;
            }
        </style>
        </head>
        <body>
            <h2>Form Pendaftaraan Ulang</h2>
            <form method="post">
                <label>Nama Siswa :</label>
                <input type="text" name="namasiswa" required><br><br>
                
                <label>Nomor Induk :</label>
                <input type="text" name="nomorinduk" required><br><br>

                <label>Kelas :</label>
                <select name="kelas" required>
                    <option value="">-- pilih --</option>
                    <option value="X">X</option>
                    <option value="XI">XI</option>
                    <option value="XII">XII</option>
                </select><br><br>

                <button type="submit" name="submit">Daftar</button>
            </form>
    <?php
    if (isset($_POST['submit'])) {
        $namasiswa     = $_POST['namasiswa'];
        $nomorinduk    = $_POST['nomorinduk'];
        $kelas         = $_POST['kelas'];

        $gedung = 0;
        $spp = 0;
        $seragam = 0;

            switch ($kelas) {
                case "X":
                    $gedung = 800000;
                    $spp = 90000;
                    $seragam = 125000;
                    break;
                case "XI":
                    $gedung = 500000;
                    $spp = 75000;
                    $seragam = 100000;
                    break;
                case "XII":
                    $gedung = 500000;
                    $spp = 75000;
                    $seragam = 100000;
                    break;
            }

        $totalbayar = $gedung + $spp + $seragam;
        echo "<h3>Detail Pendaftaran Ulang</h3>";
        echo "<p>Nama Siswa: {$namasiswa}</p>"; 
        echo "<p>Nomor Induk: {$nomorinduk}</p>";
        echo "<p>Kelas: {$kelas}</p>";
        echo "<p>Biaya Gedung: Rp " . number_format($gedung, 0, ',', '.') . "</p>";
        echo "<p>Biaya SPP: Rp " . number_format($spp, 0, ',', '.') . "</p>";
        echo "<p>Biaya Seragam: Rp " . number_format($seragam, 0, ',', '.') . "</p>";
        echo "<p><b>Total Bayar: Rp " . number_format($totalbayar, 0, ',', '.') . "</b></p>";
    }

    ?>
        </body>
    </html>