<?php
require_once 'Bentuk2D.php';
class Segitiga extends Bentuk2D{
  public $alas;
  public $sisi_O;
  public $sisi_P;
  public $sisi_Q;
  public $tinggi;

  public function __construct($alas,$sisi_O,$sisi_P,$sisi_Q,$tinggi){
    $this->alas = $alas;
    $this->sisi_O = $sisi_O;
    $this->sisi_P = $sisi_P;
    $this->sisi_Q = $sisi_Q;
  }
  
    public function namaBidang(){
      $name = 'segitiga';
      return $name;
    }
    public function LuasBidang(){
      $luas = ($this->alas * $this->tinggi)*0.5;
      return $luas;
    }
    public function KelilingBidang(){
      $keliling = $this->sisi_O + $this->sisi_P + $this->sisi_Q;
            return $keliling;
    }
}
?>