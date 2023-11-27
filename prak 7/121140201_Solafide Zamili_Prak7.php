<!-- 
Nama : Solafide Zamili
NIM : 121140201
Kelas praktikum : RB -->

<?php
// membuat class manusia (sebagai class utama
class Manusia{
    // melakukan deklarasi variabel bersifat private
    // dalam artian variabel nama dan umur hanya dapat diakses dalam class utama (class manusia) saja
    private $nama;
    private $umur;

    // method atau fungsi __construct yang akan menginisialisasi nilai parameter variabel nama dan umur ke parameter fungsi
    public function __construct($nama, $umur) {
        $this->nama = $nama;  // menyimpan (assign) nilai variabel nama
        $this->umur = $umur;  // menyimpan (assign) nilai variabel umur
        echo "objek berhasil dibuat<br>";
        // Menampilkan perintah "objek berhasil di buat" 
    }

    // method atau fungsi yang digunakan untuk menampikan teks
    // kemudian fungsi ini juga mengambil nilai dari paramter fungsi __construct untuk di masukkan pada echo
    public function tampilkan_data(){
        echo "Nama : ".$this->nama. "<br>". "Umur : ". $this->umur. "<br>";
    }
}

// class inherit (class turunan)
// class ini sebagai mengambil nilai dan dapat amengiplementasikan nilai variabel dari class utamanya
// class ini menjadi class turunan yang (dapat diartikan : dapat menambah parameter baru sesuai dengan parameter class utama)
class Mhs extends Manusia{
    // deklarasi variabel nim yang bersifat private (hanya dapat diakses pada variabel Mhs saja)
    private $nim;

    // membuat method __construct yang menyimpan atau mengassign nilai variabel pada parameter fungsi
    public function __construct($nama, $umur, $nim) {
        // perintah ini menandakan bahwa paramter dari fungsi di class utama terhubung, sehingga variabelnya dapat di implementasikan  pada class inherit ini
        parent::__construct($nama, $umur);
        // asign nilai variabel baru pada method 
        $this->nim = $nim;
        echo "objek Mahasiswa (class inherit) berhasiil dibuat"; // menamilkan perintah atau pesan
    }
}

// perintah untuk memangggil class

// menggunakan objek untuk pemanggilan class
$Manusia = new Manusia("Solafide", 20); // memanggil class (di set sebagai class utama)
$Mahasiswa = new Mhs("Solafide", 20, 121140201);  // memanggil class (di set sebagai class inherit)
// menyimpan class("nilai paramter") kedalam objek

// pada pemanggilan dua class diatas sama, karena mereka sama sama disebut sebagai class 
// pemanggilan class inherit tidak memengaruhi proses pemanggilan dengan objek

// berikut adalah contoh pemanggilan variabel yang dideklarasi private
$Manusia->nama;  // hal in seharusnya error dikarenakan variabel private tidak dapat diakses diluar class pembungkusnya
?>
