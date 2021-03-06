<?php 
class Pasien{
    public $id, $kode, $nama, $tmpt_lahir, $tgl_lahir, $jenis_kelamin, $email;

    public function __construct($id, $kode, $nama, $tmpt_lahir, $tgl_lahir, $jns_kelamin, $email){
        $this->id = $id;
        $this->kode = "PSN" . sprintf('%02d', $this->id);
        $this->nama = $nama;
        $this->tmpt_lahir = $tmpt_lahir;
        $this->tgl_lahir = $tgl_lahir;
        $this->jns_kelamin = $jns_kelamin;
        $this->email = $email;
    }
}

trait Bmi{
    public $brt_badan, $tggi_badan;
    
    public function hasilBMI(){
        return $this-> brt_badan / (($this->tggi_badan/100)**2);
    }

    public function nilai($nilai){
        if ($nilai <= 18.4){
            return "Kekurangan Berat Badan";
        }elseif ($nilai >= 18.5 && $nilai <= 23.9){
            return "Normal (Ideal)";
        }elseif ($nilai >= 24 && $nilai <= 26.9){
            return "Kelebihan Berat Badan";
        }elseif ($nilai >= 27 && $nilai <= 29.9){
            return "Obesitas 1";
        }elseif ($nilai >= 30){
            return "Obesitas 2";
        }
    }
}

class BmiPasien extends Pasien{
    use Bmi;
    public $bmi, $tanggal, $pasien;

    public function __construct($id, $tanggal, $nama, $tmpt_lahir, $tgl_lahir, $jns_kelamin, $email, $brt_badan, $tggi_badan){
        parent::__construct($id, $tanggal, $nama, $tmpt_lahir, $tgl_lahir, $jns_kelamin, $email, $brt_badan, $tggi_badan);
        $this->brt_badan = $brt_badan;
        $this->tggi_badan = $tggi_badan;
        $this->tanggal = date ("Y-m-d");
    }
}
?>