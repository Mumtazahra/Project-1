<br>
<center><u><h1>HASIL INPUT DATA BMI PASIEN</h1></u></center>

<?php
require_once "BMI.php";
$pasien = array(
    1 => array(1, "2022-02-05", "PSN01", "Jungwon", "Pria", 70, 170, 24.2, "Kelebihan Berat Badan"),
        array(2, "2022-02-18", "PSN02", "Hoseok", "Pria", 80, 173, 26.7, "Normal (Ideal)"),
        array(3, "2022-02-28", "PSN03", "Mochi", "Wanita", 50, 171, 17.0, "Kekurangan Berat Badan"),
        array(4, "2022-03-01", "PSN04", "Lisa", "Wanita", 55, 160, 21.4, "Normal (Ideal)")
    );

$nama = $_POST['name'];
$tmpt_lahir = $_POST['lokasi'];
$tgl_lahir = $_POST['date'];
$tgl_periksa = $_POST['date'];
$jns_kelamin = $_POST['jenis'];
$brt_badan = $_POST['berat'];
$tggi_badan = $_POST['tinggi'];
$email = $_POST['email'];

$psn_new = new BmiPasien(count($pasien) + 1, $tgl_periksa, $nama, $tmpt_lahir, $tgl_lahir, $jns_kelamin, $email, $brt_badan, $tggi_badan);
$psn_new->bmi = $psn_new->hasilBMI();
array_push($pasien, array(
$psn_new->id, 
$psn_new->tanggal, 
$psn_new->kode, 
$psn_new->nama, 
$psn_new->jns_kelamin, 
$psn_new->brt_badan,
$psn_new->tggi_badan, 
$psn_new->bmi, 
$psn_new->nilai($psn_new->bmi)));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Data Pasien</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <hr>
    <table class="container table table-striped table-bordered text-center" class="table-dark">
        <thead>
        </div>
            <tr>
                <th>No</th>
                <th>Tanggal Periksa</th>
                <th>Kode Pasien</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>BB (Kg)</th>
                <th>TB (Cm)</th>
                <th>Nilai BMI</th>
                <th>Status BMI</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($pasien as $object => $val){
                    echo "<tr>";
                        echo "<td>".$val[0]."</td>";
                        echo "<td>".$val[1]."</td>";
                        echo "<td>".$val[2]."</td>";
                        echo "<td>".$val[3]."</td>";
                        echo "<td>".$val[4]."</td>";
                        echo "<td>".$val[5]."</td>";
                        echo "<td>".$val[6]."</td>";
                        echo "<td>".$val[7]."</td>";
                        echo "<td>".$val[8]."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>