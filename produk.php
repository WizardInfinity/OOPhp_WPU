<?php
//jualan produk
//komik
//game

class Produk{
    public $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0;

    public function getLabel()  {
        return "$this->judul, $this->penulis";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "minecraft";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "naruto";
$produk3->penulis = "masashi kishimoto";
$produk3->penerbit = "shounen jump";
$produk3->harga = 2000;

$produk4 = new Produk();
$produk4->judul = "minecraft";
$produk4->penulis = "notch";
$produk4->penerbit = "mojang";
$produk4->harga = 4000;

echo "Komik :". $produk3->getLabel();
echo "<br>";
echo "Game :". $produk4->getLabel();