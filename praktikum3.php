<?php include_once "header.php"?>
<?php include_once "sidebar.php"?>


  <title>Praktikum 3</title>

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

</br>
<form method="POST" action="nilai_siswa2.php">
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

</hr>

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
                <h3 class="card-title">PHP Tampil</h3>
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
                    include_once 'atas.php';
                ?>
                <h1>Welcome To My Blog</h1>
                <?php
                require_once 'bawah.php';
                ?>
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
                <h3 class="card-title">PHP Tamplate</h3>
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
              <header>
        <h2>Student Activity Score</h2>
        <a href="#">Home|</a>
        <a href="#">Activity|</a>
        <a href="#">MyScore|</a>
        <a href="#">Login|</a>
    </header>
    <hr/>
    <footer>
        <p>Created By Mahasiswa <a href="https://elena.nurulfikri.ac.id/" target="_blank">STT-NF</a> 2021</p></footer>

</hr>
</br>
<?php include_once "footer.php"?>
