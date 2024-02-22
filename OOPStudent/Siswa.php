<?php 

class Siswa {
    public $nrp;
    public $nama;
    public $daftarNilai = [];
  
    function __construct($nrp, $nama) {
      $this->nrp = $nrp;
      $this->nama = $nama;
    }

    function tambahNilai($mapel, $nilai)
    {
        $nilaiObj = new Nilai($mapel, $nilai);
        $this->daftarNilai[] =  $nilaiObj;
    }
}

?>