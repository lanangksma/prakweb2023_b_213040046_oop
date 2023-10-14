<?php

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Uncharted";
$produk2->tambahProperty = "hahaha";
var_dump($produk2);

$prduk3 = new Produk();
$prduk3->judul = "Naruto";
$prduk3->penulis = "Masashi Kishimoto";
$prduk3->penerbit = "Shonen Jump";
$prduk3->harga = 30000;

echo "Komik : $prduk3->penulis, $prduk3->penerbit";
echo "<br>";
echo $prduk3->getLabel();

echo "<hr>";

$prduk4 = new Produk();
$prduk4->judul = "Uncharted";
$prduk4->penulis = "Neil Druckmann";
$prduk4->penerbit = "Sony Computer";
$prduk4->harga = 250000;

echo "Komik : " . $prduk3->getLabel();
echo "<br>";
echo "Game : " . $prduk4->getLabel();


?>
