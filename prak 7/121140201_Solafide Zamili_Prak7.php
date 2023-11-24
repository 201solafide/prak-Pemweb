<!-- 
Nama : Solafide Zamili
NIM : 121140201
Kelas praktikum : RB -->

<?php

class Manusia{
    private $nama;
    private $umur;

    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
        echo "objek berhasil dibuat<br>";
    }

    public function tampilkan_data(){
        echo "Nama : ".$this->nama. "<br>". "Umur : ". $this->umur. "<br>";
    }
}

class Mhs extends Manusia{
    private $nim;

    public function __construct($nama, $umur, $nim) {
        parent::__construct($nama, $umur);
        $this->nim = $nim;
        echo "objek Mahasiswa (class inherit) berhasiil dibuat";
    }
}

$Manusia = new Manusia("Solafide", 20);
$Mahasiswa = new Mhs("Solafide", 20, 121140201);


?>
