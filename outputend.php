<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembayaran</title>
    <link rel="stylesheet" href="css/coveroutputend1.css">
    <link rel="icon" href="img/logo.jpg">

    <script>
        function selesai() {
            alert('Pembayaran Berhasil')
        }
    </script>
</head>

<body>
    <div class="border">
        <div class="judul">
            <p>
                Struk Pembelian
            </p>
        </div>

        <?php
        $pembeli = $_POST['pembeli'];
        $alamat = $_POST['alamat'];
        $kode = $_POST['kode'];
        $hp = $_POST['hp'];
        $jml = $_POST['jml'];
        $note = $_POST['note'];
        $brg = $_POST['brg'];
        $harga = $_POST['harga'];
        ?>

        <pre>
            <?php

            if (!empty($pembeli)) {
                echo "Pembeli                       $pembeli<br>";
            }
            if (!empty($alamat)) {
                echo "            Alamat                         $alamat<br>";
            }
            if (!empty($kode)) {
                echo "            Kode pos                     $kode<br>";
            }
            if (!empty($hp)) {
                echo "            No HP                         $hp <br>";
            }
            if (!empty($brg)) {
                echo "            Nama Barang              $brg <br>";
            }

            if (!empty($harga == 10000)) {
                echo "            Harga                           Rp $harga ,- / pcs<br>";
            }
            if (!empty($harga == 5000)) {
                echo "            Harga                           Rp $harga ,- / pcs<br>";
            }
            if (!empty($harga == 8000)) {
                echo "            Harga                           Rp $harga ,- / pcs<br>";
            }
            if (!empty($harga == 6000)) {
                echo "            Harga                           Rp $harga ,- / pcs<br>";
            }
            if (!empty($jml)) {
                echo "            Membeli sebanyak      $jml pcs <br>";
            }
            $total = $harga * $jml;
            if (!empty($total)) {
                echo "            Total bayar                   Rp $total ,- <br>";
            }
            ?>
        </pre>
    </div>



    <div class="input"><a href="website.html" onclick="selesai()">Beli</a> <a href="website.html">Cancel</a></div>


</body>

</html>