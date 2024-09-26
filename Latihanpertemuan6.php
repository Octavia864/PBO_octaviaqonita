<?php
class BilanganDeret {
    private $nilai;
    private $volume;
 
    public function __construct($nilai) {
        $this->nilai = $nilai;
        $this->volume = 1;
    }
 
    public function setVolume($volume) {
        $this->volume = $volume;
    }
 
    public function getVolume() {
        return $this->volume;
    }
 
    public function tampilkanBilanganDeret() {
        for ($i = 1; $i <= $this->volume; $i++) {
            echo "Bilangan Deret ke-". $i. ": ". ($this->nilai * $i). "\n";
        }
    }
}
 
$bilanganDeret = new BilanganDeret(3);
 
$bilanganDeret->setVolume(5);
$bilanganDeret->tampilkanBilanganDeret();
?>
