<?php

$pinjaman = readline("Besaran Pinjaman : ") . "<br>";
class tokopegadaian
{
    var $pinjaman = 1000000;
    var $bunga = 10;
    var $angsuran = 5;

    public function Besar_Pinjaman()
    {
        return ($this->pinjaman * ($this->bunga / 100)) + $this->pinjaman;
    }

    public function Angsuran()
    {
        $Besar_Pinjaman = $this->Besar_Pinjaman();
        return $Besar_Pinjaman / $this->angsuran;
    }
}

$objekPegadaianSyariah = new tokopegadaian;
echo "TOKO PEGADAIAN SYARIAH" . "<br>";
echo "Jl Keadilan No 16" . "<br>";
echo "Telp. 72353459" . "<br>";
echo "<br>";
echo "Program Penghitung Besaran Angsuran Hutang" . "<br>";
echo "Besaran Pinjaman : Rp." . $objekPegadaianSyariah->pinjaman . "<br>";
echo "Masukan besar Bunga (%): " . $objekPegadaianSyariah->bunga . "<br>";
echo "Total Pinjaman : Rp." . $objekPegadaianSyariah->Besar_Pinjaman() . "<br>";
echo "Lama Angsuran : " . $objekPegadaianSyariah->angsuran . "<br>";
echo "Besaran Angsuran : Rp." . $objekPegadaianSyariah->Angsuran() . "<br>";
