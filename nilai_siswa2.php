   <?php
   require_once 'libfungsi.php';
   // Ngambil request data yang kita input
   $proses = $_POST['proses'];
   $nama_siswa =$_POST['nama'];
   $mata_kuliah =$_POST['matkul'];
   $uts =$_POST['nilai_uts'];
   $uas =$_POST['nilai_uas'];
   $tugas =$_POST['nilai_tugas'];
   $total = $uts + $uas + $tugas;
   $_nilai = $total/3;
   $hasil_ujian = kelulusan($_nilai);
   $peringkat = grade($_nilai);

   // menampilkan data yang telah kita ambil
   echo "Nama : $nama_siswa";
   echo "</br>Mata Kuliah: $mata_kuliah";
   echo "</br>Nilai UTS : $uts";
   echo "</br>Nilai UAS : $uas";
   echo "</br>Nilai Tugas : $tugas";
   echo "</br>Grade : $peringkat";
   echo "</br>Keterangan : $hasil_ujian";
   echo "</br>Data Telah di Simpan $proses";
   ?>