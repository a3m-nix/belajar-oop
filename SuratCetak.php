<?php 

namespace App\Getah;
use App\Getah\SuratCetakInterface;
class SuratCetak{
    private $surat;

    public function __construct(SuratCetakInterface $surat)
    {
        $this->surat = $surat;
    }
    
    public function toHTML()
    {
        echo "\n";
        echo $this->surat->getNomor();
        echo "\n";
        echo $this->surat->isi();
        echo "\n";
        echo $this->surat->getTanggal();
        echo "\n";
    }
}
?>