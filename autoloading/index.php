<?php 
require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi kishimoto", "Shounen jump", 20000, 100);
$produk2 = new Game("Minecraft", "Notch", "Mojang", 250000, 10);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();