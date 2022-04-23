<?php include_once "header.php"?>
<?php include_once "sidebar.php"?>


  <title>Praktikum 4</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Praktikum 3</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Praktikum 3</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-1">
                <h3 class="card-title">Data Lingkaran</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
              <?php
//memanggil file atau class_lingkaran.php
require_once 'class_lingkaran.php';
echo "Nilai PHI adalah =" . Lingkaran::PHI;
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(4);
echo "<br/>";
// menghitung luas lingkaran menggunakan fungsi getluas
echo "<br/> Luas Lingkaran I adalah = " .$lingkar1->getluas();
echo "<br/> Luas Lingkaran II adalah = " .$lingkar2->getluas();
echo "<br/>";

// menghitung keliling lingkaran menggunakan fungsi get keliling
echo "<br/> Keliling Lingkaran I adalah = " .$lingkar1->getkeliling();
echo "<br/> Keliling Lingkaran I adalah = " .$lingkar1->getkeliling();
?>

<!-- Main content -->
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-1">
                <h3 class="card-title">Class Manusia</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
              <?php
// Membuat class manusia 
class Manusia{
    // Buat Properti 
    var $nama;
    var $warna;

    // buatlah method atau function
    function tampilkan_nama(){
        return 'Nama saya adalah zahra mumtazah';
    }

    function warna_kulit(){
        return '<br/>Kulit saya berwarna coklat';
    }
}
// buat object
$manusia = new Manusia();

echo $manusia -> tampilkan_nama();
echo $manusia -> warna_kulit();
?>

<!-- Main content -->
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-1">
                <h3 class="card-title">Form Nilai</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
              <div class="container">
        <h2 style="text-align: center">Form Nilai Siswa<h2>
            <hr/>
<form method="POST" action="form_nilai.php">
  <div class="form-group row">
    <label for="nim" class="col-3 col-form-label">NIM</label> 
    <div class="col-3">
      <input id="nim" name="nim" placeholder="masukkan nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-3 col-form-label">Mata Kuliah</label> 
    <div class="col-3">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemograman</option>
        <option value="WEB">Pemograman Web</option>
        <option value="BASDAT">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-3 col-form-label">Nilai</label> 
    <div class="col-3">
      <input id="nilai" name="nilai" placeholder="masukkan nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-3 col-3">
      <button name="submit" type="submit" value="Simpan" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
<?php
require_once 'class_nilaimahasiswa.php';
if($_POST){
    $ns = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
    $keterangan = $ns->hitungNilai();
    $hasil = $ns->kelulusan($keterangan);
    $hasil2 = $ns->grade($keterangan);
    echo 'NIM : ' .$ns->nim;
    echo '<br/>Mata Kuliah : ' .$ns->matkul;
    echo '<br/>Nilai : ' .$ns->nilai;
    echo '<br/>Status : ' .$ns->kelulusan($keterangan);
    echo '<br/>Grade : ' .$ns->grade($keterangan);
}
?>
</div>

<!-- Main content -->
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-1">
                <h3 class="card-title">Tugas Persegi Panjang </h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
              <?php
require_once 'class_persegipanjang.php';
$kotak = new PersegiPanjang(8,5);
echo "<br/>";

echo "<br/> Luas Persegi Panjang adalah = " .$kotak->getluas();

echo "<br/> Keliling Persegi Panjang adalah = " .$kotak->getkeliling();
?>
</hr>
</br>
<?php include_once "footer.php"?>