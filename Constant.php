<?php

// define('NAMA', 'Muhamad Rivan Sahronie');
// echo NAMA;

// echo "<hr>";

// const UMUR = 21;
// echo UMUR;

// class Coba
// {
//     const NAMA = 'Muhamad Rivan Sahronie';
// }

// echo Coba::NAMA;

// echo __FILE__;


// function coba()
// {
//     return __FUNCTION__;
// }

// echo coba();

class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

// Magic Constant
// __LINE__ = untuk menampilkan baris
// __FILE__ = untuk menampilkan alamat file
// __DIR__ = untuk menampilkan direktori
// __FUNCTION__ = untuk menampilkan function
// __CLASS__ = untuk menampilkan class
// __TRAIT__ = untuk menampilkan trait atau kelas yang digunakan berulang kali
// __METHOD__ = untuk menampilkan method
// __NAMESPACE__ = untuk menampilkan namespace