<?php
// Definisi kelas
class Motor {
    private $warna;
    private $merek;
    private $model;
    private $kecepatan;

    public function __construct($warna, $merek, $model) {
        $this->warna = $warna;
        $this->merek = $merek;
        $this->model = $model;
    }

    public function bergerak() {
        echo "Motor bergerak<br>";
    }

    public function berhenti() {
        echo "Motor berhenti<br>";
    }

    public function getKecepatan() {
        return $this->kecepatan;
    }

    public function setKecepatan($km) {
        $this->kecepatan = $km;
    }

    public function tambahKecepatan($km) {
        $this->kecepatan += $km;
    }

    public function kurangiKecepatan($km) {
        $this->kecepatan -= $km;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }  

    public function getMerek() {
        return $this->merek;
    }

    public function setMerek($merek) {
        $this->merek = $merek;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }
}

// Penggunaan kelas
$MotorKu = new Motor("Merah", "Ducati", "Lamborgini");

$MotorKu->bergerak();
$MotorKu->berhenti();

echo "Before<br>";
echo "Warna Motor: " . $MotorKu->getWarna() . " <br>";
echo "Merek Motor: " . $MotorKu->getMerek() . " <br>";
echo "Model Motor: " . $MotorKu->getModel() . " <br><br>"; 

$MotorKu->setWarna("Biru");
$MotorKu->setMerek("Yamaha");
$MotorKu->setModel("Aprilia");

echo "After<br>";
echo "Warna Motor: " . $MotorKu->getWarna() . " <br>";
echo "Merek Motor: " . $MotorKu->getMerek() . " <br>";
echo "Model Motor: " . $MotorKu->getModel() . " <br><br>";

echo "Kecepatan<br>";
echo "Kecepatan saat ini: " . $MotorKu->getKecepatan() . " km<br><br>";

$MotorKu->tambahKecepatan(10);
echo "Menambahkan 10 km kecepatan<br>";
echo "Kecepatan saat ini: " . $MotorKu->getKecepatan() . " km<br><br>";

$MotorKu->tambahKecepatan(20);
echo "Menambahkan 20 km kecepatan<br>";
echo "Kecepatan saat ini: " . $MotorKu->getKecepatan() . " km<br><br>";

$MotorKu->kurangiKecepatan(10);
echo "Menguranggi 10 km kecepatan<br>";
echo "Kecepatan saat ini: " . $MotorKu->getKecepatan() . " km<br><br>";

$MotorKu->tambahKecepatan(10);
echo "Menambahkan 10 km kecepatan<br>";
echo "Kecepatan saat ini: " . $MotorKu->getKecepatan() . " km<br><br>";

$MotorKu->setKecepatan(10);
echo "Set 10 km kecepatan<br>";
echo "Kecepatan saat ini: " . $MotorKu->getKecepatan() . " km<br><br>";
?>