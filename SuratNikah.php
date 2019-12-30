<?php 

namespace App\Getah;
use App\Getah\SuratCetakInterface;
use App\Getah\SuratAbstract;
class SuratNikah extends SuratAbstract implements SuratCetakInterface{
    public $pemohon;
    public $namaPria;
    public $namaWanita;
    public function jenis() : string
    {
        return "Surat Nikah";
    }
    public function isi()
    {
        return 
        "
        Nama Pemohon : {$this->pemohon},  
        Perihal : Pengen buat surat menikah
        antara : {$this->namaPria} 
        dengan {$this->namaWanita}
        ";
    }
    public function getTanggal()
    {
        return date("d/m/Y");
    }
    public function getNomor()
    {
        return "nikah/003";
    }
}
