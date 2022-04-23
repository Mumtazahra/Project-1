<?php include_once "header.php"?>
<?php include_once "sidebar.php"?>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Praktikum 1</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pertemuan 1</li>
            </ol>
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <h2 class="card-title"><b>Array</b></h2>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="d-md-flex">
                  <div class="p-1 flex-fill" style="overflow: hidden">
                  <h2>Array Buah</h2>
                    <?php 
                    $ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];
                    // cetak buah ke index ke 2
                    echo "Ini adalah hasil data buah dalam array";
                    echo "<br/>$ar_buah[2]";
                    //cetak jumlah buah
                    echo '<br/>Jumlah buah ' .count($ar_buah);
                    // cetak seluruh buah
                    echo "<ol>";
                    foreach ($ar_buah as $buah) {
                        echo "<li>$buah</li>";
                    }
                    echo "</ol>";
                    // tambahkan data array
                    $ar_buah[] = "Durian";
                    // hapus salah satu buah berdasarkan indexnya
                    unset($ar_buah[1]);
                    // ubah buah index ke 2 menjadi manggis
                    $ar_buah[2] = "Manggis";
                    echo "<ul>";
                    foreach ($ar_buah as $k => $v) {
                        echo "<li>Buah index ke - $k adalah $v </li>";
                    }
                    echo "</ul>";
                     ?>
                     </br>
                     <h2>Array Fungsi</h2>
                     <?php
$ar_buah = ["p" =>"pepaya", "a"=>"apel","m"=>"mangga","j"=>"mangga"];
echo "<ol>";
foreach ($ar_buah as $buah => $v) {
    echo "<li> $buah - $v </li>";
}
echo "</ol>";
// fungsi sort berguna untuk mengurutkan array dalam urutan menaik
sort($ar_buah);
echo "<hr/>";
echo"<ol>";
foreach ($ar_buah as $buah => $k){
    echo "<li> $buah - $k </li>";
}
echo "</ol>";
// fungsi arsort berguna untuk mengurutkan array dalam urutan menurun\
arsort($ar_buah);
echo "<hr/>";
echo"<ol>";
foreach ($ar_buah as $buah => $k){
    echo "<li> $buah - $k </li>";
}
echo "</ol>";
echo "<hr>";
?>
<!-- fungsi array pop berguna untuk menghapus nilai terakhir dalam data array-->
<?php
$tims = ["erwin","heru","ali","zaki"];
array_pop($tims);
foreach ($tims as $person) {
    echo "$person <br/>";
}
echo "<hr>";
?>
<!--fungsi array push untuk menambahkan nilai dalam data array-->
<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_push($tims, "wati");
foreach($tims as $person) {
    echo "$person <br/>";
}
echo "<hr>"; 
?>
<!--berfungsi untuk menghapus nilai awal dari sebuah data array-->
<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_shift($tims);
foreach($tims as $person) {
    echo "$person <br/>";
}
echo "<hr>"; 
?>
<!-- fungsi array unshift berguna untuk menambahkan nilai array-->
<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_unshift($tims, "joko", "wati");
foreach($tims as $person) {
    echo "$person <br/>";
}

?>
                    <div id="world-map-markers" style="height: 100px; overflow: hidden">
                      <div class="map"></div>
                    </div>
                    <div class="card">
              
               
                  </div>
                  </div>
                    <!-- /.description-block -->
                  </div><!-- /.card-pane-right -->
                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
              <!-- /.control-sidebar -->
          </div>
    </section>
    <?php include_once "footer.php"?>
  

  