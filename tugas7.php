<html>
    <head>
        <title>WEB SAYYID</title>
          <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f4f8;
                margin: 0;
                padding: 0;
            }

            h2 {
                text-align: center;
                color: #333;
                margin-top: 30px;
            }

            form {
                background-color: #fff;
                width: 400px;
                margin: 30px auto;
                padding: 25px 30px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }

            label {
                display: block;
                font-weight: bold;
                color: #333;
                margin-bottom: 5px;
                margin-top: 10px;
            }

            input[type="text"], select {
                width: 100%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 14px;
            }

            button {
                background-color: #9d00ffff;
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
        <h2>Form Rental Mobil</h2>
        <form method="post">
            <label>Nama Customer :</label>
            <input type="text" name="namacustomer" required><br><br>
            
            <label>Nomor telepon :</label>
            <input type="text" name="nomortelepon" required><br><br>

            <label>Jenis Mobil :</label>
            <select name="Jenismobil" required>
                <option value="">-- pilih --</option>
                <option value="Avanza">Avanza</option>
                <option value="Xenia">Xenia</option>
                <option value="Innova">Innova</option>
                <option value="Alphard">Alphard</option>
                <option value="Fortuner">Fortuner</option>
            </select><br><br>
            
            <label>Lama Sewa (hari) :</label>
            <input type="number" name="lamasewa" required><br><br>
             <button type="submit" name="submit">Pesan</button>
        </form>
<?php
if (isset($_POST['submit'])) {
    $Namacustomer  = $_POST['namacustomer'];
    $Nomortelepon  = $_POST['nomortelepon'];
    $Jenismobil    = $_POST['Jenismobil'];

    $biayasewa = 0;
    $biayaasuransi = 0;

        switch ($Jenismobil) {
            case "Avanza":
                $biayasewa = 300000;
                $biayaasuransi = 15000;
                break;
            case "Xenia":
                $biayasewa = 300000;
                $biayaasuransi = 15000;
                break;
            case "Innova":
                $biayasewa = 500000;
                $biayaasuransi = 25000;
                break;
            case "Alphard":
                $biayasewa = 750000;   
                $biayaasuransi = 30000;
                break;
            case "Fortuner":
                $biayasewa = 700000;
                $biayaasuransi = 25000;
                break;
        }

    $totalbayar = $biayasewa + $biayaasuransi;
    echo "<h3>Detail Rental Mobil</h3>";
    echo "<p>Nama Customer: {$Namacustomer}</p>";
    echo "<p>Nomor Telepon: {$Nomortelepon}</p>";
    echo "<p>Jenis Mobil: {$Jenismobil}</p>";
    echo "<p>Biaya Sewa: Rp " . number_format($biayasewa, 0, ',', '.') . "</p>";
    echo "<p>Biaya Asuransi: Rp " . number_format($biayaasuransi, 0, ',', '.') . "</p>";
    echo "<p><b>Total Bayar: Rp " . number_format($totalbayar, 0, ',', '.') . "</b></p>";
}

?>
    </body>
</html>