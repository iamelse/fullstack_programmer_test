<?php 

class Nilai {
    public $mapel;
    public $nilai;

    public function __construct($mapel, $nilai)
    {
        $this->mapel = $mapel;
        $this->nilai = $nilai;
    }
}

?>