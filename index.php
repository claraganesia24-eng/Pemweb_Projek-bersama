<!DOCTYPE html>
<html>
<head>
    <title>Absensi Kuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">

<h2>Absensi Kuliah</h2>

<form method="POST">

    <label>Nama</label>
    <input type="text" name="nama">

    <label>Kehadiran</label>
    <select name="status">
        <option>Hadir</option>
        <option>Izin</option>
        <option>Sakit</option>
        <option>Tidak Hadir</option>
    </select>

    <button name="btn">Submit</button>

</form>

<?php
if(isset($_POST['btn'])) {

    $nama = $_POST['nama'];
    $status = $_POST['status'__];

    if($status == "Hadir") {
        $pesan = "Anda hadir hari ini";
    }
    else if($status == "Izin") {
        $pesan = "Anda izin";
    }
    else if($status == "Sakit") {
        $pesan = "Semoga cepat sembuh";
    }
    else {
        $pesan = "Anda tidak hadir hari ini";
    }

    echo "
    <div class='hasil'>
        <h3>Data Absensi</h3>
        <p>Nama: $nama</p>
        <p>Status: $status</p>
        <p>$pesan</p>
    </div>
    ";
}
?>

</div>

</body>
</html>

