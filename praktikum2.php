<?php include_once "header.php"?>
<?php include_once "sidebar.php"?>


  <title>Praktikum 2</title>

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
            <h1 class="m-0">Praktikum 2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Praktikum 2</li>
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
                <h3 class="card-title">Form Belanja</h3>
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
              <h1>Belanja Online</h1>

</br>

<table border="1" align="right">
    <tr style="background-color: blue;">
        <td>Daftar Harga</td>
    </tr>
    <tr>
        <td>TV : 4.200.000</td>
    </tr>
    <tr>
        <td>Kulkas : 3.100.000 </td>
    </tr>
    <tr>
        <td>Mesin Cuci : 3.800.000</td>
    </tr>
    <tr style="background-color: blue;">
        <td>Harga Dapat berubah Setiap Saat</td>
    </tr>
</table>

<form  method="POST" action="form_belanja.php">
<div class="container">
  <div class="form-group row">
    <label for="customer" class="col-2 col-form-label">Customer</label> 
    <div class="col-3">
      <input id="customer" name="customer" placeholder="Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">Pilih Produk</label> 
    <div class="col-4">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-2 col-form-label">Jumlah</label> 
    <div class="col-2">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-4">
      <button style="background-color: green;" name="proses" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</div>
</form>

</br>

<h1>Ini HASILNYA</h1>

<?php
$proses = $_POST['proses'];
$nama_customer = $_POST['customer'];
$nama_produk = $_POST['produk'];
$jumlah_produk = $_POST['jumlah'];

if($nama_produk == "tv"){
$total = $jumlah_produk * 4200000;
}elseif($nama_produk == "kulkas"){
  $total = $jumlah_produk * 3100000;
}elseif($nama_produk == "mesin"){
  $total = $jumlah_produk * 3800000;
}

echo "Nama Customer : $nama_customer";
echo "</br>Nama Produk : $nama_produk";
echo "</br>Jumlah Produk : $jumlah_produk";
echo "</br>Total : $total";
?>
</hr>
</hr>

<h2>Form Nilai</h2>
</br>
<form method="POST" action="nilai_siswa.php">
  <div class="container">
  <div class="form-group row">
    <label for="nama" class="col-2 col-form-label">Nama Lengkap</label> 
    <div class="col-3">
      <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-2 col-form-label">Mata Kuliah</label> 
    <div class="col-3">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="ddp">Dasar Dasar Pemrograman</option>
        <option value="pemweb1">Pemrograman Web 1</option>
        <option value="so">Sistem Operasi</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-2 col-form-label">Nilai UTS</label> 
    <div class="col-2">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-2 col-form-label">Nilai UAS</label> 
    <div class="col-2">
      <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-2 col-form-label">Nilai Tugas/Praktikum</label> 
    <div class="col-2">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-2 col-8">
      <button name="proses" type="submit" value = "Simpan" class="btn btn-primary">Simpan</button>
    </div>
  </div>
  </div>
</form>

              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          
                <!-- /.d-flex -->
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once "footer.php"?>




