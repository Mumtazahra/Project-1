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
                <h3 class="card-title">Class Buah</h3>
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
// buka class buah
class Buah{
    // buat property
    public $name;
    protected $color;
    private $berat;

    // buat method
    public function set_color($c){
        return $this->color = $c;
    }
     public function set_berat($b){
         return $this->berat = $b;
    }
}
// buat object
$mangga = new buah();
echo $mangga -> name  = 'Mangga';
echo "<br/>";
echo $mangga -> set_color('Hijau');
echo "<br/>";
echo $mangga -> set_berat('300kg');
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
                <h3 class="card-title">Class Fruit</h3>
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
class Fruit{
    public $name;
    public $warna;

    public function __construct($name, $warna)
    {
        $this->name = $name;
        $this->warna = $warna;
    }
    public function intro(){
        echo "<br/> Nama Aku adalah {$this->name} dan warnaku adalah {$this->warna}";
    }
}
class Strawberry extends Fruit{
    public function message(){
        echo "Aku adalah sebuah strawberry atau pisang?";
    }
}
$buah = new Strawberry("Strawberry", "Merah");
$buah->message();
$buah->intro();
?>
</hr>
</br>
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
                <h3 class="card-title">Tugas Dispenser</h3>
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
class Dispenser{
    public $namaMinuman;
    protected $volume;
    protected $hargaSegelas;
    const volumeGelas = 250;
    public $hasilVolume;

    public function isi ($vol){
        return $this->volume = $vol;
    }
    public function harga ($hrg){
        return $this->hargaSegelas = $hrg;
    }
    public function hasilVolume($vol){
        $this->volume = $vol - self::volumeGelas;
        echo "Hasil Volume Sekarang Adalah" .$this->volume ." " . "Ml";
    }
}
$aqua = new Dispenser();
echo $aqua -> namaMinuman = 'Nama Minuman : Aqua';
echo "<hr>";
echo "</br>";
echo $aqua -> isi ('Volume galon nya adalah 1000 Ml');
echo "</br>";
echo $aqua -> harga ('Harga segelas nya adalah 3000 Rupiah');
echo "</br>";
echo "Andi membeli air 1 gelas yang volumenya " .Dispenser::volumeGelas ." " . "Ml";
echo "</br>";
$aqua->hasilVolume(1000);
?>
<?php include_once "footer.php"?>