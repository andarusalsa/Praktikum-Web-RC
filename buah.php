<?php

include "harga.php";

class buah
{
    var $sumJeruk, $sumMangga, $sumApelk;
   
    public function __construct($jeruk, $mangga, $apel){
        $this->jeruk = $jeruk;
        $this->mangga = $mangga;
        $this->apel = $apel;
    }

    public function getJeruk(){
        $this->sumJeruk = $this->jeruk * 10000;
        echo "<div style = 'font:18px tahoma; color:#000000; text-align:center'><br>Harga jeruk : Rp.$this->sumJeruk</div>";
    }

    public function getMangga(){
        $this->sumMangga = $this->mangga * 15000;
        echo "<div style = 'font:18px tahoma; color:#000000; text-align:center'><br>Harga mangga : Rp.$this->sumMangga</div>";
    }

    public function getApel(){
        $this->sumApel = $this->apel* 20000;
        echo "<div style = 'font:18px tahoma; color:#000000; text-align:center'><br>Harga apel : Rp.$this->sumApel </div>";
    }

    public function total(){
        $total = $this->sumMangga + $this->sumJeruk + $this->sumApel;
        echo "<div style = 'font:21px tahoma; color:#ff0000; text-align:center'><br>Total belanjaan = Rp. $total</div>";
    }
}


$jeruk = $_POST["jeruk"];
$mangga = $_POST["mangga"];
$apel = $_POST["apel"];
echo "<div style = 'font:21px tahoma; color:#ff0000; text-align:center'>Struk Belanja </br></div>";
$jual = new buah($jeruk, $mangga, $apel);
$jual->getJeruk();
$jual->getMangga();
$jual->getApel();
$jual->total();
?>