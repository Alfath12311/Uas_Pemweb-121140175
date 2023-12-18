<?php
include_once ('connection.php');
include_once ('log.php');

$result = mysqli_query($mysqli, 'SELECT * FROM pesan');  

if (isset($_POST['Submit'])) {    
$nama = $_POST['nama'];    
$nomor = $_POST['nomor'];
$lokasi = $_POST['lokasi'];
$pesanan = $_POST['pesanan'];      
    
$add = mysqli_query($mysqli, "INSERT INTO pesan(nama,nomor,lokasi,pesanan,waktu_pesan) VALUES('$nama','$nomor','$lokasi','$pesanan', NOW())");
}
?> 

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UAS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>UAS</h1>
    </header>

    <div class="container">
        <h2>Catatan Pemesanan</h2>
        <form action="" method="post" name="form_pesan" onsubmit="return validateForm()">
            <div class='input-grup'>
                <label class='label' for="nama">Nama</label>
                <input class='input' type="text" name="nama"  required>
            </div>
            <div class='input-grup'>
                <label class='label'  for="nomor">nomor</label>
                <input class='input' type="text" name="nomor"  required>
            </div>
            <div class='input-grup'>
                <label class='label' for="lokasi">lokasi</label>
                <input class='input' type="text" name="lokasi" required>
            </div>
            <div class='input-grup'>
                <label class='label' for="pesanan">Pesanan</label>
                <select class='input' name="pesanan" required>
                    <option value="#"></option>
                    <option value="no 1">no 1</option>
                    <option value="no 2">no 2</option>
                    <option value="no 3">no 3</option>
                    <option value="no 4">no 4</option>
                    <option value="no 5">no 5</option>
                </select>
            </div>
            <div>
                <button type="submit" name="Submit">pesan</button>
            </div>
        </form>

        <table>
            <tr>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Lokasi</th>
                <th>Pesanan</th>
                <th>Waktu Kehadiran</th>
            </tr>
            <?php 
            while ($r = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $r['nama']; ?></td>
                    <td><?php echo $r['nomor']; ?></td>
                    <td><?php echo $r['lokasi']; ?></td>
                    <td><?php echo $r['pesanan']; ?></td>
                    <td><?php echo $r['waktu_pesan']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <script>
        function validateForm() {
            var name = document.forms["form_pesan"]["nama"].value;
            var nomor = document.forms["form_pesan"]["nomor"].value;
            var lokasi = document.forms["form_pesan"]["lokasi"].value;
            var pesanan = document.forms["form_pesan"]["pesanan"].value;

            if (name === '' || nomor === '' || lokasi === '' || pesanan === '#') {
                alert('Nama dan Divisi harus diisi!');
                return false;
            }

            return true once;
        }
    </script>
</body>

</html>
