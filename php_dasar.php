<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>PHP Dasar</title>
</head>
<body>
	<div class="login">
		<h1>Program Gaji Karyawan</h1>
		<form method="POST">
			<label>Nama : <br></label>
			<input type="text" name="nama" placeholder="Masukan Nama">
			<br>
			<label>Tanggal Lahir : <br></label>
			<input type="date" name="tanggal">
			<br>
			<label>Pekerjaan : <br></label>
			<input type="radio" name="pekerjaan" value="Staff Administrasi">Staff Administrasi</input>
			<input type="radio" name="pekerjaan" value="Finance">Finance</input>
			<input type="radio" name="pekerjaan" value="Accounting">Accounting</input>
			<br>
			<br>
			<input type="submit" name="button" value="Submit">
			<br>
			<br>
			<h3>Hasil Output : </h3>
	<?php
    $lahir = @$_GET['tanggal'];
    $button = @$_POST['button'];

    if ($button) {
        $nama=$_POST['nama'];
        $job=@$_POST['pekerjaan'];
        echo "<p>Nama : $nama</p>";
        $tanggal_lahir = new DateTime($_POST['tanggal']);
        $sekarang = new DateTime("today");
        if ($tanggal_lahir > $sekarang) { 
            $thn = "0";
            $bln = "0";
            $tgl = "0";
        }
        $thn = $sekarang->diff($tanggal_lahir)->y;
        $bln = $sekarang->diff($tanggal_lahir)->m;
        $tgl = $sekarang->diff($tanggal_lahir)->d;
        echo "<p>Umur : ";
        echo $thn." Tahun ".$bln." Bulan ".$tgl." Hari";
         
        if ($job=='Staff Administrasi') {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gajinya : Rp. 3.000.000/bulan</p>";
        }
        elseif ($job=="Finance") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gajinya : Rp. 6.780.000/bulan</p>";
        }
        elseif ($job=="Accounting") {
            echo "<p>Pekerjaan : $job</p> ";
            echo "<p>Gajinya : Rp. 10.900.000/bulan</p>";
        }
        else {
            echo "<p>Pilih pekerjaan</p>";
        }
        echo "<br><br><p>&copy;" . date("Y") . " Aprilia Nur Saadah - 311910302</p>";
    }
    ?>
		</form>
	</div>
</body>
</html>