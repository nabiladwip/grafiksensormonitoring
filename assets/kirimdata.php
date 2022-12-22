<?php
$konek = mysqli_connect("localhost", "id20014872_root", "hrtpmM!_Z|#@#2T/", "id20014872_abc_database");
//tangkap parameter suhu dan kelembaban
$suhus = $_GET['suhu'];
$kelembabans = $_GET['kelembaban'];

//simpan ke tb abc_database
//atur id selalu dimulai dari 1
mysqli_query($konek, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");
//simpan nilai suhu dan kelembaban ke tb_sensor
$simpan = mysqli_query($konek, "INSERT INTO tb_sensor(suhu, kelembaban)VALUES('$suhus
', '$kelembabans')");

//berikan respon ke esp
if ($simpan)
    echo "Berhasil disimpan";
else
    echo "Gagal disimpan";
?>