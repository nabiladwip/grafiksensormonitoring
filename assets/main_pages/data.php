<?php
//koneksi database
$konek = mysqli_connect("localhost", "id20014872_root", "hrtpmM!_Z|#@#2T/", "id20014872_abc_database");

//baca id data terbaru
$sql_id = mysqli_query($konek, "SELECT MAX(id) FROM tb_sensor");
$data_id = mysqli_fetch_array($sql_id);
$id_akhir = $data_id['MAX(id)'];
$id_awal = $id_akhir - 8;

//baca data tabel
//baca informasi tgl sumbu x
$tgl = mysqli_query($konek, "SELECT tgl FROM tb_sensor WHERE id>='$id_awal' and id<='$id_akhir' ORDER BY id ASC");
//baca informasi suhu sumbu y
$suhu = mysqli_query($konek, "SELECT suhu FROM tb_sensor WHERE id>='$id_awal' and id<='$id_akhir' ORDER BY id ASC");
$kelembaban = mysqli_query($konek, "SELECT kelembaban FROM tb_sensor WHERE id>='$id_awal' and id<='$id_akhir' ORDER BY id ASC");
?>

<!-- <div class="card-body"> -->
<div class="panel panel-primary">
    <br>
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Monitor</h6>
    </div>
    <div class="panel-body">
        <!--canvas grafik-->
        <canvas id="myChart"></canvas>
        <!--Gambar grafik-->
        <script type="text/javascript">
            //baca id canvas tempat grafik diletakkan
            var canvas = document.getElementById('myChart')
            //letakkan data tgl dan suhu untuk grafik
            var data = {
                labels: [
                    <?php
                    while ($data_tgl = mysqli_fetch_array($tgl)) {
                        echo '"' . $data_tgl['tgl'] . '",';
                    }
                    ?>
                ],
                datasets: [{
                        label: "Suhu",
                        fill: true,
                        backgroundColor: "rgba(0,0,255,.2)",
                        borderColor: "rgba(0,0,255,.3)",
                        lineTension: 0.3,
                        pointRadius: 5,
                        data: [
                            <?php
                            while ($data_suhu = mysqli_fetch_array($suhu)) {
                                echo $data_suhu['suhu'] . ',';
                            }
                            ?>
                        ]
                    },
                    {
                        label: "Kelembaban",
                        fill: true,
                        backgroundColor: "rgba(255,0,0,.2)",
                        borderColor: "rgba(255,0,0,.3)",
                        lineTension: 0.3,
                        pointRadius: 5,
                        data: [
                            <?php
                            while ($data_kelembaban = mysqli_fetch_array($kelembaban)) {
                                echo $data_kelembaban['kelembaban'] . ',';
                            }
                            ?>
                        ]
                    }
                ]
            };

            //opsi grafik
            var option = {
                showLines: true,
                animation: {
                    duration: 0
                }
            };

            //cetak grafik
            var myLineChart = Chart.Line(canvas, {
                data: data,
                options: option
            });
        </script>
    </div>
</div>
<!-- </div> -->