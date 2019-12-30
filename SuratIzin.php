<?php 

namespace App\Getah;
use App\Getah\SuratCetakInterface;
use App\Getah\SuratAbstract;
class SuratIzin extends SuratAbstract implements SuratCetakInterface{
    public $keterangan;
    public function jenis() : string
    {
        return "Surat Izin";
    }
    public function isi()
    {
        return "
            Nama Pemohon : {$this->pemohon} 
            ini isi surat izin ".$this->keterangan;
    }
    public function getTanggal()
    {
        return date("d/m/Y");
    }
    public function getNomor()
    {
        return "izin/002";
    }
}
