<?php

interface InfoProduk{
    public function getInfoProduk();
}

//class produk
abstract class Produk
{
    protected $judul, $penulis, $penerbit, $harga, $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul)
    {
        if (!is_string($judul)) {
            throw new Exception("Judul Harus String!");
        }
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();

}

//child class komik dari parent produk
class Komik extends Produk implements InfoProduk
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp {$this->harga})";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

//child class game dari parent produk
class Game extends Produk implements InfoProduk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp {$this->harga})";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}


$produk1 = new Komik("Naruto", "Masashi kishimoto", "Shounen jump", 20000, 100);
$produk2 = new Game("Minecraft", "Notch", "Mojang", 250000, 10);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();
