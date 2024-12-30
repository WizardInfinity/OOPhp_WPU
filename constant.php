<?php
//tidak bisa masuk class
// define('NAMA', 'Habieb Anugrah');
// echo NAMA;

// echo "<br>";

// // bisa masuk class
// const UMUR = 19;
// echo UMUR;

// class Coba{
//     const NAMA = 'Habieb Anugrah';
// }

// echo Coba::NAMA;


//magic constant
// echo __LINE__;
// echo "<br>";
// echo __FILE__;
// echo "<br>";
// echo __DIR__;
// echo "<br>";

// function Coba(){
//     return __FUNCTION__;
// }
// echo Coba();


class Coba {
    public $class = __CLASS__;
}

$obj = new Coba;
echo $obj->class;