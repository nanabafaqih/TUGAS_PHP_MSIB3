<?php
    class Pegawai
    {
        // public variable
        public $nip;
        public $nama;
        public $jabatan;
        public $agama;
        public $status;

        // constructor
        public function __construct($nip, $nama, $jabatan, $agama, $status)
        {
            $this->nip = $nip;
            $this->nama = $nama;
            $this->jabatan = $jabatan;
            $this->agama = $agama;
            $this->status = $status;
        }

        public function setGapok() {
            switch ($this->jabatan) {
                case 'Manager': $gapok = 15000000; break;
                case 'Asisten Manager': $gapok = 10000000; break;
                case 'Kepala Bagian': $gapok = 7000000; break;
                case 'Staff': $gapok = 4000000; break;
                default: $gapok = 0; break;
            }

            return $gapok;
        }

        public function setTunjab() {
            $tunjab = $this->setGapok() * 20 /100;
            return $tunjab;
        }

       
        public function setTunkel() {
            $tunkel = ($this->status == 'Menikah') ? $this->setGapok() * 10 / 100 : 0;
            return $tunkel;
        }

        public function setGator() {
            $gator = $this->setGapok() + $this->setTunjab() + $this->setTunkel();
            return $gator;
        }

        public function setZakatProfesi() {
            $zaprof = ($this->agama == 'Islam' && $this->setGator() >= 6000000) ? $this->setGator() * 2.5 / 100 : 0;
            return $zaprof;
        }

        public function setTakeHomePay() {
            $takeHomePay = $this->setGator() - $this->setZakatProfesi();
            return $takeHomePay;
        }

        
        public function mencetak() {
            echo '<h5 class="card-title fw-bold">'.$this->nama.'</h5>';
            echo '<p class="card-text">
                    NIP: '.$this->nip;
                    '<br />Jabatan: '.$this->jabatan;
                    '<br />Agama: '.$this->agama;
                    '<br />Status: '.$this->status;
                    '<br />Gaji Pokok: Rp. '.number_format($this->setGapok(), 2, ',', '.');
                    '<br />Tunjangan Jabatan: Rp. '.number_format($this->setTunjab(), 2, ',', '.');
                    '<br />Tunjangan Keluarga: Rp. '.number_format($this->setTunkel(), 2, ',', '.');
                    '<br />Gaji Kotor: Rp. '.number_format($this->setGator(), 2, ',', '.');
                    '<br />Zakat Profesi: Rp. '.number_format($this->setZakatProfesi(), 2, ',', '.');
                    '<br />Take Home Pay: Rp. '.number_format($this->setTakeHomePay(), 2, ',', '.');
                '</p>';
        }
    }
?>