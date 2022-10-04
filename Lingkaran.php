
<?php
require_once 'Bentuk2D.php';
class Lingkaran extends Bentuk2D{
  public $jari2;
  public $jari_jari;
        const PHI = 3.14;

        public function __construct($jari_jari) {
            $this->jari_jari = $jari_jari;
        }

        public function namaBidang() {
            $name = 'Lingkaran';
            return $name;
        }

        public function luasBidang()
        {
            $luas = self::PHI * $this->jari_jari * $this->jari_jari;
            return $luas;
        }

        public function kelilingBidang() {
            $keliling = self::PHI * ($this->jari_jari + $this->jari_jari);
            return $keliling;
        }
}
?>