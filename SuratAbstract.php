<?php 

namespace App\Getah;
abstract class SuratAbstract{
    public $pemohon;
    abstract function jenis() : string;
    abstract public function isi();

    public function getHeader()
    {
        return "ini header surat ".$this->jenis();
    }
    public function getFooter()
    {
        return "ini footer surat ";
    }
}